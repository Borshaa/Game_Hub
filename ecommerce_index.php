<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'project');
    $sql = "SELECT * FROM product WHERE featured=0";
    $featured = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy Gaming Accessories</title>
    <link rel="stylesheet" href="style.css" />
    <script src="http://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>
<?php include 'Navbar.php' ?> 

<div class="items">
    <div class="container">
        <h1>All Products</h1>
        <br>
        <?php while($product = mysqli_fetch_assoc($featured)): ?>
        <div class="cards">
            <p class="title"><font size="+1"><b><?= $product['Title']; ?></b></font></p>
            <img src="<?= $product['Image']; ?>" alt="<?= $product['Title']; ?>"/>
            <div class = "cards-text">
                <p class="price"><b>Price: BDT <?= $product['Price']; ?></b></p>
                <p class="desc"><b>Product Details:</b><br><?= $product['Description']; ?></p>
            </div>
            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?= $product['ID']; ?>">
                <input type="hidden" name="title" value="<?= $product['Title']; ?>"> 
                <input type="hidden" name="price" value="<?= $product['Price']; ?>">
                <input type="number" name="quantity" value="1">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>