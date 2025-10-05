<?php

namespace BrainGames\EvenGame;

use function BrainGames\Cli\tryAgain;
use function BrainGames\Cli\congrats;
use function cli\line;
use function cli\prompt;

function isEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(1, 100);
        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer');

        $expectedAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';

        if ($answer === $expectedAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswer);
            tryAgain();
            exit(1);
        }
    }

    congrats();
}
