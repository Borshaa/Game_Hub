<?php
    session_start();
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $payment_method = $_POST['payment-method'];

        // Save the order data in a file or database
        $order_data = array(
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'payment_method' => $payment_method,
            'cart' => $cart
        );
        // You can save the order data to a file, database or send it to an email address
        // In this example, we will just print the data on the screen
        echo '<h2>Your Order Details:</h2>';
        echo '<p><strong>Name:</strong> ' . $name . '</p>';
        echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
        echo '<p><strong>Address:</strong> ' . $address . '</p>';
        echo '<p><strong>Payment Method:</strong> ' . $payment_method . '</p>';
        echo '<h3>Order Items:</h3>';
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        $total_price = 0;
        foreach($cart as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total_price += $subtotal;
            echo '<tr><td>' . $item['title'] . '</td><td>BDT ' . $item['price'] . '</td><td>' . $item['quantity'] . '</td><td>BDT ' . $subtotal . '</td></tr>';
        }
        echo '<tr><td colspan="3" class="text-right"><strong>Total:</strong></td><td>BDT ' . $total_price . '</td></tr>';
        echo '</tbody>';
        echo '</table>';

        // Clear the cart
        $_SESSION['cart'] = array();
        header('Location: cart.php');
        exit();
    }
