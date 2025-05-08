<?php
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
        $upwd = md5($_POST['pwd']); // Encrypt the password using MD5
    
        // Query to check user credentials
        $query = "SELECT emailaddress, password FROM manag WHERE emailaddress='$uname' AND password='$upwd'";
        $select_query = mysqli_query($conn, $query);
    
        if (!$select_query) {
            // Print SQL error for debugging
            die("Query failed: " . mysqli_error($conn));
        }
    
        $user_data = mysqli_fetch_row($select_query);
    
        if (!empty($user_data)) {
            $_SESSION['user_name'] = $user_data[0];
            $_SESSION['id'] = $user_data[1];
            header("Location: dashbord.php");
            exit();
        } else {
            echo "<script>alert('You have entered wrong email ID or password');</script>";
        }
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Expense Management System - User Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Include your CSS files here -->
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
    </html>