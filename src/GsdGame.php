<?php

namespace BrainGames\GsdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;
use function BrainGames\Cli\welcome;

function isGsd()
{
    welcome();
    $name = prompt('May I have your name?');
    greeting($name);
    line('Find the greatest common divisor of given numbers.');

    function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return abs($a);
    }

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        $expectedAnswer = gcd($randomNumberFirst, $randomNumberSecond);

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