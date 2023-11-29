<?php
    session_start();
    $feedback = isset($_SESSION['feedback']) ? $_SESSION['feedback'] : array();

    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $feedback = $_POST['feedback'];

        
        echo '<p><strong>name:</strong> ' . $name . '</p>';
        echo '<p><strong>contact:</strong> ' . $contact . '</p>';
        echo '<p><strong>feedback:</strong> ' . $feedback . '</p>';

        echo '<table class="table">';
        echo '<thead>';
        echo '<tr><th>Name</th><th>Contact</th><th>Feedback</th></tr>';
        echo '</thead>';
        
        echo '</table>';
        $con = mysqli_connect('localhost','root', '', 'project');
        $sql = "INSERT INTO `feedback` (`Name`, `Contact`, `Feedback`) VALUES ('$name', '$contact', '$feedback')";
        $stmt = mysqli_query($con, $sql);
        
        
        header('Location: feedback_mssg.php');
        exit();
    }
?>