<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
 //header('location:login.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Content</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
<?php include '../components/admin_header.php' ?>
 
<section class="upload-form">
    <h1 class="heading">Add Content</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <p>Content title<span>*</span></p>
      <input type="text" class="box" name="title" maxlength="100" placeholder="Enter Content title" required>
      <p>Status<span>*</span></p>
      <select name="status" required class="box">
        <option value="active">Active</option>
        <option value="deactive">Deactive</option>
      </select>
      <p>Content description<span>*</span></p>
      <textarea name="description" class="box" cols="30" rows="10" required placeholder="Enter the description" maxlength="1000"></textarea>
      <select name="playlist" class="box" required>
        <option value="" disabled selected>Select Playlist</option>
        <?php
        $select_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
        $select_playlist->execute([$tutor_id]);
        if ($select_playlist->rowCount() > 0) {
          while ($fetch_playlist = $select_playlist->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <option value="<?= $fetch_playlist['id']; ?>"><?= $fetch_playlist['title']; ?></option>
        <?php

          }
        } else {
          echo '<option value="" disabled>No playlist created yet!</option>';
        }
        ?>
      </select>
      <p>Select thumbnail<span>*</span></p>
      <input type="file" name="thumb" required accept="image/*" class="box">
      <p>Select video<span>*</span></p>
      <input type="file" name="video" required accept="video/*" class="box">
      <input type="submit" value="Create Content" name="submit" class="btn">


    </form>
  </section>



  <script src="../js/admin_script.js"></script>

</body>

</html>