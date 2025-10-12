<?php

namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;
use function BrainGames\Cli\welcome;

function calc(): void
{
    welcome();

    $name = prompt('May I have your name?');
    greeting($name);
    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $operands = ['+', '-', '*'];
        $selectOperand = $operands[random_int(0, count($operands) - 1)];
        $question = "{$randomNumberFirst} {$selectOperand} {$randomNumberSecond}";

        line('Question: %s', $question);
        $answer = prompt('Your answer');

        $expectedAnswer = 0;

        if ($selectOperand === '+') {
            $expectedAnswer = $randomNumberFirst + $randomNumberSecond;
        } elseif ($selectOperand === '-') {
            $expectedAnswer = $randomNumberFirst - $randomNumberSecond;
        } elseif ($selectOperand === '*') {
            $expectedAnswer = $randomNumberFirst * $randomNumberSecond;
        }

        if (intval($answer) === $expectedAnswer) {
            line('Correct!');
        } else {
            line("Your answer: '%s'", $answer);
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswer);
            tryAgain($name);
            return;
        }
    }

    congrats($name);
}
