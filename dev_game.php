<?php
$dev_game = isset($_SESSION['dev_game']) ? $_SESSION['dev_game'] : array();
?>

<!DOCTYPE html>
<?php include 'Navbar.php' ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Submit Your Games</title>
<style>

h1{
    text-align: center;
    font-size: 2em !important;
}
h2{
    text-align: justify ;
    font-size: 1.5em !important;
}
h3{
    text-align: center ;
    font-size: 1.5em !important;
}
</style>

</head>
<body>

<div class="container">
    <h1 > Test the beta version of your game for free
    </h1>

<h2>
Gamer's Hub, a dynamic gaming community platform, has implemented a streamlined process for aspiring game developers to submit their beta versions for review. The platform hosts a dedicated form that allows new developers to upload their beta games for evaluation by administrators. This innovative approach fosters an inclusive environment, providing emerging talent with an opportunity to showcase their work and receive valuable feedback. The admin team at Gamer's Hub carefully assesses each submission, ensuring that only quality content aligning with the platform's standards is featured. Through this collaborative initiative, Gamer's Hub aims to nurture and support the growth of new developers, enriching the gaming community with diverse and engaging content.
</h2>
</div>
</body>
</html>


<div class="container">
        <h1>Submit Your Game Here</h1>
        <form method="post" action="dev_game_store.php">
            <div class="form-group">
                <label for="title">Game Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="details">Game Description:</label>
                <textarea class="form-control" id="details" name="details"  required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Link of the Game Poster:</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="link">Game Download Link:</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            <div class="form-group">
                <label for="developer">Developer/s:</label>
                <textarea class="form-control" id="developer" name="developer" required></textarea>
            </div>
            <div class="form-group">
                <label for="dev_contact">Developers Email Address</label>
                <input type="text" class="form-control" id="dev_contact" name="dev_contact" >
            </div>
            <div class="form-group">
                <label for="dev_donation">Info for donation:</label>
                <input type="text" class="form-control" id="dev_donation" name="dev_donation" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>



    <h3> <b> If you want to submit your game in a google form - </b> <a href="https://forms.gle/5iJqjdJx5XA5Wh4u9" class="btn btn-primary">Click here</a> </h3>
