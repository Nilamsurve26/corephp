<?php

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

$database="curd";

// Creating a connection
$con= new mysqli($servername,
			$username, $password,$database);


if (!$con) {
   die(mysqli_error($con));

}
?>
