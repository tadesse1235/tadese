<?php
session_start();
include 'dbconn.php';

if ($_SESSION['role'] !== 'Admin') {
    die('Access denied.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_date = $_POST['published_date'];

    $sql = "INSERT INTO Books (title, author, genre, published_date) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $author, $genre, $published_date]);

    echo "Book added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management - Manage Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Book</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Title" required><br>
        <input type="text" name="author" placeholder="Author" required><br>
        <input type="text" name="genre" placeholder="Genre" required><br>
        <input type="date" name="published_date" required><br>
        <button type="submit">Add Book</button>
    </form>

    <h2>Books List</h2>
    <?php
    $sql = "SELECT * FROM Books";
    $stmt = $pdo->query($sql);
    $books = $stmt->fetchAll();
    foreach ($books as $book) {
        echo "<p>{$book['title']} by {$book['author']} (Genre: {$book['genre']})</p>";
    }
    ?>
</body>
</html>