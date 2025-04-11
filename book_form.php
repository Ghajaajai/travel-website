<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
     
    <!-- font awesome cd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 

    <!-- Custom css file link -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/style.css">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
</head>
<body>

    <!-- Header -->

    <?php include('includes/header.php');?>
   <!-- heading -->

   <div class="heading" style="background:url(images/air.jpeg)">
    <h1>  book now </h1>
   </div>

<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Total</p>
					<h5>Rp. <?php echo htmlentities($result->PackagePrice);?></h5>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
	
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
					
							
					
				</ul>
			</div>
			
		</div>
		</form>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->

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