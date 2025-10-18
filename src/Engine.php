<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function playGame(string $descr, string $question, string|int $rightAnswer, int $iteration): bool
{

    $name = '';
    if ($iteration === 0) {
        line('Welcome to the Brain Games!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);

        line($descr);
    }
    line('Question: %s', $question);
    $answer = prompt('Your answer');
    if (intval($answer) === $rightAnswer || $answer === $rightAnswer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line("Let's try again, %s!", $name);
        return false;
    }
    if ($iteration === 2) {
        line("Congratulations, %s!", $name);
    }
    return true;
}
