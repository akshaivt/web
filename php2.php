<?php

$number = 12345;

$reverse = 0;
$temp = $number;

// Reverse logic
while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
}


echo "Original number: " . $number . "<br>";
echo "Reversed number: " . $reverse;
?>
