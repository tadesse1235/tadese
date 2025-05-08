<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $_POST['book_id'];
    $user = $_POST['user_id'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO issued_books (book_id, user_id, issue_date) VALUES ('$book', '$user', '$date')";
    $conn->query($sql);
    echo "Book Issued!";
}
?>
<ul>
<li><a href="index.php">index.php</a></li>
    <li><a href="add_book.php"><add_Book class="php"></add_Book></a></li>
    <li><a href="view_books.php">view_book.php</a></li>
    <li><a href="issue_book.php">issue_book.php</a></li>
    <li><a href="return_book.php">retu_bo.php</a></li>
    <li><a href="view_users.php">view_user.php</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>

<form method="POST">
    <h2>Issue Book</h2>
    Book ID: <input type="number" name="book_id" required><br>
    User ID: <input type="number" name="user_id" required><br>
    <button type="submit">Issue</button>
</form>
