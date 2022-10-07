
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$first_name = $last_name = $phone_no = $email = $comments = "";
$first_name_err = $last_name_err = $phone_no_err = $email_err = $comments_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    // Validate first name
    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter a first_name";
    } elseif(!preg_match('/^[a-zA-Z0-9-@_]+$/', trim($_POST["first_name"]))){
        $first_name_err = "first_name can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT contact_id FROM contact WHERE first_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_first_name);
            
            // Set parameters
            $param_first_name = trim($_POST["first_name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 9){
                    $first_name_err = "This first_name is already taken.";
                } else{
                    $first_name = trim($_POST["first_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }


        
    }

    // Validate last name
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter a last_name.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["last_name"]))){
        $last_name_err = "last_name can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT contact_id FROM contact WHERE last_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $last_name);
            
            // Set parameters
            $param_last_name = trim($_POST["last_name"]);
            
     // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 9){
                    $last_name_err = "last_name is already taken.";
                } else{
                    $last_name = trim($_POST["last_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


     // Validate phone number
     if(empty(trim($_POST["phone_no"]))){
        $phone_no_err = "Please enter a phone_no.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["phone_no"]))){
        $phone_no_err = "phone_no can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT contact_id FROM contact WHERE phone_no = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $phone_no);
            
            // Set parameters
            $param_phone_no = trim($_POST["phone_no"]);
            
      // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 9){
                    $phone_no_err = "phone_no is already taken.";
                } else{
                    $phone_no = trim($_POST["phone_no"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

     // Validate email
     if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } elseif(!preg_match('/^[a-zA-Z0-9-@_.]+$/', trim($_POST["email"]))){
        $email_err = "email can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT contact_id FROM contact WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }


        
    }


     // Validate comments
     if(empty(trim($_POST["comments"]))){
        $comments_err = "Please enter a comments.";
    } elseif(!preg_match('/^[a-zA-Z0-9_ .]+$/', trim($_POST["comments"]))){
        $comments_err = "comments can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT contact_id FROM contact WHERE comments = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $comments);
            
            // Set parameters
            $param_comments = trim($_POST["comments"]);
            
     // Attempt to execute the prepared statement
     if(mysqli_stmt_execute($stmt)){
        
        /* store result */
        mysqli_stmt_store_result($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 9){
            $comments_err = "comments is already taken.";
        } else{
            $comments = trim($_POST["comments"]);
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
  
    
    // Check input errors before inserting in database
    if(empty($first_name_err)  && empty($last_name_err)  && empty($phone_no_err)   && empty($email_err) && empty($comments_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO contact (first_name, last_name, phone_no, email, comments) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_first_name, $param_last_name, $param_phone_no,$param_email, $param_comments);
            
            // Set parameters
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_phone_no = $phone_no;
            $param_email = $email;
            $param_comments = $comments;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: welcome.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <div class="container6">
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
        <h1>Contact us</h1>
        <div class="form">
           
            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div>
                    <label for="first_name">First Name</label><br/>
                    <input id="first_name" type="text" size="50" maxlength="10" name="first_name" required class="form-control <?php echo (!empty($first_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $first_name; ?>"/><br/>
                    <span class="invalid-feedback"><?php echo $first_name_err; ?></span>

                </div>


                <div>
                    <label for="last_name">Last Name</label><br/>
                    <input id="last_name" type="text" size="50" maxlength="10" name="last_name" required  class="form-control <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $last_name; ?>"/><br/>
                    <span class="invalid-feedback"><?php echo $last_name_err; ?></span>


                </div>


                <div>
                    <label for="phone_no">Phone Number</label><br/>
                    <input id="phone_no" type="text" size="50" maxlength="13" name="phone_no" placeholder=" +233" required  class="form-control <?php echo (!empty($phone_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone_no; ?>"/><br/>
                    <span class="invalid-feedback"><?php echo $phone_no_err; ?></span>


                </div>

                <div> <label for="email">Email:</label><br/>
                    <input id="email" type="email" name="email" placeholder="example@gmail.com" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"/><br/>
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>


                </div>

                <div>
                    <label for="comments">Please enter your comment</label><br>
                    <textarea  name="comments" id="comments" rows="5" cols="20" class="form-control <?php echo (!empty($comments_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $comments; ?>"> </textarea>
                    <span class="invalid-feedback"><?php echo $comments_err; ?></span>
                </div>


                <div class="g-recaptcha" data-sitekey="6Lft_TYiAAAAAHU89gbDhwfBx3oA1PE1-lkqkFs6"></div>



                <?php
if(count($_POST)>0)
{

    if(empty($_POST['g-recaptcha-response']))
    {
        echo "<h4>Please Solve ReCaptcha</h4>";
    }
    
}
?>

<div>
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
</script>
<p><a href="privacy_page.html" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Privacy Policy</a></p>
</div>




                <div>

                    <input type="submit" class="submit" onclick="welcome.php" />
                </div>
               
            </form>





            <div class="card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.184132449766!2d-73.9855426!3d40.7579747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sgh!4v1662243679193!5m2!1sen!2sgh"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <h2> Your at the Contact Page</h2>
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
