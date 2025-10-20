<?php

namespace BrainGames\isPrime;

use function BrainGames\Engine\playGame;

function startPrime(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $numGames = 3;
    $roundData = [];
    for ($i = 0; $i < $numGames; $i++) {
        $randomNumber = random_int(0, 100);
        $correctAnswer = isPrimeInner($randomNumber) ? 'yes' : 'no';

        $roundData[] = [
            'question' => $randomNumber,
            'answer' => $correctAnswer,
        ];
    }

    playGame($description, $roundData);
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
