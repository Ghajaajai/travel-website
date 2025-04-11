<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mnumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Note: Using md5 for hashing is not secure. Consider using more secure methods like bcrypt.

    $sql = "INSERT INTO tblusers(FullName, MobileNumber, EmailId, Password) VALUES(:fname, :mnumber, :email, :password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    
    if ($query->execute()) {
        $_SESSION['msg'] = "You are successfully registered. Now you can login.";
        header('location: home.php');
        exit();
    } else {
        $_SESSION['msg'] = "Something went wrong. Please try again.";
        header('location: home.php');
        exit();
    }
}
?>

<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Create Account</h2>
            <form name="signup" method="post">
                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="fname" required>

                <label for="mobilenumber">Mobile Number:</label>
                <input type="text" id="mobilenumber" name="mobilenumber" maxlength="10" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" onBlur="checkAvailability()" required>
                <span id="user-availability-status"></span> 

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="submit">CREATE ACCOUNT</button>
            </form>
            <p>By creating an account you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
