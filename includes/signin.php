<?php
session_start();
include 'config.php';

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Again, md5 is not secure.

    $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email AND Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_ASSOC);

    if ($results !== false) {
        $_SESSION['login'] = $_POST['email'];
        header("location: package-list.php");
        exit();
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Sign In</h2>
            <form method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="signin">SIGN IN</button>
            </form>
            <p>Forgot your password? <a href="forgot-password.php">Click here</a></p>
        </div>
    </div>
</body>
</html>
