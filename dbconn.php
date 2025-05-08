<?php
$host = 'localhost';
$dbname = 'libm';
$username = 'root'; // use your username
$password = ''; // use your password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>

</head>
<body>
    it is database conectivity werb_page
    </div>

    <h2>Checkout</h2>
    <form method="post" action="ecomm.php">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Address:</label>
        <input type="text" name="address" required><br>
        <label>age</label>
        <input type="text" name="age" required><br> 
        <label>password</label>
        <input type="text" name="password" required><br>
        <label for="id">id</label>
        <input type="number" name="id" required><br>
        <label for="phone">phone</label>
        <input type="number" name="phone" required><br>
        <label for="dept">dept</label>
        <input type="text" name="dept" required><br>
        <label>Payment Method:</label>
        <select name="payment_method">
            <option value="credit_card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cash_on_delivery">Cash on Delivery</option>
        </select><br>
        <input type="submit" name="checkout" value="Place Order">
    </form>
    
</body>
</html>