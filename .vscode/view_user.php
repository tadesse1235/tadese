<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");

echo "<h2>Users</h2>";
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . " | Email: " . $row['email'] . "<br>";
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view user</title>
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