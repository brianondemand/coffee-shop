<?php
// Conect to database
require('includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ArtCaffé</title>

   <!-- font awesome cdn link  -->
   <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo"><img src="images/cafee.webp" alt=""></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#menu">menu</a>
         <a href="#gallery">gallery</a>
         <a href="#team">team</a>
         <a href="#contact">contact</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
         <h3>ArtCaffé</h3>
         <p>Want to experience the best coffee you’ve ever tasted? Come join us at <strong>ArtCaffé</strong> sparkling conversation, a warm and welcoming atmosphere, and of course coffee beyond all imagining.</p>
         <a href="#about" class="btn">about us</a>
      </div>

   </section>

</div>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.svg" alt="">
   </div>

   <div class="content">
      <h3>A cup of cofee can complete your day</h3>
      <p>We are coffee punks who don’t exaggerate about their Americanos. Time, temperature, and technique need to be on point to make the best cup of coffee, but it’s all for nothing without quality beans roasted to perfection.</p>
      <a href="#menu" class="btn">our menu</a>
   </div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our facility</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>varieties of coffees</h3>
         <p>Latte, Americano, Frappuccino, Black Coffee, Affogato.. it’s crazy all that you can do with a few small beans.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>coffee beans</h3>
         <p>Powerful evocative smell that enhances a great cup of coffee.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>breakfast and sweets</h3>
         <p>It gives you an instant as well a slow release of glucose, which in turn, keeps your body active throughout the length of the day.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>read to go coffee</h3>
         <p>A chilled coffee that comes pre-made in a can or bottle</p>
      </div>

   </div>

</section>

<!-- facility section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>popular menu</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/menu/menu-1.png" alt="">
         <h3>love you coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu/menu-2.png" alt="">
         <h3>Cappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu/menu-3.png" alt="">
         <h3>Mocha coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu/menu-4.png" alt="">
         <h3>Frappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu/menu-5.png" alt="">
         <h3>black coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu/menu-6.png" alt="">
         <h3>love heart coffee</h3>
      </div>

   </div>

</section>

<!-- menu section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our gallery</h3>
   </div>

   <div class="box-container">
      <img src="images/gallery/image-1.jpg" alt="">
      <img src="images/gallery/image-2.jpg" alt="">
      <img src="images/gallery/image-3.jpg" alt="">
      <img src="images/gallery/image-4.jpg" alt="">
      <img src="images/gallery/image-5.jpg" alt="">
      <img src="images/gallery/image-6.jpg" alt="">
   </div>

</section>

<!-- gallery section ends -->

<!-- team section starts  -->

<section class="team" id="team">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our team</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/team/our-team-1.jpg" alt="">
         <h3>Constance Mann</h3>
      </div>
      <div class="box">
         <img src="images/team/our-team-2.jpg" alt="">
         <h3>Saad Villegas</h3>
      </div>
      <div class="box">
         <img src="images/team/our-team-3.jpg" alt="">
         <h3>Haleema Page</h3>
      </div>
      <div class="box">
         <img src="images/team/our-team-4.jpg" alt="">
         <h3>Ned Dunlap</h3>
      </div>
      <div class="box">
         <img src="images/team/our-team-5.jpg" alt="">
         <h3>Kate Roman</h3>
      </div>
      <div class="box">
         <img src="images/team/our-team-6.jpg" alt="">
         <h3>Omer Johns</h3>
      </div>

   </div>

</section>

<!-- team section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>contact us</h3>
   </div>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>book a table</h3>
         <input type="text" name="name" required class="box" maxlength="20" placeholder="enter your name">
         <input type="number" name="number" required class="box" maxlength="20" placeholder="enter your number" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false">
         <input type="number" name="guests" required class="box" maxlength="20" placeholder="how many guests" min="0" max="99" onkeypress="if(this.value.length == 2) return false">
         <input type="submit" name="send" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>our email</h3>
         <p>artcaffe@gmail.com</p>
         <p>customercare@artcaffe.com</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Fresh and fast from</h3>
         <p>07:00am to 09:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>shop location</h3>
         <p>Parklands, Nairobi.</p>
      </div>

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>our number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?= date('Y'); ?> by <span>brian.on.demand</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>