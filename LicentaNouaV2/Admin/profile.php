<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
  //header('location:login.php');
}

$count_content = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
$count_content->execute([$tutor_id]);
$total_contents = $count_content->rowCount();

$count_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
$count_playlist->execute([$tutor_id]);
$total_playlists = $count_content->rowCount();


$count_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
$count_likes->execute([$tutor_id]);
$total_likes = $count_content->rowCount();

$count_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
$count_comments->execute([$tutor_id]);
$total_comments = $count_content->rowCount();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
  <?php include '../components/admin_header.php' ?>

  <section class="profile">

    <h1 class="heading"></h1>

    <div class="details">
      <div class="tutor">
        <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
        <h3><?= $fetch_profile['name']; ?></h3>
        <a href="update.php" class="inline-btn">Update profile</a>
      </div>

      <div class="box-container">
        <div class="box">
          <h3><?= $total_contents ?></h3>
          <p>Total Contents</p>
          <a href="contents.php" class="btn">View Contents</a>
        </div>

        <div class="box">
          <h3><?= $total_playlists ?></h3>
          <p>Total Playlists</p>
          <a href="contents.php" class="btn">View Playlists</a>
        </div>

        <div class="box">
          <h3><?= $total_likes ?></h3>
          <p>Total Likes</p>
          <a href="contents.php" class="btn">View Likes</a>
        </div>

        <div class="box">
          <h3><?= $total_comments ?></h3>
          <p>Total Comments</p>
          <a href="contents.php" class="btn">View Comments</a>
        </div>
      </div>
    </div>

  </section>


  <script src="../js/admin_script.js"></script>

</body>

</html>