<?php

<<<<<<< HEAD
$number = 12345;
=======
$number = 12345; 
>>>>>>> d28df99 (done)

$reverse = 0;
$temp = $number;

// Reverse logic
while ($temp > 0) {
<<<<<<< HEAD
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
=======
    $digit = $temp % 10;        
    $reverse = ($reverse * 10) + $digit;  
    $temp = (int)($temp / 10);   
>>>>>>> d28df99 (done)
}


echo "Original number: " . $number . "<br>";
echo "Reversed number: " . $reverse;
?>
<<<<<<< HEAD
=======

>>>>>>> d28df99 (done)
