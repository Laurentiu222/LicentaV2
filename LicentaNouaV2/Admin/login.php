<?php

include '../components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `tutors` WHERE email = ? AND password = ? LIMIT 1");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);
   
   if($select_user->rowCount() > 0){
    setcookie('tutor_id', $row['id'], time() + 60*60*24*30, '/');
     header('location:dashboard.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body style="padding-left: 0;">
  <?php

  if (isset($message)) {
    foreach ($message as $message) {
      echo '
      <div class="message form">
          <span>' . $message . '</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      
      ';
    }
  }

  ?>
  <section class="form-container">

    <form action="" class="login" method="post" enctype="multipart/form-data">
      <h3>Welcome back!</h3>

      <p>Email</p>
      <input type="text" name="email" maxlength="50" required placeholder="Enter your email..." class="box">
      <p>Password</p>
      <input type="password" name="pass" maxlength="20" required placeholder="Enter a password..." class="box">
      <input type="submit" value="Login" name="submit" class="btn">
      <p class="link">Don't have an account?<a href="register.php"> Register Now</a></p>

    </form>
  </section>


  <script src="../js/admin_script.js"></script>

</body>

</html>