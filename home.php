<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
     
    <!-- font awesome cd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 

    <!-- Custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <?php include('includes/header.php');?>
    <!-- Home -->
    <section class="home">

      <div class="swiper home-slider">

        <div class="swiper-wrapper">

          <div class="swiper-slide slide" style="background:url(images/laut.jpeg) no-repeat">
            <div class="content">
             <span>journey, trip, travel</span>
              <h3>Liburan damai ke destinasi yang tenang</h3>
              <a href="package.php" class="btn">Discover the beauty of worlds</a>
             </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/usa.jpeg) no-repeat">
            <div class="content">
             <span>journey, trip, travel</span>
              <h3>Ciptakan kenangan di tempat baru</h3>
              <a href="package.php" class="btn">Discover the beauty of worlds</a>
             </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/go.jpeg) no-repeat">
            <div class="content">
             <span>journey, trip, travel</span>
              <h3>Pengalaman wisata yang tak terlupakan</h3>
              <a href="package.php" class="btn">Discover the beauty of worlds</a>
             </div>
            </div>


           </div>
           <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

        </div>

    </section>

    <section class="services">

        <h1 class="heading-title"> Layanan Kami </h1>

        <div class="box-container">
        
         <div class="box">
            <img src="images/adventure.png" alt="">
            <h3>adventure</h3>
         </div>

         <div class="box">
            <img src="images/tourguide.png" alt="">
            <h3>tour guide</h3>
         </div>
         
         <div class="box">
            <img src="images/hiking.png" alt="">
            <h3>hiking</h3>
         </div>

         <div class="box">
            <img src="images/fire.png" alt="">
            <h3>bon fire</h3>
         </div>

         <div class="box">
            <img src="images/road.png" alt="">
            <h3>off road</h3>
         </div>

         <div class="box">
            <img src="images/camp.png" alt="">
            <h3>camping</h3>
         </div>

        </div>
    </section>

  <section class="home-about">

    <div class="image">

     <img src="images/office.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Travelnow adalah perusahaan swasta yang didirikan pada tahun 2022 oleh Dwi Marhen Yono, yang saat itu menjabat sebagai Direktur Pemasaran Pariwisata di Kementerian Pariwisata. 
            Sebagai penyedia layanan tour guide, Travelnow bertujuan untuk menjadi platform terdepan di dunia dalam bidang pariwisata dengan menawarkan pengalaman perjalanan yang tak terlupakan.</p>
    </div>
   
  </section>


 <section class="home-packages">

   <h1 class="heading-title"> Travel Packages </h1>

   <div class="box-container">

     <div class="box">
        <div class="image">
            <img src="images/usa.jpeg" alt="">
        </div> 
        <div class="content">
            <h3>Go Amerika</h3>
            <p>amerikas serikat atau usa adalah negara yang terletak di benua amerika utara</p>
            <a href="package.php" class="btn">book now</a>
        </div>
     </div>
  
     <div class="box">
        <div class="image">
            <img src="images/camping.jpeg" alt="">
        </div> 
        <div class="content">
            <h3>Camping di Bromo</h3>
            <p>gunung bromo adalah sebuah gunung berapi aktif yang terletak Jawa Timur, Indonesia</p>
            <a href="package.php" class="btn">book now</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="images/laut.jpeg" alt="">
        </div> 
        <div class="content">
            <h3>Berlibur ke labuan bajo</h3>
            <p>Labuan Bajo merupakan sebuah surga tersembunyi yang ada di Indonesia bagian timur.</p>
            <a href="package.php" class="btn">book now</a>
        </div>
     </div>

   </div>
   <div class="load-more"><a href="package.php" class="btn"> load more</a></div>
 </section>

<!-- footer -->
<section class="footer">
    
    <div class="box-container">
      
        <div class="box">
           <h3>quick link</h3>
           <a href="home.php"> <i class="fa-solid fa-link"></i> Home</a>
           <a href="book.php"> <i class="fa-solid fa-link"></i> Booking</a>
           <a href="package.php"> <i class="fa-solid fa-link"></i> Package</a>
           <a href="owner.php"> <i class="fa-solid fa-link"></i> Owner</a>    
        </div>

        <div class="box">
           <h3>extra link</h3>
           <a href="#"> <i class="fa-solid fa-link"></i> about us </a>   
           <a href="#"> <i class="fa-solid fa-link"></i> privacy policy </a>
           <a href="#"> <i class="fa-solid fa-link"></i> terms of use </a>     
        </div>

        <div class="box">
           <h3>contact info</h3>
           <a href="#"> <i class="fas fa-phone"></i> +123-221-000 </a>   
           <a href="#"> <i class="fas fa-envelope"></i> travelnow@gmail.com </a>
           <a href="https://www.google.com/maps/place/Jakarta+Travel+Service/@-6.2660175,106.4854331,10.83z/data=!4m10!1m2!2m1!1stravel+jakarta!3m6!1s0x2e69f16ce6600167:0x88a0443c13b7635f!8m2!3d-6.2461119!4d106.7960379!15sCg50cmF2ZWwgamFrYXJ0YVoQIg50cmF2ZWwgamFrYXJ0YZIBDXRyYXZlbF9hZ2VuY3ngAQA!16s%2Fg%2F1tlz8r_d"> <i class="fas fa-map"></i> jakarta, indonesia - 100020 </a>     
        </div>

        <div class="box">
            <h3>Media Sosial</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>   
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>  
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>  
        </div>
              
    </div>
    
    <div class="credit"> created by <span> Kelompok 11 </span> | Ghaza Gamma Rafi ! </div>

</section>





<!-- Swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Custom js file link -->
<script src="js/script.js"></script>
</body>
</html>