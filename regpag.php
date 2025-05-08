<?php
include 'dbconn.php';
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if(empty($id)){
    header("location:index.php");

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO use  (name, email, password) VALUES (?, ?, <?phpL
// Connect to the database
$server = "localhost";
$username = "root";
$password = "";
$databasename = "libr";

// Create connection
$conn = mysqli_connect($server, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

// Handle login
if (isset($_POST['login_btn'])) {
    $uname = $_POST['email'];
    $upwd = md5($_POST['pwd']); // Still using MD5 as in your original code

    // Prepare and execute the query safely
    $stmt = $conn->prepare("SELECT user_name, id FROM manag WHERE email_id=? AND password=? AND role=2 AND status=1");

    if ($stmt) {
        $stmt->bind_param("ss", $uname, $upwd);
        $stmt->execute();

        $result = $stmt->get_result();
        $user_data = $result->fetch_row();

        if (!empty($user_data)) {
            $_SESSION['user_name'] = $user_data[0];
            $_SESSION['id'] = $user_data[1];
            header("Location: dashbord.php");
            exit();
        } else {
            echo "<script>alert('You have entered wrong email ID or password');</script>";
        }

        $stmt->close();
    } else {
        die("Prepare failed: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Expense Management System - User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- You can include your CSS files here -->
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <h2><center style="color: coral;">User Login</center></h2>
        </div>
        <div class="card-body">
            <form name="login" method="post" action="">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputemail" class="form-control" name="email" placeholder="Email address" required autofocus>
                        <label for="inputemail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputpassword" class="form-control" name="pwd" placeholder="Password" required>
                        <label for="inputpassword">Password</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="login_btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $password]);

    echo "User registered successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Registration</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>