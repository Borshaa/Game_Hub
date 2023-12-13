<?php
session_start();
$webpage = isset($_SESSION['webpage']) ? $_SESSION['webpage'] : array();

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video_storage";


// Add video data to the table
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    // $user_id = $_POST['user_id'];
    // $user_name = $_POST['user_name'];
    $files = $_POST['video'];


    $con = mysqli_connect('localhost','root', '', 'video_storage');
    $sql = "INSERT INTO `videos` (`title`, `files`) VALUES ('$title', '$files')";
    $stmt = mysqli_query($con, $sql);

    header('Location: webpage.php');
    exit();
}


?>

