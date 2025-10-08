<?php

namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;

function calc()
{
    $name = prompt('May I have your name?');
    greeting($name);

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
