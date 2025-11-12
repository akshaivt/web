<?php
// Database connection
$servername = "localhost";
$username = "root";    // change if needed
$password = "NewPass123!";        // change if your MySQL has a password
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_no = $_POST['book_no'];
    $title = $_POST['title'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = "INSERT INTO bookdetails (book_no, title, edition, publisher)
            VALUES ('$book_no', '$title', '$edition', '$publisher')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Book added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
    <style>
        body { font-family: Arial; margin: 40px; background-color: #f8f9fa; }
        form { background: #fff; padding: 20px; border-radius: 8px; width: 350px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input[type=text], input[type=number] { width: 100%; padding: 8px; margin: 6px 0; }
        input[type=submit] { background-color: #007BFF; color: white; border: none; padding: 10px; width: 100%; cursor: pointer; }
        table { border-collapse: collapse; margin-top: 30px; width: 80%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #007BFF; color: white; }
    </style>
</head>
<body>

<h2>Enter Book Information</h2>

<form method="POST" action="">
    <label>Book No:</label>
    <input type="number" name="book_no" required>

    <label>Title:</label>
    <input type="text" name="title" required>

    <label>Edition:</label>
    <input type="text" name="edition" required>

    <label>Publisher:</label>
    <input type="text" name="publisher" required>

    <input type="submit" value="Add Book">
</form>

<?php
// Display all records
$result = $conn->query("SELECT * FROM bookdetails");

if ($result->num_rows > 0) {
    echo "<h2>Book Details</h2>";
    echo "<table>";
    echo "<tr><th>Book No</th><th>Title</th><th>Edition</th><th>Publisher</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['book_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No books found.</p>";
}

$conn->close();
?>

</body>
</html>

