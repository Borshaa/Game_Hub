<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'project');
    $sql = "SELECT * FROM game WHERE featured=1";
    $featured = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Free Games</title>
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
        <h1>All games</h1>
        <br>
        <?php while($game = mysqli_fetch_assoc($featured)): ?>
        <div class="cards">
            <p class="title"><font size="+1"><b><?= $game['Title']; ?></b></font></p>
            <img src="<?= $game['Image']; ?>" alt="<?= $game['Title']; ?>"/>
            <div class = "cards-text">
                
                <p class="desc"><b>Details:</b><br><?= $game['Details']; ?></p>
            </div>
            
            <div class = "cards-text">
                <p class="desc"><b>Know the Developer/s:</b><br> </br> <b> Name: </b> <?= $game['Developer/s']; ?></p>
                <p class="desc"><b> Contact: </b><?= $game['Dev_contact']; ?></p>
                <p class="desc"><b> Donation: </b><?= $game['Dev_donation']; ?></p>
            </div>
            
            <div class = "cards-text">
                <p class="desc"><b>Get the Game Here:</b><br></p>
                <a href="<?= $game['Link']; ?>" class="btn btn-primary">Download the game</a>
            </div>


            <br>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>