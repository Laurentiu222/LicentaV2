<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
  //header('location:login.php');
}

if (isset($_GET['get_id'])) {
  $get_id = $_GET['get_id'];
} else {
  $get_id = '';
  header('location:playlist.php');
}
// if(isset($_POST['delete_content'])){
//   $delete_id = $_POST['content_id'];
//   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
//   $delete_playlist_thumb = $conn->prepare("SELECT * FROM `playlist` WHERE id = ? LIMIT 1");
//   $delete_playlist_thumb->execute([$delete_id]);
//   $fetch_thumb = $delete_playlist_thumb->fetch(PDO::FETCH_ASSOC);
//   unlink('../uploaded_files/'.$fetch_thumb['thumb']);
//   $delete_bookmark = $conn->prepare("DELETE FROM `bookmark` WHERE playlist_id = ?");
//   $delete_bookmark->execute([$delete_id]);
//   $delete_playlist = $conn->prepare("DELETE FROM `playlist` WHERE id = ?");
//   $delete_playlist->execute([$delete_id]);
//   header('locatin:playlists.php');
// }

// if(isset($_POST['delete_video'])){
//   $delete_id = $_POST['video_id'];
//   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
//   $verify_video = $conn->prepare("SELECT * FROM `content` WHERE id = ? LIMIT 1");
//   $verify_video->execute([$delete_id]);
//   if($verify_video->rowCount() > 0){
//      $delete_video_thumb = $conn->prepare("SELECT * FROM `content` WHERE id = ? LIMIT 1");
//      $delete_video_thumb->execute([$delete_id]);
//      $fetch_thumb = $delete_video_thumb->fetch(PDO::FETCH_ASSOC);
//      unlink('../uploaded_files/'.$fetch_thumb['thumb']);
//      $delete_video = $conn->prepare("SELECT * FROM `content` WHERE id = ? LIMIT 1");
//      $delete_video->execute([$delete_id]);
//      $fetch_video = $delete_video->fetch(PDO::FETCH_ASSOC);
//      unlink('../uploaded_files/'.$fetch_video['video']);
//      $delete_likes = $conn->prepare("DELETE FROM `likes` WHERE content_id = ?");
//      $delete_likes->execute([$delete_id]);
//      $delete_comments = $conn->prepare("DELETE FROM `comments` WHERE content_id = ?");
//      $delete_comments->execute([$delete_id]);
//      $delete_content = $conn->prepare("DELETE FROM `content` WHERE id = ?");
//      $delete_content->execute([$delete_id]);
//      $message[] = 'video deleted!';
//   }else{
//      $message[] = 'video already deleted!';
//   }

//}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playlist View</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
  <?php include '../components/admin_header.php' ?>

  <section class="playlist-details">
    <h1 class="heading">Playlist</h1>

    <?php

    $select_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE id = ? LIMIT 1");
    $select_playlist->execute([$get_id]);
    if ($select_playlist->rowCount() > 0) {
      while ($fetch_playlist = $select_playlist->fetch(PDO::FETCH_ASSOC)) {
        $count_content = $conn->prepare("SELECT * FROM `content` WHERE playlist_id = ?");
        $count_content->execute([$get_id]);
        $total_contents = $count_content->rowCount();
    ?>

        <div class="row">
          <div class="thumb">
            <img src="../uploaded_files/<?= $fetch_playlist['thumb']; ?>" alt="">
            <div class="flex">
              <p><i class="fas fa-video" aria-hidden="true"></i><span><?= $total_contents; ?></span></p>
              <p><i class="fas fa-calendar" aria-hidden="true"></i><?= $fetch_playlist['date']; ?></p>
            </div>
          </div>
          <div class="details">
            <h3 class="title"><?= $fetch_playlist['title']; ?></h3>
            <p class="description"><?= $fetch_playlist['description']; ?></p>
          </div>
        </div>

    <?php
      }
    } else {
      echo '<p class="empty">No Playlists created!</p>';
    }
    ?>
  </section>

  <section class="content">
    <h1 class="heading-playlist">Playlist Contents <a href="add_content.php" class="inline-btn">Add content</a></h1>

    <div class="box-container">
      <?php
      $select_content = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ? AND playlist_id =?");
      $select_content->execute([$tutor_id, $get_id]);
      if ($select_content->rowCount() > 0) {
        while ($fetch_content = $select_content->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div class="box">
          <div class="flex">
            <p><i class="fas fa-circle-dot" style="color:<?php if($fetch_content['status']== 'active'){echo'limegreen';}else{echo 'red';} ?>"></i><span style="color:<?php if($fetch_content['status']== 'active'){echo'limegreen';}else{echo 'red';} ?>"><?= $fetch_content['status']; ?></span></p>
            <p><i class="fas fa-calendar" style="color: var(--main-color);"></i><span style="color: var(--main-color);"><?= $fetch_content['date']; ?></span></p>
          </div>
          <img src="../uploaded_files/<?= $fetch_content['thumb']; ?>" alt="">
          <h3 class="title"><?= $fetch_content['title']; ?></h3>
          <p><?= $fetch_content['description']; ?></p>
          <a href="view_content.php?get_id<?= $fetch_content['id']; ?>" class="btn">View Content</a>
          <form action="" class="flex-btn" method="POST">
            <input type="hidden" name="content_id" value="<?= $fetch_content['id']; ?>">
            <a href="update_content.php?get_id<?= $fetch_content['id']; ?>" class="option-btn">Update</a>
            <input type="submit" value="delete" name="delete_content" class="delete-btn">
          </form>
        </div>
      <?php
        }
      } else {
        echo '<p class="empty">No content added yet!</p>';

        
      }
      ?>
      


    </div>

  </section>



  <script src="../js/admin_script.js"></script>

</body>

</html>