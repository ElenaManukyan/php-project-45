<?php

namespace BrainGames\CalcGame;

use Exception;

use function BrainGames\Engine\playGame;

const NUM_GAMES = 3;
const DESCRIPTION = 'What is the result of the expression?';

function startCalc(): void
{
    $roundData = [];
    for ($i = 0; $i < NUM_GAMES; $i++) {
        $randomNumberFirst = random_int(1, 100);
        $randomNumberSecond = random_int(1, 100);
        $operands = ['+', '-', '*'];
        $selectOperand = $operands[random_int(0, count($operands) - 1)];
        $question = "{$randomNumberFirst} {$selectOperand} {$randomNumberSecond}";

        $expectedAnswer = calculate($randomNumberFirst, $randomNumberSecond, $selectOperand);

        $roundData[] = [
            'question' => $question,
            'answer' => (string) $expectedAnswer,
        ];
    }

    playGame(DESCRIPTION, $roundData);
}

function calculate(int $num1, int $num2, string $operand): int
{
    switch ($operand) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new Exception("Unsupported operand: '$operand'");
    }
}
