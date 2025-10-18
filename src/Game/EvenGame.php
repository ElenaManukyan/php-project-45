<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\playGame;
use function BrainGames\Cli\welcome;

function startEven(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = random_int(1, 100);

        $expectedAnswer = (isEven($randomNumber)) ? 'yes' : 'no';

        $res = playGame($description, $randomNumber, $expectedAnswer, $i);

        if (!$res) {
            return;
        }
    }
}

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}
