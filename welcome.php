<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css" />
  
</head>
<body>
    <div class='paycont'>
        <nav>
        <a href="index.php" class="logo">HOME GYM EQ</a>
            <a href="index.php" class="">Home</a>
            <a href="info.html" class="">Infomation</a>
            <a href="register.php" class="">Wanted</a>
            <a href="workshop.html" class="">Workshop</a>
            <a href="gallery.php" class="">Gallery</a>
            <a href="contact.php" class="">Contact</a>
            <a href="featured.html" class="">Featured</a>

            <input type="text" class="search" name="search" placeholder="Search..">
        </nav>




   
     <h1 class="my-5">Thank you <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. <br> We will get back to you shortly.</h1>
     <footer>
            <div class="fnav">
                <a href="#" class="logo">GYM EQ</a>
                <a href="#" class="">Home</a>
                <a href="#" class="">Infomation</a>
                <a href="#" class="">Wanted</a>
                <a href="#" class="">Workshop</a>
                <a href="#" class="">Gallery</a>
                <a href="#" class="">Contact</a>
                <a href="#" class="">Featured</a>
            </div>

            <div>
                <h2> Your at the Payment page</h2>
            </div>
            <div class="social ">
                <i class="fa-brands fa-instagram "></i>
                <i class="fa-brands fa-twitter "></i>
                <i class="fa-brands fa-facebook "></i>
            </div>
        </footer>
    </div>
</body>
</html>