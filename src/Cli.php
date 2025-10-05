<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

$name;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function tryAgain()
{
    line("Let's try again, %s!", $name);
}

function congrats() {
    line("Congratulations, %s!", $name);
}
