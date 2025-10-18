<?php

namespace BrainGames\GsdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function isGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

function startGsd(): void
{
    $description = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        $expectedAnswer = isGcd($randomNumberFirst, $randomNumberSecond, $i);

        $res = playGame($description, $question, $expectedAnswer);

        if (!$res) {
            return;
        }
    }
}
