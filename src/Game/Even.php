<?php

namespace BrainGames\EvenGame;

use function BrainGames\Engine\playGame;

function startEven(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $numGames = 3;
    $roundData = [];
    for ($i = 0; $i < $numGames; $i++) {
        $randomNumber = random_int(1, 100);
        $expectedAnswer = (isEven($randomNumber)) ? 'yes' : 'no';

        $roundData[] = [
            'question' => $randomNumber,
            'answer' => $expectedAnswer,
        ];
    }

    playGame($description, $roundData);
}

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}
