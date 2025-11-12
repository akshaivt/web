<?php
if(isset($_POST['submit'])){
    $num = $_POST['number'];
    $fact = 1;

    for($i = 1; $i <= $num; $i++){
        $fact = $fact * $i;
    }

    echo "Factorial of $num is: $fact";
}
?>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" name="submit" value="Find Factorial">
</form>
