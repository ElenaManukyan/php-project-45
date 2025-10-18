<?php

namespace BrainGames\isPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function startPrime(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < 3; $i += 1) {
        $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        $randomNumber = random_int(0, 100);

        $correctAnswer = isPrimeInner($randomNumber) ? 'yes' : 'no';

        $res = playGame($description, $randomNumber, $correctAnswer, $i);

        if (!$res) {
            return;
        }
    }
}

function isPrimeInner(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    if ($num === 2) {
        return true;
    }
    if (($num % 2) === 0) {
        return false;
    }

    for ($j = 3; $j <= sqrt($num); $j += 2) {
        if (($num % $j) === 0) {
            return false;
        }
    }

    return true;
}
