<?php
// Check if a session has already been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$orders = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $track_id = $_POST['id'];

    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'project');
    $sql = "SELECT * FROM orders WHERE track_id='$track_id'";
    $orders = $con->query($sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Track your order</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
</head>

<?php include 'Navbar.php' ?>

<body>
    <div class="container">
        <h2>Track your order</h2>
        <form method="post" action="tracking.php">
            <div class="form-group">
                <label for="id">Track ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>

        <?php
        if ($orders) {
            foreach ($orders as $order) :
        ?>
                <h3>Track ID: <?= $order['track_id'] ?></h3>
                <h3>Status: <?= $order['status'] ?></a></h3>
                <h3>Name: <?= $order['name'] ?></h3>
                <h3>Address: <?= $order['address'] ?></h3>
                <h3>Total amount: BDT <?= $order['order_total'] ?></h3>
                <?php
                $del_man_id = $order['del_man_id'];
                $sql = "SELECT * FROM del_man WHERE del_man_id=$del_man_id";
                $res = $con->query($sql);
                $del_man =  mysqli_fetch_assoc($res);
                ?>
                <h3>Delivery man: <?= $del_man['name'] ?> (<?= $del_man['number'] ?>)</h3>
        <?php
            endforeach;
        }
        ?>
    </div>
</body>

</html>