<?php
include"connect.php";

$last_name = $_GET['last_name'];
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$date = $_GET['date'];
$gender = $_GET['gender'];

$insert = mysqli_query($connect, "INSERT INTO inscription
 (last_name, name, email, password, date, gender) VALUES ('$last_name', '$name', '$email', '$password', '$date', '$gender')");

?>