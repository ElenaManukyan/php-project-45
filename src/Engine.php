<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting(string $name): void
{
    line("Hello, %s!", $name);
}

function tryAgain(string $name): void
{
    line("Let's try again, %s!", $name);
}


function congrats(string $name): void
{
    line("Congratulations, %s!", $name);
}
