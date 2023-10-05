<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>watch</title>

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

<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <video src="images/vid-1.mp4" controls poster="images/post-1-1.png" id="video"></video>
      </div>
      <h3 class="title">tutorial</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>22-06-2023</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>2 likes</span></p>
      </div>
      <div class="tutor">
         <img src="images/pic-1.jpg" alt="">
         <div>
            <h3>Thipekesh</h3>
            <span>developer</span>
         </div>
      </div>
      <form action="" method="post" class="flex">
         <a href="playlist.php" class="inline-btn">Back</a>
         <button><i class="far fa-heart"></i><span>like</span></button>
      </form>
      <p class="description">
 
      </p>
   </div>

   </section>





   
   <section class="Codes">
      
   <h1 class="heading">RYU Part 1</h1>        
   <div>
   <h1 class="heading">1.How to start the ryu controller </h1>
   <input type="submit" value="ryu-manager <application file name>" name="edit_comment" class="inline-option-btn">
   <h2 class="description"> Example applications are available in ryu.app.application file name or we can specify the filename(with absolute path). </h2>
   </div>

   </section>
   

   <section class="Codes">   
   <div>
            <h1 class="heading">Check the running process details</h1>
            <input type="submit" value="ps -ef | grep ryu-manager" name="edit_comment" class="inline-option-btn">
            <h2 class="description"> RYU Manager listens on openflow ports (6653,6633) are in listening state. </h2>
            </div>
            
   </section>


   <section class="Codes">   
   <div>
            <h1 class="heading">Check the port statistics</h1>
            <input type="submit" value="netstat -ap" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="netstat -ap | grep python" name="edit_comment" class="inline-option-btn">
           
            </div>
            
   </section>


   <section class="Codes">   
   <div>
            <h1 class="heading">2. How to stop the Ryu controller</h1>
            <input type="submit" value="CTRL + C (Kill the Process) ( or ) pkill -9 ryu-manager" name="edit_comment" class="inline-option-btn">
            <h2 class="description"> Please check the running process by ps -ef | grep ryu-manager</h2>
           
            </div>
            
   </section>



   <section class="Codes">   
   <div>
            <h1 class="heading">3. RYU Controller command line options</h1>
            <input type="submit" value="ryu-manager --help" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="ryu-manager --verbose <application>" name="edit_comment" class="inline-option-btn">
           
            </div>
            
   </section>


   <section class="Codes">   
   <div>
            <h1 class="heading"> 4. How to run the Application</h1>
            <h2 class="description"> Example Application is installed in ryu/app folder.Specify the filename as ryu.app.filename</h2>
            <h2>Example </h2>
            <input type="submit" value="ryu-manager --verbose ryu.app.simple_switch_13" name="edit_comment" class="inline-option-btn">
            <h2>Download the file and run it </h2>
            <input type="submit" value="ryu-manager --verbose simple_switch_13.py" name="edit_comment" class="inline-option-btn">
           
            </div>
            
   </section>


   
 
   
   
















<section class="comments">

   <h1 class="heading">1 comments</h1>

   <form action="" class="add-comment">
      <h3>add comments</h3>
      <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="submit" value="add comment" class="inline-btn" name="add_comment">
   </form>

   <h1 class="heading">user comments</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Thipekesh</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">this is a comment form Thipekesh</div>
         <form action="" class="flex-btn">
            <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
         </form>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">awesome tutorial!
            keep going!</div>
      </div>
<!--
      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">amazing way of teaching!
            thank you so much!
         </div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">loved it, thanks for the tutorial!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">this is what I have been looking for! thank you so much!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">thanks for the tutorial!

            how to download source code file?
         </div>
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