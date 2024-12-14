<?php
$maybe = (20 >= 18) ? "yes" : "no";

echo $maybe . "\n";


$nullable = null;

$value = $nullable ?? "another value";

echo $value . "\n";
?>