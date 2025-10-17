<?php

namespace BrainGames\isPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function startPrime(): void
{
    //$name = welcome();
    //line('Answer "yes" if given number is prime. Otherwise answer "no".');

    //for ($i = 0; $i < 3; $i += 1) {
        $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        $randomNumber = random_int(0, 100);

        //line('Question: %s', $randomNumber);
        //$answer = prompt('Your answer');

        $correctAnswer = isPrimeInner($randomNumber) ? 'yes' : 'no';

        playGame($description, $randomNumber, $correctAnswer);

        //if ((($correctAnswer === 'yes') && ($answer === 'yes')) || (($correctAnswer === 'no') && ($answer === 'no'))) {
        //    playGame('correct');
        //} else {
        //    playGame('tryAgain', $name, $answer, $correctAnswer);
        //    return;
        //}
    //}

    //playGame('congrats', $name);
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
