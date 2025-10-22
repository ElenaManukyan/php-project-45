<?php

namespace BrainGames\BrainProgression;

use function BrainGames\Engine\playGame;

const NUM_GAMES = 3;
const DESCRIPTION = 'What number is missing in the progression?';

function startProgression(): void
{
    //$description = 'What number is missing in the progression?';

    //$numGames = 3;
    $roundData = [];
    for ($i = 0; $i < NUM_GAMES; $i++) {
        $randomNumberFirst = random_int(1, 100);
        $st = random_int(1, 5);
        $progr = generateProgression($randomNumberFirst, $st);

        $hiddenElIndex = random_int(0, 10);
        $hiddenEl = $progr[$hiddenElIndex];
        $progr[$hiddenElIndex] = '..';
        $questionProgr = implode(' ', $progr);

        $roundData[] = [
            'question' => $questionProgr,
            'answer' => (string) $hiddenEl,
        ];
    }

    playGame(DESCRIPTION, $roundData);
}

function generateProgression(int $start, int $step): array
{
    $progression = [];

    for ($i = 0; $i <= 10; $i += 1) {
        $progression[] = $start + $i * $step;
    }

    return $progression;
}
