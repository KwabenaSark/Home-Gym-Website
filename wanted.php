<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="container3">

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

        <div class="shed">
            <h1>Search our Online database</h1>
        </div>


        <form method='post' class="sbar"  >
            <input type="text" placeholder="Search.." name="search">
            <button name='submit'type="submit"><i class="fa fa-search"></i></button>
        </form>



        <div class="results">
        <?php

$dsn = 'mysql:dbname=hge_database;host=127.0.0.1';
$user = 'root';
$password = '';

$con = new PDO($dsn, $user, $password);

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br>
		<table>
			<tr>
				<th>Name</th>
				<th>Price</th>
                <th>Status</th>
                <th>Rating</th>
			</tr>
			<tr>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->Price;?></td>
                <td><?php echo $row->Status;?></td>
                <td><?php echo $row->Rating;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "<h1>Name Does not exist</h1>";
		}


}

?>
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
                <h2> Your at the Wanted Page</h2>
            </div>

            <div class="social">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </footer>
 </div>
  
</body>

</html>