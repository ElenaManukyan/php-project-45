<?php

namespace BrainGames\GsdGame;

use function BrainGames\Engine\playGame;

const NUM_GAMES = 3;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function startGsd(): void
{
    $roundData = [];
    for ($i = 0; $i < NUM_GAMES; $i++) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        $expectedAnswer = isGcd($randomNumberFirst, $randomNumberSecond);

        $roundData[] = [
            'question' => $question,
            'answer' => (string) $expectedAnswer,
        ];
    }

    playGame(DESCRIPTION, $roundData);
}

function isGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
