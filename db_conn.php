<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$pe=md5($password);
$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}