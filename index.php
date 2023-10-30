<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'Navbar.php' ?> 
<div class="header">
	<h2>Home Page</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
        <br>
		</br>
    <div class = "container">    
		Welcome to "Gamers' Hub", where gaming is not just a hobby, it's a way of life! We are thrilled to have you here and excited to introduce you to a world of endless possibilities in the gaming universe. Our mission is to provide all the gamers with all kind of gaming products. You can watch gameplay of different games and also download different newly developed games. If you are a new game developer, don't worry about marketing your game. You can reach out to us and the rest is on ours! So come on in, explore our platform, and let us help you unleash your true gaming potential!
    </div> 
    </body>
</html>