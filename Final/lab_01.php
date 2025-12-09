<?php

$stringVar = "AIUB";
$intVar = 20;
$floatVar = 20.5;
$boolVar = true;

$num1 = 20;
$num2 = 10;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

echo "Addition: $addition" . "<br>";
echo "Subtraction: $subtraction" . "<br>";
echo "Multiplication: $multiplication" . "<br>";
print "Division: $division" . "<br><br>";


echo "Sum (echo): " . ($num1 + $num2) . "<br>";
print "Sum (print): " . ($num1 + $num2) . "<br><br>";


var_dump($stringVar); echo "<br>";
var_dump($intVar); echo "<br>";
var_dump($floatVar); echo "<br>";
var_dump($boolVar); echo "<br>";
?>