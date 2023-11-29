<?php
    session_start();
    $dev_game = isset($_SESSION['dev_game']) ? $_SESSION['dev_game'] : array();

    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $title = $_POST['title'];
        $details = $_POST['details'];
        $image = $_POST['image'];
        $link = $_POST['link'];
        $developer = $_POST['developer'];
        $dev_contact = $_POST['dev_contact'];
        $dev_donation = $_POST['dev_donation'];

        
        echo '<p><strong>title:</strong> ' . $title . '</p>';
        echo '<p><strong>details:</strong> ' . $details . '</p>';
        echo '<p><strong>image:</strong> ' . $image . '</p>';
        echo '<p><strong>link:</strong> ' . $link . '</p>';
        echo '<p><strong>developer:</strong> ' . $developer . '</p>';
        echo '<p><strong>dev_contact:</strong> ' . $dev_contact . '</p>';
        echo '<p><strong>dev_donation:</strong> ' . $dev_donation . '</p>';

        echo '<table class="table">';
        echo '<thead>';
        echo '<tr><th>Game Title</th><th>Details</th><th>Image</th><th>Link</th><th>Developer</th><th>Dev_contact</th><th>Dev_donation</th></tr>';
        echo '</thead>';

        echo '</table>';
        $con = mysqli_connect('localhost','root', '', 'project');
        $sql = "INSERT INTO `dev_game_store` (`Title`, `Details`, `Image`, `Link`, `Developer`, `Dev_contact`, `Dev_donation`) VALUES ('$title', '$details', '$image', '$link', '$developer', '$dev_contact', '$dev_donation')";
        $stmt = mysqli_query($con, $sql);
        
        header('Location: dev_game_mssg.php');
        exit();
    }
?>