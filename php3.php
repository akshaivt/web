<?php
// Function to calculate sum and average of array elements
function calculateSumAndAverage($arr) {
    // Check if the array is not empty
    if (empty($arr)) {
        return "Array is empty.";
    }

    // Calculate sum using array_sum()
    $sum = array_sum($arr);

    // Calculate average
    $average = $sum / count($arr);

    // Return both values as an associative array
    return [
        "sum" => $sum,
        "average" => $average
    ];
}

// Example usage:
$numbers = [10, 20, 30, 40, 50];

$result = calculateSumAndAverage($numbers);

echo "Sum: " . $result["sum"] . "<br>";
echo "Average: " . $result["average"];
?>


