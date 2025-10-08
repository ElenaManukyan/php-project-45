<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting($name)
{
    line('Welcome to the Brain Games!');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function tryAgain($name) {
    line("Let's try again, %s!", $name);
}


function congrats($name) {
    line("Congratulations, %s!", $name);
}
