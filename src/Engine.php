<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting($name)
{
    line("Hello, %s!", $name);
}

function tryAgain($name)
{
    line("Let's try again, %s!", $name);
}


function congrats($name)
{
    line("Congratulations, %s!", $name);
}
