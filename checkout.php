<?php 
    session_start();
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    if(count($cart) == 0) {
        header("Location: ecommerce_index.php");
        exit();
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="js/bootstrap.min,js"></script>
</head>
<body>
<?php include 'Navbar.php' ?> 
    
    <div class="container">
        <h2>Checkout</h2>
        <form method="post" action="place_order.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="delivery">Payment Method:</label>
                <select class="form-control" id="Payment" name="Payment" required>
                    <option value="">Select Payment Method</option>
                    <option value="BKash">BKash</option>
                    <option value="Nagad">Nagad</option>
                    <option value="Bank">Bank</option>
                    <option value="Cash On Delivery">Cash On Delivery</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>

        </form>
        
    </div>
</body>
</html>
