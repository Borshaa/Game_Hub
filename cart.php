
<?php
    // Check if a session has already been started
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $product_id = $_POST['product_id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // Add the product to the cart
        $item = array(
            'product_id' => $product_id,
            'title' => $title,
            'price' => $price,
            'quantity' => $quantity
        );

        $cart[$product_id] = $item;
        $_SESSION['cart'] = $cart;

        // Debug statements
        var_dump($item); // Check if the item is correctly created
        var_dump($cart); // Check if the item is correctly added to the cart
        
        // Redirect to the cart page
        header('Location: cart.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'Navbar.php' ?> 
    <div class="container">
        <h2> Shopping Cart</h2>
        <?php if(count($cart) == 0): ?>
            <p>Your cart is empty right now.</p>
            <a href="ecommerce_index.php" class="btn btn-primary">Explore Shopping</a>
            <a href="index.php" class="btn btn-primary">Go to Homepage</a>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cart as $item): ?>
                        <tr>
                            <td><?= $item['title'] ?></td>
                            <td>BDT <?= $item['price'] ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td>BDT <?= $item['price'] * $item['quantity'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <a href="ecommerce_index.php" class="btn btn-primary">Continue Shopping</a>
                    <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                </div>
                <div class="col-md-6">
                    <h4>Total: BDT <?= array_reduce($cart, function($acc, $item) { return $acc + $item['price'] * $item['quantity']; }, 0) ?></h4>
                    <a href="checkout.php" class="btn btn-success">Checkout</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html> 






