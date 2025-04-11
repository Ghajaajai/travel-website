<?php if($_SESSION['login'])
    {?>
    <section class="header">
        <a href="home.php" class="logo"><i class="fa-solid fa-plane-departure" style="color: #ffffff;"></i>travelnow</a>

        <nav class="navbar">
           <a href="home.php">Home</a>
           <a href="book.php">Booking</a>
           <a href="package.php">Package</a>
           <a href="owner.php">Owner</a>
           <a href="" class="sig"><?php echo htmlentities($_SESSION['login']);?></a>
           <a href="logout.php" > Logout</a>
           <a href="admin/index.php"><i class="fa-solid fa-lock fa-lg" style="color: #ffffff;"></i></a>
      
        <div id="menu-btn" class="fas fa-bar"></div>
        
    </section>
    <?php } else {?>
        <section class="header">
        <a href="home.php" class="logo"><i class="fa-solid fa-plane-departure" style="color: #ffffff;"></i>travelnow</a>

        <nav class="navbar">
           <a href="home.php">Home</a>
           <a href="book.php">Booking</a>
           <a href="package.php">Package</a>
           <a href="owner.php">Owner</a>
           <a href="includes/signup.php" >Daftar</a>
           <a href="includes/signin.php" >Login</a>
           <a href="admin/index.php"><i class="fa-solid fa-lock fa-lg" style="color: #ffffff;"></i></a>
        <div id="menu-btn" class="fas fa-bar"></div>
        
    </section>
    <?php }?>