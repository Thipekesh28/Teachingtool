<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teachers</title>

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
      <p class="role">Student_SLTC</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>
   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>textcases</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>researcher papers</span></a>
   </nav>

</div>

<section class="teachers">

   <h1 class="heading">Research Papers </h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box offer">
         <h3>become a tutor</h3>
         <p>You can add your research paper here </p>
         <a href="register.php" class="inline-btn">get started</a>
      </div>
<!--
      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

   </div>
-->
</section>














<footer class="footer">

   &copy; copyright @ 2023 by <span>T.Thipekesh</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>