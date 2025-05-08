<?php
include 'db.php';
$result = $conn->query("SELECT * FROM books");

echo "<h2>Books List</h2>";
while ($row = $result->fetch_assoc()) {
    echo "Title: " . $row['title'] . " | Author: " . $row['author'] . " | Quantity: " . $row['quantity'] . "<br>";
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view mcrypt_module_is_block_algorithm_mode</title>
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
    
</body>
</html>
