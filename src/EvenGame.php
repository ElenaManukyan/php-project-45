<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;

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
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
