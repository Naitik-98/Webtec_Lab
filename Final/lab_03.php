<?php

echo "<h2>Lab Task 3: Loops & Iteration</h2>";


echo "<h3>For Loop (1 to 20)</h3>";

for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

echo "<br><br>";


echo "<h3>While Loop (Even numbers 1 to 20)</h3>";

$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}

echo "<br><br>";



echo "<h3>Foreach Loop (Fruits & Colors)</h3>";

$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange",
    "mango" => "golden"
];

$count = 0;

foreach ($fruits as $fruit => $color) {
    echo ucfirst($fruit) . " is " . $color . "<br>";

    $count++;
    if ($count == 5) {
        break; 
    }
}

?>