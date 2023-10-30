
<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'project');
    $sql = "SELECT * FROM product WHERE featured=1";
    $featured = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy Gaming Accessories</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>
<?php include 'Navbar.php' ?> 

<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="column">
        <h2>All Products</h2>
        <br>
        <?php while($product = mysqli_fetch_assoc($featured)): ?>
        <div class="col-md-5">
            <p class="title"><b><?= $product['Title']; ?></b></p>
            <img src="<?= $product['Image']; ?>" alt="<?= $product['Title']; ?>"/>
            <p class="price"><b>Price: BDT <?= $product['Price']; ?></b></p>
            <p class="desc"><b>Product Details:</b><br><?= $product['Description']; ?></p>
            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?= $product['ID']; ?>">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>