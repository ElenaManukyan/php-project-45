<?php

namespace BrainGames\GsdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runDialogue;
use function BrainGames\Cli\welcome;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

function isGsd(): void
{
    $name = welcome();
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        $expectedAnswer = gcd($randomNumberFirst, $randomNumberSecond);

        if (intval($answer) === $expectedAnswer) {
            runDialogue('correct');
        } else {
            runDialogue('tryAgain', $name, $answer, $expectedAnswer);
            return;
        }
    }

    runDialogue('congrats', $name);
}
