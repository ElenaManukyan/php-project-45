<?php

namespace BrainGames\BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\tryAgain;
use function BrainGames\Engine\congrats;
use function BrainGames\Cli\welcome;

function brainGames(): void
{
    welcome();
    $name = prompt('May I have your name?');
    greeting($name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
}
