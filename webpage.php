<!DOCTYPE html>
<!-- <?php include 'Navbar.php' ?>  -->
<html lang="en">
<head>
    <title>Game-Tube</title>
    <style>
        .content-container {
            color: white;
            margin: 0 auto;
            width: 80%;
        }


         .video {
            margin: 10px;
            width: 300px;
            border: 1px solid white;
            position: relative;
        }

        .video-title {
            position: absolute;
            top: 0;
            left: 0;
            width: 96%;
            background-color: rgba(0,0,0,.5);
            color: white;
            padding: 5px;
            text-align: center;
        }

        .uploader-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .uploader-profile-picture {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 5px;
        }


        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            filter: brightness(110%); /* Adjust the brightness percentage */
        }

    </style>
</head>
<body>
    <section class="content-container">
        <h1>Welcome to Game-Tube!</h1>
        <p>Upload your gameplay videos to share with others!</p>
        <form method="post" action="DB.php">
        <label for="title">Title: </Title></label>
        <input type="text" class="form-control" id="title" name="title" required>
        <form action="/upload" method="post" enctype="multipart/form-data">
            <input type="file" name="video" accept="video/*">
            <button type="submit">Upload</button>
        </form>
    </section>
</body>
</html>


<?php
    $con = mysqli_connect('localhost','root', '', 'video_storage');
    $sql = "SELECT title, files FROM videos
    ORDER BY uploaded_on DESC";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

    .video-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

</style>
    <section class="content-container">
    <h2>Explore Videos</h2>
    <div class="video-container">
        <!-- These divs will be dynamically populated with videos from the database -->
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="video">
                <video src="<?php echo $row['files']; ?>" controls type="video/mp4"></video>
                <div class="video-title"><?php echo htmlspecialchars($row['title']); ?></div>
                <div class="uploader-info">
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    </section>
</body>
</html>