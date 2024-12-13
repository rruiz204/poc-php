<?php
$first = 10;

$second = &$first;

$second += 10;

echo $first; // 20
?>