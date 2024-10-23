<?php
include('connect.php');

$email = $_GET['email'];
$password = $_GET['password'];

$select = mysqli_query($connect, "SELECT * FROM inscription");
while($info = mysqli_fetch_array($select)){
    if($email . $password == $info['email'] . $info['password']){
        header('Location: profile.php');
        exit();
    }
    else{
        header('Location: indexerror.php');
    }
}
?>