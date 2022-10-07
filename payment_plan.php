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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>paymentt</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body >

<div class='paycont'>
<nav class="rnav" id="rtnav">
            <a href="index.php" class="logo">HOME GYM EQ</a>
            <a href="index.php" class="">Home</a>
            <a href="info.html" class="">Infomation</a>
            <a href="register.php" class="">Wanted</a>
            <a href="workshop.html" class="">Workshop</a>
            <a href="gallery.html" class="">Gallery</a>
            <a href="contact.php" class="">Contact</a>
            <a href="featured.html" class="">Featured</a>

            <input type="text" class="search" name="search" placeholder="Search..">

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
             </a>
        </nav>

    <div class='payform'>


       <div class="Payment">
    
       <h1 class='fixed' >Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, <br> Proceed to checkout</h1>
  
       <form class="form sform">
        <section class="layout sform">
            <h2>Choose a plan:</h2>

            <input type="radio" name="radio1" id="basic" value="basic" checked><label class="basic-label four select" for="basic">Basic</label>
            <input type="radio" name="radio1" id="premium" value="premium"><label class="premium-label four select" for="premium">Premium</label>
        </section>
        <section class="layout2 sform">
            <h2>Select a payment plan:</h2>
            <input type="radio" name="radio2" id="monthly" value="monthly" checked><label class="monthly-label four select" for="monthly">Monthly</label>
            <input type="radio" name="radio2" id="yearly" value="yearly"><label class="yearly-label four select" for="yearly">Yearly</label>
        </section>
        <section class="layout3 sform">
            <h2>Select a payment type:</h2>
            <input type="radio" name="radio3" id="credit" value="credit"><label class="credit-label four select" for="credit">Credit Card</label>
            <input type="radio" name="radio3" id="debit" value="debit"><label class="debit-label four select" for="debit">Debit Card</label>
            <input type="radio" name="radio3" id="paypal" value="paypal" checked><label class="paypal-label four select" for="paypal">Paypal</label>
        </section>
        <button class="submit" type='button' onclick="window.location.href='welcome.php';" > submit</button>
        </form>

   
       </div>
    </div>

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
<script>
    function myFunction() {
        var x = document.getElementById("rtnav");
        if (x.className === "rnav") {
            x.className += " responsive";
        } else {
            x.className = "rnav";
        }
    }
</script>
</html>

