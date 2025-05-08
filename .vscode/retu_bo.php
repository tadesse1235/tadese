<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['issue_id'];
    $date = date('Y-m-d');
    $sql = "UPDATE issued_books SET return_date='$date', returned=1 WHERE id='$id'";
    $conn->query($sql);
    echo "Book Returned!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return_book</title>
</head>
<body>
<ul>
<li><a href="view_users.php">index.php</a></li>
    <li><a href="add_book.php">add_Book</a></li>
    <li><a href="view_books.php">view_book.php</a></li>
    <li><a href="issue_book.php">issue_book.php</a></li>
    <li><a href="return_book.php">retu_bo.php</a></li>
    <li><a href="view_users.php">view_user.php</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>

<form method="POST">
    <h2>Return Book</h2>
    Issue ID: <input type="number" name="issue_id" required><br>
    <button type="submit">Return</button>
</form>
</body>
</html>
