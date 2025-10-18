<?php

namespace BrainGames\BrainProgression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function generateProgression(int $start, int $step): array
{
    $progression = [];

    for ($i = 0; $i <= 10; $i += 1) {
        $progression[] = $start + $i * $step;
    }

    return $progression;
}

function startProgression(): void
{
    $description = 'What number is missing in the progression?';
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $st = random_int(1, 5);
        $progr = generateProgression($randomNumberFirst, $st);
        $hiddenElIndex = random_int(0, 10);
        $hiddenEl = $progr[$hiddenElIndex];
        $progr[$hiddenElIndex] = '..';
        $questionProgr = implode(' ', $progr);

        $res = playGame($description, $questionProgr, $hiddenEl, $i);

        if (!$res) {
            return;
        }
    }
}
