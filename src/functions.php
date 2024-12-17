<?php declare(strict_types=1);

function sum(int $a, int $b): int {
  return $a + $b;
}

echo sum(10, 5) . "\n";


$doble = fn($number) => $number * 2;

echo $doble(5) . "\n";


$discount = 50;

$anonymous = function(int|float $amount) use ($discount): int|float {
  return $amount - $discount;
};

echo $anonymous(120) . "\n";