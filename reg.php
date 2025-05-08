<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<link rel="stylesheet" href="r.css">
</head>
<body>
<div class="container">
<h2>User Registration Form</h2>
<form action="reg.php" method="POST">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<label for="id">ID:</label>
<input type="text" id="id" name="id" required>

<label for="age">Age:</label>
<input type="number" id="age" name="age" required>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required>

<label for="department">Department:</label>
<input type="text" id="department" name="department" required>

<label for="phone">Phone:</label>
<input type="text" id="phone" name="phone" required>

<button type="submit" name="submit">Register</button>
</form>
</div>
</body>
</html>


<?php
$servername = "localhost";
$username = "root"; // Change with your database username
$password = ""; // Change with your database password
$dbname = "regis"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
// Get form input
$name = $_POST['name'];
$id = $_POST['id'];
$age = $_POST['age'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
$email = $_POST['email'];
$department = $_POST['department'];
$phone = $_POST['phone'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO users (name, id, age, password, email, department, phone) 
VALUES ('$name', '$id', '$age', '$password', '$email', '$department', '$phone')";

if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>