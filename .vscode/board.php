<?php
include 'db.php';
session_start();
if (!isset($_SESSION['admi'])) {
    header("Location: index.php");
    exit();
}
?>

<h2>Welcome to Library Dashboard</h2>
<ul>
<li><a href="index.php">index.php</a></li>
    <li><a href="add_book.php">add_book"php"></a></li>
    <li><a href="view_books.php">view_book.php</a></li>
    <li><a href="issue_book.php">issue_book.php</a></li>
    <li><a href="return_book.php">retu_bo.php</a></li>
    <li><a href="view_users.php">view_user.php</a></li>
    <li><a href="logout.php">logout</a></li>
</ul>