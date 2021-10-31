<?php

$servername = "localhost";
$username = "root";
$password = "";
$dataase = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dataase);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else { 
  echo '<script>alert("Connected successfully")</script>';
}
?>
<!--
  CREATE TABLE corpers (
    id int(11)AUTO_INCREMENT PRIMARY KEY not null,
   username varchar(200), 
    email varchar(200) , 
    phone varchar(200)  not null, 
    state varchar(200)  not null, 
    birthday varchar(200) not null, 
    institution varchar(200) not null, 
    course varchar(200)  not null, 
    identity varchar(200)  not null, 
    statecode varchar(200)  not null,
    ppa_lga varchar(200)  not null,
    ppa varchar(200)  not null, 
    batch varchar(200)  not null, 
    month varchar(200)  not null, 
    year varchar(200)  not null, 
    gender varchar(200)  not null, 
     post varchar(200)  not null , 
    lodge varchar(200)  not null, 
    picture varchar(200)  not null, 
    discription varchar(200)  not null, 
    password varchar(200)  not null);
-->