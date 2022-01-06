<?php

session_start();

?>


<?php include "includes/db.php"; ?>


<?php


$varsity_id = $_POST['varid'];
$password = $_POST['pass'];

$s = "select * from userlogin2 where varsity_id='$varsity_id' && password= '$password'";

$result = mysqli_query($connection, $s);
$row=mysqli_fetch_assoc($result);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['userid'] = $varsity_id;
    $_SESSION['pic'] = $row['image'];
    $_SESSION['name'] = $row['name'];
    
    header('location:home.php');
}else{
    header('location:login.php');
}
?>

