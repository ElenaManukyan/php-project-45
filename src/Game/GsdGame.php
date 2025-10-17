<?php

namespace BrainGames\GsdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function isGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

function startGsd(): void
{
    //$name = welcome();
    //line('Find the greatest common divisor of given numbers.');

    //for ($i = 0; $i < 3; $i += 1) {
        $description = 'Find the greatest common divisor of given numbers.';
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $question = "{$randomNumberFirst} {$randomNumberSecond}";
        //line('Question: %s', $question);
        //$answer = prompt('Your answer');

        $expectedAnswer = isGcd($randomNumberFirst, $randomNumberSecond);

        playGame($description, $question, $expectedAnswer);

        //if (intval($answer) === $expectedAnswer) {
       //     playGame('correct');
       // } else {
        //    playGame('tryAgain', $name, $answer, $expectedAnswer);
       //     return;
       // }
    //}

    //playGame('congrats', $name);
}
