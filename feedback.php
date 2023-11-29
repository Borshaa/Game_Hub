<!DOCTYPE html>
<?php include 'Navbar.php' ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Feedbac</title>
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
    <h1> Share Your Feedback </h1>

<h2>
Your any kind of feedback is very valuable to us. Please let us know if you have any complains, suggestions or any feedback. We are trying to be better every day. If you want to be anonymous, then you do not need to fill up the name and contact. Thank you for staying with us.
<br> </br>
</h2>
</div>
</body>
</html>


<div class="container">
        <form method="post" action="feedback_store.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" id="contact" name="contact" >
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="7" required></textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
