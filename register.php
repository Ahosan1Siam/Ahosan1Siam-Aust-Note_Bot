<?php

session_start();
//header('location:login.php');

?>

<?php include "includes/db.php"; ?>

<?php

$name = $_POST['user'];
$varsity_id = $_POST['varid'];
$password = $_POST['pass'];
$dept = $_POST['dept'];

$s = "select * from userlogin2 where name = '$name' && varsity_id='$varsity_id'";

$result = mysqli_query($connection, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    
    echo"<script> alert('Registration Failed! This Varsity ID  already registared!');window.location='login.php' </script>";
    
}else{
    
    $reg = "insert into userlogin2(name,varsity_id,dept,password,image) values('$name','$varsity_id','$dept','$password','profile.png')";
    mysqli_query($connection, $reg);
    echo"<script> alert('Registration Successfull');window.location='login.php' </script>";
}
    
?>

