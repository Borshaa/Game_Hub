<?php require("emailScript.php"); ?>
<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $track_id = uniqid();
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment'];

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
    foreach ($cart as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total_price += $subtotal;
        echo '<tr><td>' . $item['title'] . '</td><td>BDT ' . $item['price'] . '</td><td>' . $item['quantity'] . '</td><td>BDT ' . $subtotal . '</td></tr>';
    }
    echo '<tr><td colspan="3" class="text-right"><strong>Total:</strong></td><td>BDT ' . $total_price . '</td></tr>';
    echo '</tbody>';
    echo '</table>';
    $con = mysqli_connect('localhost', 'root', '', 'project');
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $con->query($sql);
    $user = mysqli_fetch_assoc($result);
    $user_id = $user['id'];

    $sql = "SELECT MIN(del_man_id) as low, MAX(del_man_id) as high FROM del_man";
    $result = $con->query($sql);
    $del_man = mysqli_fetch_assoc($result);
    $del_man_id = rand($del_man['low'], $del_man['high']);

    $sql = "INSERT INTO `orders` (`track_id`, `user_id`, `name`, `address`, `status`, `order_total`, `number`, `del_man_id`) VALUES ('$track_id', $user_id, '$name', '$address', 'Pending', $total_price, $phone, $del_man_id)";
    $stmt = mysqli_query($con, $sql);

    $to = $user['email'];
    $subject = 'New order placed | Gamers_Hub';
    $content = '<html><body><h4>Hello ' . $username . '!</h4>';
    $content .= '<h4>Thank you for placing a new order.</h4>';
    $content .= '<h4>Track ID: ' . $track_id . '</h4>';
    $content .= '<h4>Track here: http://localhost/Gamers_Hub/tracking.php</h4>';
    $content .= '<h4>Team Gamers_Hub</h4>';
    $content .= '</body></html>';
    $response = sendMail($to, $subject, $content);

    // Clear the cart
    $_SESSION['cart'] = array();
    $message = 'Your Order Has Been Successfully Placed and a Email Has Been Sent.';
    header('Location: cart.php?message=' . $message);
    exit();
}
