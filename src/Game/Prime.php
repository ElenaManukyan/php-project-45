<?php

namespace BrainGames\isPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runDialogue;
use function BrainGames\Cli\welcome;

function Prime(): void
{
    $name = welcome();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(0, 100);

        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer');

        $correctAnswer = isPrimeInner($randomNumber);

        if (($correctAnswer && ($answer === 'yes')) || (!$correctAnswer && ($answer === 'no'))) {
            runDialogue('correct');
        } else {
            runDialogue('tryAgain', $name, $answer, $hiddenEl);
            return;
        }
    }

    runDialogue('congrats');
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
