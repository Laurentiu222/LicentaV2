<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

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
        <a href="contact.html"><i class="fa-regular fa-address-card"></i><span>About us</span></a>
        <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
    </div>
  
  </div>


<section class="about">
  <div class="row">

    <div class="image">

      <img src="img/about-img.svg">

    </div>

    <div class="content">

      <h3>De ce sa ne alegi pe noi?</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quibusdam repellat harum labore, rerum modi ipsa repudiandae cumque optio ducimus!</p>
      <a href="courses.html" class="inline-btn">Cursurile noastre</a>
    </div>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <div>
          <h3>+10k</h3>
          <span>cursuri online</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-user-graduate"></i>
        <div>
          <h3>+23k</h3>
          <span>Absolventi</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-chalkboard-user"></i>
        <div>
          <h3>+7k</h3>
          <span>Profesorii</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-briefcase"></i>
        <div>
          <h3>100%</h3>
          <span>Sanse de a deveni expert</span>
        </div>
      </div>


    </div>

  </div>
</section>

<section class="reviews">

  <h1 class="heading">Student's Reviews </h1>

  <div class="box-container">

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-2.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-3.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-4.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-5.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-6.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

    <div class="box">
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
       <div class="student">
          <img src="img/pic-7.jpg" alt="">
          <div>
             <h3>john deo</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
          </div>
       </div>
    </div>

 </div>

</section>








  <!--Footer-->
  <!-- <footer class="footer">

  &copy; Copyright @ 2024 <span>Bacila Laurentiu</span> | All rights reserved!

  </footer> -->

</body>








<script src="js/script.js"></script>