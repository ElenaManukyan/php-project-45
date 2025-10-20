<?php

namespace BrainGames\CalcGame;

use function BrainGames\Engine\playGame;

function startCalc(): void
{
    // test
    $description = 'What is the result of the expression?';

    $numGames = 3;
    $roundData = [];
    for ($i = 0; $i < $numGames; $i++) {
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

    playGame($description, $roundData);
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
            throw new InvalidArgumentException("Unsupported operand: '$operand'");
    }
}
