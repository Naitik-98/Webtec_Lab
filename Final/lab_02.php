<?php


$temperature = 9; 
$day = 6;         
echo "<h2>Lab Task 2: Conditional Statements</h2>";



if (!is_numeric($temperature)) {
    echo "Invalid temperature value!<br>";
    exit;
}

if (!is_numeric($day) || $day < 1 || $day > 7) {
    echo "Invalid day value! Day must be between 1 and 7.<br>";
    exit;
}



echo "<h3>Temperature Check</h3>";

if ($temperature < 10) {
    echo "It's cold.<br>";
} elseif ($temperature >= 10 && $temperature <= 25) {
    echo "It's warm.<br>";
} else {
    echo "It's hot.<br>";
}


echo "<h3>Day of the Week</h3>";

switch ($day) {
    case 1: echo "Monday<br>"; break;
    case 2: echo "Tuesday<br>"; break;
    case 3: echo "Wednesday<br>"; break;
    case 4: echo "Thursday<br>"; break;
    case 5: echo "Friday<br>"; break;
    case 6: echo "Saturday<br>"; break;
    case 7: echo "Sunday<br>"; break;
    default: echo "Invalid day.<br>";
}

?>