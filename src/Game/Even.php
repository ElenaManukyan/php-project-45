<?php

namespace BrainGames\EvenGame;

use function BrainGames\Engine\playGame;

const NUM_GAMES = 3;
const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEven(): void
{
    //$description = 'Answer "yes" if the number is even, otherwise answer "no".';
    //$numGames = 3;
    $roundData = [];
    for ($i = 0; $i < NUM_GAMES; $i++) {
        $randomNumber = random_int(1, 100);
        $expectedAnswer = (isEven($randomNumber)) ? 'yes' : 'no';

        $roundData[] = [
            'question' => $randomNumber,
            'answer' => $expectedAnswer,
        ];
    }

    playGame(DESCRIPTION, $roundData);
}

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}
