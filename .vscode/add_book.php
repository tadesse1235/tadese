<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $qty = $_POST['quantity'];
    $sql = "INSERT INTO books (title, author, quantity) VALUES ('$title', '$author', '$qty')";
    $conn->query($sql);
    echo "Book added!";
}
?>
<ul>
<li><a href="index.php">index.php</a></li>
<li><a href="view_users.php">view_user.php</a></li>
    <li><a href="add_book.php">add_book"php"</a></li>
    <li><a href="view_books.php">view_book.php</a></li>
    <li><a href="issue_book.php">issue_book.php</a></li>
    <li><a href="return_book.php">retu_bo.php</a></li>
    <li><a href="logout.php">logout</a></li>

<form method="POST">
    <h2>Add Book</h2>
    <input type="text" name="title" placeholder="Title" required><br>
    <input type="text" name="author" placeholder="Author" required><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>
    <button type="submit">Add</button>
</form>
