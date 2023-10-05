<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">SDN WEB APP</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Thipekesh</h3>
         <p class="role">Student_SLTC</p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Thipekesh</h3>
      <p class="role">student_SLTC</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>textcases</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>researcher papers</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p class="likes">total likes : <span>25</span></p>
         <a href="about.php" class="inline-btn">view likes</a>
         <p class="likes">total comments : <span>12</span></p>
         <a href="about.php" class="inline-btn">view comments</a>
         <p class="likes">saved playlists : <span>4</span></p>
         <a href="playlist.php" class="inline-btn">view playlists</a>
      </div>
<!--
      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>
 -->     

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fa-solid fa-network-wired"></i><span>SDN</span></a>
            <a href="#"><i class="fa-sharp fa-regular fa-block-brick-fire"></i><span>Firewall</span></a>
            <a href="#"><i class="fab fa-js"></i><span>OpenFLow</span></a>
            
         </div>
      </div>
<!--
      <div class="box">
         <h3 class="title">become a tutor</h3>
         <p class="tutor">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, nam?</p>
         <a href="teachers.php" class="inline-btn">get started</a>
      </div>
-->
   </div>

</section>



<section class="courses">

   <h1 class="heading">Our Test Cases</h1>

   <div class="box-container">
      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Beginner level</h3>
               <span></span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/Beginer.jpg" alt="">
            <span>1 video</span>
         </div>
         <h3 class="title">A Beginer level test case</h3>
         <a href="playlist.php" class="inline-btn">view </a>
      </div>





      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Intermediate Level Test Case </h3>
               <span></span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/inter.png" alt="">
            <span>6 videos</span>
         </div>
         <h3 class="title">A Intermediate Level Test Case</h3>
         <a href="playlist.php" class="inline-btn">view </a>




      </div>
      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Expert Level Test Case</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/Expert.png" alt="">
            <span>5 videos</span>
         </div>
         <h3 class="title">A Expert Level Test Case</h3>
         <a href="playlist.php" class="inline-btn">view </a>
      </div>


   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all</a>
   </div>
</section>















<footer class="footer">

   &copy; copyright @ 2023 by <span>T.Thipekesh</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>