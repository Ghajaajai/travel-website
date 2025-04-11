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
    <title>Package</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
     
    <!-- font awesome cd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 

    <!-- Custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>


</head>
<body>

    <!-- Header -->

    <?php include('includes/header.php');?>

   <!-- heading -->

   <div class="heading" style="background:url(images/candi.jpeg)">
    <h1> see the offer </h1>
   </div>
 

   <div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3> Pilih Destinasi mu!</h3>

					
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4><?php echo htmlentities($result->PackageName);?></h4>
					<p><b>Package Location :</b><?php echo htmlentities($result->PackageType);?></p>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Layanan Tambahan : </b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Rp. <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="book_form.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="btn">Book Now</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>




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