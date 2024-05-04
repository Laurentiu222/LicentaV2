<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <header class="header">
    <section class="flex">
      <a href="home.html" class="logo"> ToungeTwister </a>

      <form action="" method="post" class="search-form">
          <input type="text" name="search_box" placeholder="Search here..."
              required maxlength="100">
              <button type="submit" class="fas fa-search" name="search_box"></button>
        </form>

        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="search-btn" class="fas fa-search"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="toogle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
          <img src="img/AvatarStudent.jpg" alt="">
          <h3 class="username">Laur Mihai</h3>
          <span>Student</span>
          <a href="profile.html" class="btn">View Profile</a>
          <div class="flex-btn">
            <a href="login.html" class="option-btn">Login</a>
            <a href="register.html" class="option-btn">Register</a>
          </div>
        </div>
    </section>
  </header>


  <div class="side-bar">

    <div class="close-side-bar">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <div class="profile">
      <img src="img/AvatarStudent.jpg" alt="">
      <h3 class="username">Laur Mihai</h3>
      <span>Student</span>
      <a href="profile.html" class="btn">View Profile</a>
    </div>
  

    <!--Side bar-->
    <div class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="about.html"><i class="fa-regular fa-address-card"></i><span>About us</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
  </div>
  
  </div>

<section class="playlist">

  <h1 class="heading">Detalii PlayList</h1>
  <div class="row">
    <div class="col">
      <form action="" method="post" class="save-list">
        <button type="submit" name="save_list"><i class="fa-solid fa-bookmark"></i></i><span>Save PlayList</span></button>
      </form>
      <img src="img/thumb1.jpg" alt="" class="thumb">
    </div>

    <div class="col">
      <div class="tutor">
        <img src="img/pic-2.jpg" alt="">
        <div>
          <h3>Jhon Doe</h3>
          <span>English Teacher</span>
        </div>
      </div>
      <div class="details">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus accusantium labore illo quia doloremque rerum ea sint atque tenetur! Sunt?</p>
        <h3>MORFOLOGIA</h3>
        <div class="date"><i class="fa fa-calendar"></i>06.04.2024</div>
      </div>
    </div>


  </div>

</section>























  <!--Footer-->
  <!-- <footer class="footer">

  &copy; Copyright @ 2024 <span>Bacila Laurentiu</span> | All rights reserved

  </footer> -->

</body>








<script src="js/script.js"></script>