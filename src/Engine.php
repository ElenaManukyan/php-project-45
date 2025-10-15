<?php

namespace BrainGames\Engine;

use function cli\line;

function runDialogue(string $step = '', string $name = '', string|int $userAns = '', string|int $corrAnswer = ''): void
{
    if ($step === 'tryAgain') {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAns, $corrAnswer);
        line("Let's try again, %s!", $name);
    }
    if ($step === 'congrats') {
        line("Congratulations, %s!", $name);
    }
    if ($step === 'correct') {
        line('Correct!');
    }
}
