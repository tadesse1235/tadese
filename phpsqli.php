<?php
function checkDataType($value) {
    if (is_int($value)) {
        echo "The data type is Integer.";
    } elseif (is_string($value)) {
        echo "The data type is String.";
    } else {
        echo "The data type is neither Integer nor String.";
    }
}
$Value1 = 25;
$Value2 = "Hello";
echo "Value: $Value1 - ";
checkDataType($Value1);

echo "<br>";

echo "Value: $Value2 - ";
checkDataType($Value2);



$number = 10;

if ($number > 10) {
    echo "The number is greater than 10.";
} elseif ($number == 10) {
    echo "The number is exactly 10.";
} else {
    echo "The number is less than 10.";
}

echo "<br>";

$counter = 1;
while ($counter <= 5) {
    echo "Counter value: $counter <br>";
    $counter++;
}

echo "<br>";
$counter = 10;
do {
    echo "Executing do-while loop, counter: $counter <br>";
    $counter--;
} while ($counter >= 1);

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Iteration number: $i <br>";
}

echo "<br>";
$day = "Teusday";
switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Teusday":
        echo "the second day";
        break;
    case "Friday":
        echo "Almost the weekend!";
        break;
    default:
        echo "Just another day.";
        break;
}


?>