<?php

namespace BrainGames\isPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;
use function BrainGames\Cli\welcome;

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

function isPrime(): void
{
    welcome();

    $name = prompt('May I have your name?');
    greeting($name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(0, 100);

        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer');

        $correctAnswer = isPrimeInner($randomNumber);

        if (($correctAnswer && ($answer === 'yes')) || (!$correctAnswer && ($answer === 'no'))) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer ? 'yes' : 'no');
            tryAgain($name);
            return;
        }
    }

    congrats($name);
}
