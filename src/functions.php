<?php declare(strict_types=1);

function sum(int $a, int $b): int {
  return $a + $b;
}

echo sum(10, 5) . "\n";


$doble = fn($number) => $number * 2;

echo $doble(5) . "\n";

