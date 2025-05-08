<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    
    <link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
    <form action="phpsqli.php" method="post">
        <label for="mane">name</label>
        <input type="text" id="name" name="name" require><br>
        <label for="age">age</label>
        <input type="text" id="age" name="age" required><br>
        <label for="password">password</label>
        <input type="text" id="password" name="password" required><br>
        <label for="dept">dept</label>
        <input type="text" id="dept" name="dept" required><br>
        <input class="button" type="submit" value="Submit">
        <label>signin</label>
    </form>
    <img class="ima" src="https://th.bing.com/th/id/OIP.tlo-F1QIV-C_lSBTSKVlowAAAA?w=284&h=189&c=7&r=0&o=5&pid=1.7" alt="manager">
    
</body>
</html>
<?php 
require "phpsqli.php";
$sql ="create database tadb";
if(mysqli_query($conn, $sql)) {
    echo "database is created successesfully";
}
else {
    echo "Error creating database: ". mysqli_error($conn);
}
mysqli_close($conn);




?>