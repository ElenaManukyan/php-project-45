<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function playGame(string $descr, array $questions): void
{
    $name = '';

    foreach ($questions as $key => $value) {
        if ($key === 0) {
            line('Welcome to the Brain Games!');
            $name = prompt('May I have your name?');
            line("Hello, %s!", $name);

            line($descr);
        }
        line('Question: %s', $value['question']);
        $answer = prompt('Your answer');
        if ($answer === $value['answer']) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $value['answer']);
            line("Let's try again, %s!", $name);
            return;
        }
        if ($key === 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
