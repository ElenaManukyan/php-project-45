<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runDialogue;
use function BrainGames\Cli\welcome;

function isEven(): void
{
    $name = welcome();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(1, 100);
        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer');

        $expectedAnswer = (even($randomNumber)) ? 'yes' : 'no';

        if ($answer === $expectedAnswer) {
            runDialogue('correct');
        } else {
            runDialogue('tryAgain', $name, $answer, $expectedAnswer);
            return;
        }
    }

    runDialogue('congrats');
}

function even(int $num): bool
{
    return ($num % 2 === 0);
}
