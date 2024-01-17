<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>student home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">Likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">view likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">view comments</a>
         <p>saved courses : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">view bookmark</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">Top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-vial"></i><span>Science</span></a>
            <a href="#"><i class="fas fa-code"></i><span>ICT</span></a>
            <a href="#"><i class="fas fa-solid fa-atom"></i><span>Physics</span></a>
            <a href="#"><i class="fas fa-solid fa-flask"></i><span>Chemistry</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>Accounting</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>English</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>Math</span></a>
            <a href="#"><i class="fas fa-book"></i><span>Arts and Crafts</span></a>
            <a href="#"><i class="fas fa-graduation-cap"></i><span>Business Studies</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fa-solid fa-pen-nib"></i><span>Essay Writing</span></a>
            <a href="#"><i class="fab fa-react"></i><span>Organic Compounds</span></a>
            <a href="#"><i class="fa-solid fa-rocket"></i><span>Quantum Physics</span></a>
            <a href="#"><i class="fa-solid fa-clipboard"></i><span>Poems</span></a>
            <a href="#"><i class="fab fa-php"></i><span>Programming</span></a>
            <a href="#"><i class="fa-solid fa-calculator"></i><span>Calculus</span></a>
         </div>
      </div>

      <div class="box tutor">
         <h3 class="title">Want to become a tutor?</h3>
         <p>Do you want to show your teaching skills to the world and also make handsome amount of money? Then this is your perfect platform!</p>
         <a href="admin/register.php" class="inline-btn">Register Now!</a>
      </div>

   </div>

</section>

<section class="courses">

   <h1 class="heading">latest courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">Enroll Now</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view more courses</a>
   </div>

</section>

<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<script src="js/script.js"></script>
   
</body>
</html>