<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

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
          <a href="profile.php" class="btn">View Profile</a>
          <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
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
        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
        <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
        <a href="about.html"><i class="fa-regular fa-address-card"></i><span>About us</span></a>
        <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
    </div>
  
  </div>


  <section class="qucik-select">

    <h1 class="heading">Quick Options</h1>

    <div class="box-container">
      <div class="box">
        <h3 class="title">Likes and Comments</h3>
        <p>Total Likes: <span>14</span></p>
        <a href="#" class="inline-btn">View Likes</a>
        <p>Total Comments: <span>5</span></p>
        <a href="#" class="inline-btn">View Comments</a>
        <p>Saved Playlist: <span>3</span></p>
        <a href="#" class="inline-btn">View PlayList</a>
      </div>

      <div class="box">
        <h3 class="title">Top Categories</h3>
        <div class="flex">
          <a href="#"><i class="fa-solid fa-people-arrows"></i><span>Language Skills</span></a>
          <a href="#"><i class="fa-solid fa-monument"></i><span>Cultural Insights</span></a>
          <a href="#"><i class="fa-solid fa-forward"></i><span>Present Continuous (Present Progressive)</span></a>
          <a href="#"><i class="fa-solid fa-code-compare"></i><span>Conditional Statements</span></a>
          <a href="#"><i class="fa-solid fa-book-open"></i><span>Basic Vocabulary</span></a>
          <a href="#"><i class="fa-solid fa-ear-listen"></i><span>Listening Comprehension</span></a>

        </div>
      </div>

      <div class="box">
        <h3 class="title">Popular Topics</h3>
        <div class="flex">
          <a href="#"><i class="fa-solid fa-award"></i><span>Grammar Fundamentals</span></a>
          <a href="#"><i class="fa-solid fa-book-open-reader"></i><span>Vocabulary Expansion</span></a>
          <a href="#"><i class="fa-solid fa-people-arrows"></i><span>Speaking and Pronunciation</span></a>
          <a href="#"><i class="fa-solid fa-monument"></i><span>Reading Comprehension</span></a>
          <a href="#"><i class="fa-solid fa-feather"></i><span>Writing Skills</span></a>
          <a href="#"><i class="fa-solid fa-code-compare"></i><span>Cultural Context</span></a>


        </div>
      </div>


      <div class="box tutor">
        <h3 class="title">Complete the journey and become a teacher</h3>
        <p>Lorem ipsum este textul standard utilizat pentru a simula casete de text și a ușura evaluarea designului unei viitoare tipărituri sau a unui site web</p>
        <a href="register.html" class="inline-btn">Get Started</a>
      </div>
    </div>
  </section>

<section class="courses">

  <h1 class="heading">Our Courses</h1>

  <div class="box-container">

    <div class="box">
      <div class="tutor">
        <img src="img/pic-2.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb1.jpg" class="thumb" alt="">
      <h3 class="title">Incepe aventura cu Present Simple</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>

    <div class="box">
      <div class="tutor">
        <img src="img/pic-3.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb2.jpg" class="thumb" alt="">
      <h3 class="title">Explorează în continuare Present Continuous</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>

    <div class="box">
      <div class="tutor">
        <img src="img/pic-5.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb1.jpg" class="thumb" alt="">
      <h3 class="title">Treci la Nivelul Următor cu Timpurile Verbale Perfecte</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>

    <div class="box">
      <div class="tutor">
        <img src="img/pic-6.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb1.jpg" class="thumb" alt="">
      <h3 class="title">Înfruntă Provocările Timpurilor Verbale Condiționale</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>

    <div class="box">
      <div class="tutor">
        <img src="img/pic-7.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb1.jpg" class="thumb" alt="">
      <h3 class="title">Descoperă Magia Timpurilor Verbale Modal</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>

    <div class="box">
      <div class="tutor">
        <img src="img/pic-8.jpg" alt="">
        <div>
          <h3>Jhonn Doe</h3>
          <span>06.01.2024</span>
        </div>
      </div>
      <img src="img/thumb1.jpg" class="thumb" alt="">
      <h3 class="title">Înfruntă Provocarea Completării Condiționale</h3>
      <a href="playlist.html" class="inline-btn">View Playlist</a>
    </div>
  </div>

  <div class="more-btn">
    <a href="courses.html" class="inline-option-btn">View More</a>
  </div>

</section>




  <!--Footer-->
  <!-- <footer class="footer">

  &copy; Copyright @ 2024 <span>Bacila Laurentiu</span> | All rights reserved

  </footer> -->

</body>








<script src="js/script.js"></script>