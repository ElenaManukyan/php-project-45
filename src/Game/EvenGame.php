<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function startEven(): void
{
    //$name = welcome();
    //line('Answer "yes" if the number is even, otherwise answer "no".');

    //for ($i = 0; $i < 3; $i += 1) {
        $description = 'Answer "yes" if the number is even, otherwise answer "no".';
        $randomNumber = random_int(1, 100);
        //line('Question: %s', $randomNumber);
        //$answer = prompt('Your answer');

        $expectedAnswer = (isEven($randomNumber)) ? 'yes' : 'no';

        playGame($description, $randomNumber, $expectedAnswer);

        //if ($answer === $expectedAnswer) {
        //    playGame('correct');
        //} else {
        //    playGame('tryAgain', $name, $answer, $expectedAnswer);
        //    return;
        //}
    //}

    //playGame('congrats', $name);
}

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}
