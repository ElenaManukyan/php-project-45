<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function playGame(string $descr, array $questions): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($descr);

    foreach ($questions as $key => $value) {
        line('Question: %s', $value['question']);
        $answer = prompt('Your answer');

        if ($answer !== $value['answer']) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $value['answer']);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
