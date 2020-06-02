<?php
$servername = "db2020new.mariadb.database.azure.com";
$username = "udhay@db2020new";
$password = "Udh@y1907";

// Create connection

$connect = mysqli_connect($servername,$username,$password,"students");

// Check connection

if(!$connect){
	die("Connection failed: " . mysqli_connect_error());
}

echo "Connected";
?>