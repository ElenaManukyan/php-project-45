<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

$name = '';

function greeting()
{
    global $name;
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function tryAgain()
{
    global $name;
    line("Let's try again, %s!", $name);
}

function congrats() {
    global $name;
    line("Congratulations, %s!", $name);
}
