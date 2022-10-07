<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  

  <div class="setup">
    
    <?php
  $conn = new mysqli("localhost", "root", "");
  if ($conn->connect_error) {
  die("connection failed: " . $conn->connect_error);
  }
  
  $sequel = "CREATE DATABASE IF NOT EXISTS hge_database";
  
  if ($conn->query ($sequel) === TRUE) {
    echo "<p>Database created successfully</p>";
  }else {
    die("<p>Error Creating Database: </p>" . $conn-> error);
    }
  
  $conn = new mysqli ("localhost", "root", "", "hge_database");
  if ($conn->connect_error){
    die ("<p>Could not select database: </p>" . $conn->connection_error);
  }else {
    echo "<p>Database 'hge_database' successfully selected</p>";
    }
  
  $sequel = 
    "CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT,
    Username varchar(60) NOT NULL,
    password varchar(32) NOT NULL,
   primary key (id)
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=Latin1";
    
  if ($conn-> query($sequel)=== TRUE) {
    echo "<p>users table successfully created";
  }else{
    die("<p>Could not create table users: </p>" . $conn->error);
    }

    $sequel =
    "CREATE TABLE IF NOT EXISTS user_login (
    id int(20) NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(100) NOT NULL,
    Primary Key (id) 
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1";
  
  if ($conn->query($sequel) === TRUE) {
    echo "<p>User login table successfully created</p>";
  }else {
    die("<p>Could not create table clients: </p>" . $conn->error);
  }
    
  $sequel =
    "CREATE TABLE IF NOT EXISTS contact (
    id int(11) NOT NULL AUTO_INCREMENT,
    first_name varchar(60) NOT NULL,
    last_name varchar(60) NOT NULL,
    Phone_no varchar(60) NOT NULL,
    email text NOT NULL,
  comments varchar(120) NOT NULL,
    password varchar(120) NOT NULL,
    Primary Key (id) 
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1";
  
  if ($conn->query($sequel) === TRUE) {
    echo "<p>Contact table successfully created</p>";
  }else {
    die("<p>Could not create table clients: </p>" . $conn->error);
  }
  
  $sequel =
    "CREATE TABLE IF NOT EXISTS visitor_counter (
    id int(11) NOT NULL AUTO_INCREMENT,
    page varchar(100) NOT NULL,
    counts int(11) NOT NULL,
    Primary key (id)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";
  
  if ($conn->query($sequel) === TRUE) {
    echo "<p>Counter table successfully created</p>";
  }else {
    die("<p>Could not create table counter: </p>" . $conn->error);
    }

    $sequel =
    "CREATE TABLE IF NOT EXISTS search (
    id int(20) NOT NULL,
    images blob NOT NULL,
    Rating int(225) NOT NULL,
    Price int(225) NOT NULL,
    email text NOT NULL,
    status varchar(225) NOT NULL,
    name varchar(40) NOT NULL,
    Primary Key (id) 
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1";
  
  if ($conn->query($sequel) === TRUE) {
    echo "<p>Search table successfully created</p>";
  }else {
    die("<p>Could not create table clients: </p>" . $conn->error);
  }
  
  echo "<p><a href=''login.php'>Proceed to login</a></p>";
  echo "<p><a href='register.php'>Proceed to create account</a></p>";
  
  $conn->close();
  ?>

</div>
</body>
</html>