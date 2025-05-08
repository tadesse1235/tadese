<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $sql = "SELECT * FROM admi WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $user;
        header("Location: board.php");
    } else {
        echo "Invalid login!";
    }
}
?>
<ul>
<li><a href="index.php">index.php</a></li>
    <li><a href="add_book.php"> add_book"php"</a></li>
    <li><a href="view_books.php">view_book.php</a></li>
    <li><a href="issue_book.php">issue_book.php</a></li>
    <li><a href="return_book.php">retu_bo.php</a></li>
    <li><a href="view_users.php">view_user.php</a></li>
    <li><a href="logout.php">logout</a></li>

<form method="POST">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>