<?php

namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runDialogue;
use function BrainGames\Cli\welcome;

function calc(): void
{
    $name = welcome();
    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $operands = ['+', '-', '*'];
        $selectOperand = $operands[random_int(0, count($operands) - 1)];
        $question = "{$randomNumberFirst} {$selectOperand} {$randomNumberSecond}";

        line('Question: %s', $question);
        $answer = prompt('Your answer');

        $expectedAnswer = calculate($randomNumberFirst, $randomNumberSecond, $selectOperand);

        if (intval($answer) === $expectedAnswer) {
             runDialogue('correct');
        } else {
            runDialogue('tryAgain', $name, $answer, $expectedAnswer);
            return;
        }
    }

    runDialogue('congrats');
}

function calculate(int $num1, int $num2, string $operand): int
{
    $expectedAnswer = 0;
    if ($operand === '+') {
        $expectedAnswer = $num1 + $num2;
    } elseif ($operand === '-') {
        $expectedAnswer = $num1 - $num2;
    } elseif ($operand === '*') {
        $expectedAnswer = $num1 * $num2;
    }

    return $expectedAnswer;
}
