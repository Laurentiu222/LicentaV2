<?php

include '../components/connect.php';

if (isset($_COOKIE['user_id']) && $_COOKIE['tutor_id']) {
  $tutor_id = $_COOKIE['user_id'];
} else {
  $tutor_id = '';
 //header('location:login.php');
}

if(isset($_POST['submit'])){

  $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id=? LIMIT 1");
  $select_tutor->execute([$tutor_id]);
  $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);

  $id = create_unique_id();
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);


if(!empty($name)){
  $update_name = $conn->prepare("UPDATE `tutors` SET name = ? WHERE id=?");

  $update_name ->execute([$name, $tutor_id]);
  $message[] = 'Name updated succsesfully!';
}
if(!empty($email)){
  $select_tutor_email = $conn->prepare("SELECT * FROM `tutors` WHERE email =?");
  $select_tutor_email->execute([$email]);
  if($select_tutor_email->rowCount() >0 ){
    $message[] = 'Email already in use!';
  }else{
    $update_email = $conn->prepare("UPDATE `tutors` SET email = ? WHERE id=?");
    $update_email ->execute([$email, $tutor_id]);
    $message[] = 'Email updated succsesfully!';
  }
  
}
  $prev_image = $fetch_tutor['image'];
  $image = $_FILES['image']['name'];
  $image = filter_var($image, FILTER_SANITIZE_STRING);
  $ext = pathinfo($image, PATHINFO_EXTENSION);
  $rename = create_unique_id().'.'.$ext;
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_size = $_FILES['image']['size'];
  $image_folder = '../uploaded_files/'.$rename;

  if(!empty($image)){
    if($image_size > 2000000){
      $message[] ='Image size is too large';
    }else{
      $update_image = $conn->prepare("UPDATE `tutors` SET image = ? WHERE id=?");
      $update_image ->execute([$rename, $tutor_id]);
      
      move_uploaded_file($image_tmp_name, $image_folder);
      if($prev_image != '' AND $prev_image != $rename){
        unlink('../uploaded_files/'.$prev_image);
      }
      $message[] = 'Profile image updated succsesfully!';
    }
  }

  $empty_pass = '';
  $prev_pass = $fetch_tutor['password'];
  $o_pass = sha1($_POST['o_pass']);
  $o_pass = filter_var($o_pass, FILTER_SANITIZE_STRING);
  $new_pass = sha1($_POST['new_pass']);
  $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
  $c_pass =sha1($_POST['c_pass']);
  $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

  if($o_pass != $empty_pass){
    if($o_pass != $prev_pass){
      $message[] = 'Old Password does not match';
    }elseif($new_pass != $c_pass){
      $message[] = 'Confirmed password does not match';
    }else{
      if($new_pass != $empty_pass){
        $update_pass = $conn->prepare("UPDATE `tutors` SET password = ? WHERE id=?");
        $update_pass ->execute([$c_pass, $tutor_id]);
        $message[] = 'Password updated succsesfully!';
      }else{
        $message[] = 'please eneter a new password';
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
  <title>Update</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
<?php include '../components/admin_header.php' ?>
 
<section class="form-update">

<form action="" method="post" enctype="multipart/form-data">
  <h3>Update Profile</h3>
  <div class="flex">
    <div class="col">
      <p>Username</p>
      <input type="text" name="name" maxlength="50" placeholder="<?=$fetch_profile['name']; ?>" class="box">
      <p>Email</p>
      <input type="text" name="email" maxlength="50"  placeholder="<?=$fetch_profile['email']; ?>" class="box">

    </div>
    <div class="col">
    <p>Old password</p>
      <input type="password" name="o_pass" maxlength="20"  placeholder="Old password..." class="box">
      <p>Password</p>
      <input type="password" name="new_pass" maxlength="20"  placeholder="Enter a password..." class="box">
      <p>Confirm password</p>
      <input type="password" name="c_pass" maxlength="20"  placeholder="Confirm password..." class="box">
      <p>Select picture</p>
      <input type="file" name="image" class="box"  accept="img/*" style="cursor: pointer;">
    </div>
  </div>
  <input type="submit" value="Update now" name="submit" class="btn" >
  
  
</form>
</section>





  <script src="../js/admin_script.js"></script>

</body>

</html>