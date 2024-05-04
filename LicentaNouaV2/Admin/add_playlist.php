<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
 //header('location:login.php');
}

if(isset($_POST['submit'])){

  $id=create_unique_id();
  $status = $_POST['status'];
  $status = filter_var($status, FILTER_SANITIZE_STRING);

  $status = $_POST['status'];
  $status = filter_var($status, FILTER_SANITIZE_STRING);

  $title = $_POST['title'];
  $title = filter_var($title, FILTER_SANITIZE_STRING);

  $description = $_POST['description'];
  $description = filter_var($description, FILTER_SANITIZE_STRING);

  $thumb = $_FILES['thumb']['name'];
  $thumb = filter_var($thumb, FILTER_SANITIZE_STRING);
  $ext = pathinfo($thumb, PATHINFO_EXTENSION);
  $rename = create_unique_id().'.'.$ext;
  $thumb_tmp_name = $_FILES['thumb']['tmp_name'];
  $thumb_size = $_FILES['thumb']['size'];
  $thumb_folder = '../uploaded_files/'.$rename;
  

  $verify_playlist=$conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ? AND title = ? AND description =?");
  $verify_playlist->execute([$tutor_id, $title, $description]);

  if($verify_playlist->rowCount() >0 ){
    $message[] = 'Playlist already existing';
  }else{

    $add_playlist = $conn->prepare("INSERT INTO `playlist` (id, tutor_id, title, description, thumb ,status) VALUES(?, ?, ?, ?, ? ,?)");
    $add_playlist->execute([$id, $tutor_id, $title, $description, $rename, $status]);
    move_uploaded_file($thumb_tmp_name, $thumb_folder);
    $message[]='Playlist created succsesfully';
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Playlist</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
<?php include '../components/admin_header.php' ?>
 
  <section class="upload-form">

  <h1 class="heading">Add playlist</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <p>Playlist title<span>*</span></p>
    <input type="text" class="box" name="title" maxlength="100" placeholder="Enter playlist title" required>
    <p>Status<span>*</span></p>
    <select name="status" required class="box">
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
    </select>
    <p>Playlist description<span>*</span></p>
    <textarea name="description" class="box" cols="30" rows="10" required placeholder="Enter the description of the playlist" maxlength="1000"></textarea>
    <p>Playlist thumbnail<span>*</span></p>
    <input type="file" name="thumb" required accept="image/*" class="box">
    <input type="submit" value="Create playlist" name="submit" class="btn">
  </form>

  </section>






  <script src="../js/admin_script.js"></script>

</body>

</html>