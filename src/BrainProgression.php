<?php

namespace BrainGames\BrainProgression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;
use function BrainGames\Cli\welcome;

function generateProgression(int $start, int $step): array
{
    $progression = [];

    for ($i = 0; $i <= 10; $i += 1) {
        $progression[] = $start + $i * $step;
    }

    return $progression;
}

function progression(): void
{
    welcome();

    $name = prompt('May I have your name?');
    greeting($name);
    line('What number is missing in the progression?');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $st = random_int(1, 5);
        $progr = generateProgression($randomNumberFirst, $st);
        $hiddenElIndex = random_int(0, (count($progr) - 1));
        $hiddenEl = $progr[$hiddenElIndex];
        $progr[$hiddenElIndex] = '..';
        $questionProgr = implode(' ', $progr);

        line('Question: %s', $questionProgr);
        $answer = prompt('Your answer');

        if (intval($answer) === $hiddenEl) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $hiddenEl);
            tryAgain($name);
            return;
        }
    }

    congrats($name);
}
