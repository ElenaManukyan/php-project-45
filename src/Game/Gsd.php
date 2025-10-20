<?php

namespace BrainGames\GsdGame;

use function BrainGames\Engine\playGame;

function startGsd(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $numGames = 3;
    $roundData = [];
    for ($i = 0; $i < $numGames; $i++) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        $expectedAnswer = isGcd($randomNumberFirst, $randomNumberSecond);

        $roundData[] = [
            'question' => $question,
            'answer' => (string) $expectedAnswer,
        ];
    }

    playGame($description, $roundData);
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
