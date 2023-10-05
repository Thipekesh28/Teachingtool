<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Our Project</title>

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

<section class="about">

   <div class="row">
<!--
      <div class="image">
         <img src="images/about-img.svg" >
      </div>
-->
      <div class="image">
         <img src="images/SDN_Diagram.jpg" alt="">
      </div>

      <div class="content">
         <h3>What is SDN</h3>
         <p>Software-Defined Networking (SDN) refers to a networking approach that
            utilizes software based controllers to manage hardware infrastructure in the
            network.
            It separates the control plane and the data plane in a network and
            orchestrate the control to a central point called the controller.</p>
         <a href="courses.php" class="inline-btn">Our test cases</a>
      </div>

   </div>

   <div class="box-container">
 <!--
      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>brilliant Student_SLTCts</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>job placement</p>
         </div>
      </div>

   </div>
-->

</section> 

<section class="reviews">

   <h1 class="heading">Student_SLTC's reviews</h1>

   <div class="box-container">
      <div class="box">
         <p>I enrolled in the SDN test case development and implementation course with high hopes, and I must say that it didn't disappoint. The course structure was well-designed, starting with the basics and gradually progressing to more advanced concepts. The instructors had a strong grasp of the subject matter and effectively communicated complex ideas. However, I felt that the course lacked a bit of hands-on practice. While we had a few lab sessions, I would have liked more opportunities to work on practical projects. Nonetheless, the theoretical knowledge I gained was invaluable, and I now feel confident in my understanding of SDN testing principles.</p>
         <div class="Student_SLTCt">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Sinthu</h3>
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
         <p>SDN test case development and implementation was an eye-opening experience for me. The course provided a comprehensive understanding of SDN concepts and the practical skills to create effective test cases. The instructors were knowledgeable and supportive, guiding us through the entire process. I appreciated the hands-on approach with real-world scenarios, which helped me gain confidence in designing and implementing test cases. The course materials and resources were well-organized and accessible. Overall, I highly recommend this course to anyone interested in SDN and quality assurance.</p>
         <div class="Student_SLTCt">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Dilan</h3>
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
         <p>As someone with a background in networking, I found the SDN test case development and implementation course to be extremely beneficial. The curriculum covered a wide range of topics, from SDN architecture to testing methodologies. The practical exercises and assignments challenged me to think critically and apply my knowledge to real-world scenarios. The instructors were experienced professionals who provided valuable insights and feedback. The only drawback was the limited time allocated for hands-on practice, as I would have liked more opportunities to refine my skills. Nonetheless, this course is a great starting point for anyone interested in SDN testing.</p>
         <div class="Student_SLTCt">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Nimnaz</h3>
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
         <p>SDN test cases development and implementation was a crucial aspect of our networking course, and it provided us with valuable insights into the practical application of software-defined networking. The module focused on creating test cases to evaluate the functionality, performance, and security of SDN environments.The instructor did an excellent job explaining the concepts and guiding us through the process of developing effective test cases. The hands-on approach, with ample opportunities to work with real-world SDN setups, was particularly beneficial. It helped us gain a deeper understanding of how SDN controllers and switches functioned together.The implementation phase was challenging yet rewarding. We had to apply our knowledge of SDN architectures, protocols, and programming languages to develop test cases that covered various scenarios. The practical exercises allowed us to troubleshoot and debug our test cases, enhancing our problem-solving skills.Furthermore, the course emphasized the importance of comprehensive testing, considering both functional and non-functional aspects. We learned how to verify the behavior of SDN networks under different conditions, including high traffic loads, network failures, and security attacks. This holistic approach enhanced our ability to identify vulnerabilities and design robust SDN solutions.Overall, the SDN test cases development and implementation course provided a well-rounded experience in exploring the capabilities and limitations of software-defined networking. It equipped us with the necessary skills to evaluate and validate SDN deployments effectively. I highly recommend this course to anyone interested in networking and software-defined technologies.</p>
         <div class="Student_SLTCt">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Mithurshan</h3>
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
         <p>The SDN test cases development and implementation module was an essential part of our networking curriculum. It provided us with practical knowledge and hands-on experience in testing and validating software-defined networking solutions.

            The course content was comprehensive and well-structured. We started by understanding the fundamentals of SDN and its benefits, followed by diving into the specifics of developing and implementing test cases. The instructor did a commendable job of explaining complex concepts in a clear and concise manner, making it easier for us to grasp the material.
            
            During the implementation phase, we got to work with popular SDN frameworks and tools, which helped us gain proficiency in programming languages like Python and SDN-specific languages like OpenFlow. The lab sessions were invaluable as they allowed us to apply our theoretical knowledge to practical scenarios, where we created and executed test cases on real SDN environments.
            
            One aspect that stood out was the emphasis on real-world challenges. The course exposed us to various network conditions, such as congestion, scalability issues, and security threats, and taught us how to design test cases that simulated these scenarios. This practical approach enhanced our problem-solving skills and enabled us to analyze and troubleshoot SDN networks effectively.
            
            The instructor was highly knowledgeable and supportive throughout the course. They encouraged active participation and provided timely feedback on our assignments and projects, which greatly enhanced our learning experience.
            
            In conclusion, the SDN test cases development and implementation module was an enriching and valuable part of our networking education. It equipped us with the necessary skills to validate and optimize SDN solutions, and I believe it is an essential course for anyone aspiring to work in the field of software-defined networking.</p>
         <div class="Student_SLTCt">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Kirishan</h3>
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
         <p>LSDN test case development and implementation was a game-changer for me. Coming from a software testing background, I wanted to expand my skills into the realm of SDN. This course exceeded my expectations. The instructors were not only knowledgeable but also passionate about the subject, which made the learning experience engaging and enjoyable. The course materials were comprehensive and easy to follow, even for someone with limited SDN knowledge. The hands-on labs were particularly valuable, allowing me to apply the concepts I learned in a practical setting. I feel confident in my ability to develop and implement test cases for SDN networks now. Highly recommended!</p>
         <div class="Student_SLTCt">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Thilakshan</h3>
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













<footer class="footer">

   &copy; copyright @ 2023 by <span>T.Thipekesh</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>