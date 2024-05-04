<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
 //header('location:login.php');
}

  if(isset($_GET['get_id'])){
    $get_id = $_GET['get_id'];
  }else{
    $get_id = '';
    header('location:playlist.php');
  }
 
  if(isset($_POST['update'])){

    $id=create_unique_id();
    $status = $_POST['status'];
    $status = filter_var($status, FILTER_SANITIZE_STRING);
  
    $status = $_POST['status'];
    $status = filter_var($status, FILTER_SANITIZE_STRING);
  
    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
  
    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    $update_playlist = $conn->prepare("UPDATE `playlist` SET title=?, description = ?, status = ? WHERE id = ?");
    $update_playlist ->execute([$title, $description, $status, $get_id]);
    $message[] = 'Playlist updated succsessfully';

    $old_thumb = $_POST['old_thumb'];
    $old_thumb = filter_var($old_thumb, FILTER_SANITIZE_STRING);
    $thumb = $_FILES['thumb']['name'];
    $thumb = filter_var($thumb, FILTER_SANITIZE_STRING);
    $ext = pathinfo($thumb, PATHINFO_EXTENSION);
    $rename = create_unique_id().'.'.$ext;
    $thumb_tmp_name = $_FILES['thumb']['tmp_name'];
    $thumb_size = $_FILES['thumb']['size'];
    $thumb_folder = '../uploaded_files/'.$rename;

    if(!empty($thumb)){
      if($thumb_size >2000000){
        $message[] = 'image size is too large';
      }else{
        $update_thumb = $conn->prepare("UPDATE `playlist` SET thumb=? WHERE id=?");
        $update_thumb->execute([$rename, $get_id]);
        move_uploaded_file($thumb_tmp_name, $thumb_folder);
        if($old_thumb != '' AND $old_thumb != $rename){
          unlink('../uploaded_files/'.$old_thumb);
        }
      }
    }

  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Playlist</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
<?php include '../components/admin_header.php' ?>
 
<section class="upload-form">

  <h1 class="heading">Update Playlist</h1>

  <?php
      
      $select_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE id = ? ORDER BY date DESC");
      $select_playlist->execute([$get_id]);
      if ($select_playlist->rowCount() > 0) {
        while ($fetch_playlist = $select_playlist->fetch(PDO::FETCH_ASSOC)) {
          $playlist_id = $fetch_playlist['id'];

      ?>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="old_thumb" value="<?= $fetch_playlist['thumb']; ?>">
    <p>Update title</p>
    <input type="text" class="box" name="title" maxlength="100" required placeholder="Enter playlist title" value="<?= $fetch_playlist['title']; ?>">
    <p>Update Status</p>
    <select name="status"  class="box" required>
    <option value="<?= $fetch_playlist['status']; ?>" selected><?= $fetch_playlist['status']; ?></option>
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
    </select>
    <p>Update description</p>
    <textarea name="description" class="box" cols="30" rows="10" required placeholder="Enter the description of the playlist" maxlength="1000" ><?= $fetch_playlist['description']; ?></textarea>
    <p>Update thumbnail</p>
    <img src="../uploaded_files/<?= $fetch_playlist['thumb'];?>">
    <input type="file" name="thumb"  accept="image/*" class="box">
    <input type="submit" value="Update playlist" name="update" class="btn">
  </form>
 <?php
        }
      } else {
        echo '<p class="empty">No Playlists created!</p>';
      }


      ?>
  </section>



  <script src="../js/admin_script.js"></script>

</body>

</html>