<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;

function isEven()
{
    $name = prompt('May I have your name?');

    greeting($name);

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(1, 100);
        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer');

        $expectedAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';

        if ($answer === $expectedAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswer);
            tryAgain($name);
            return;
        }
    }

    congrats($name);
}
