<?php
// Check if a session has already been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'project');
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $con->query($sql);
$user = mysqli_fetch_assoc($result);
if ($user) {
    $user_id = $user['id'];
    $sql = "SELECT * FROM orders WHERE user_id=$user_id";
    $orders = $con->query($sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
</head>

<?php include 'Navbar.php' ?>

<body>
    <div class="container">
        <h2>Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Track ID</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?= $order['order_id'] ?></td>
                        <td><a href="http://localhost/Gamers_Hub/tracking.php"><?= $order['track_id'] ?></a></td>
                        <td><?= $order['status'] ?></td>
                        <td><?= $order['name'] ?></td>
                        <td><?= $order['address'] ?></td>
                        <td>BDT <?= $order['order_total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>