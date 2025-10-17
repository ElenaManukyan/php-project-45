<?php

namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function startCalc(): void
{
    //$name = welcome();
    //line('What is the result of the expression?');

    //for ($i = 0; $i < 3; $i += 1) {
        $description = 'What is the result of the expression?';
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $operands = ['+', '-', '*'];
        $selectOperand = $operands[random_int(0, count($operands) - 1)];
        $question = "{$randomNumberFirst} {$selectOperand} {$randomNumberSecond}";

        //line('Question: %s', $question);
        //$answer = prompt('Your answer');

        $expectedAnswer = calculate($randomNumberFirst, $randomNumberSecond, $selectOperand);

        playGame($description, $question, $expectedAnswer);

        //if (intval($answer) === $expectedAnswer) {
       //      playGame('correct');
        //} else {
        //    playGame('tryAgain', $name, $answer, $expectedAnswer);
        //    return;
        //}
    //}

    //playGame('congrats', $name);
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
