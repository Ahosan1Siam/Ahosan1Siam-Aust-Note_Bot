<?php 

session_start();

?>


<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    
    <!--Main CSS-->
    <link href="style.css" rel="stylesheet" >
    
    <title>User Profile</title>
    
  </head>
  
<body class="bg-dark">
   
    <?php include "includes/navigation.php"; ?>
            
            <div class="float-right p-5">
                <a href="editprofile.php"><button type="button" class="btn btn-info p-1 btn-sm text-white">Edit Profile</button></a>
            </div>
            
            <div class="container py-5 col-lg-4 col-md-6">
                <div class="wrapper">
                    <?php 
                    
                    $q="select * from userlogin2 where varsity_id='$_SESSION[userid]'";
                    
                    $result = mysqli_query($connection, $q);
                    
                    ?>
                    
                    <h2 class="m-auto text-center text-white py-3">MY PROFILE</h2>
                    
                    <?php 
                    
                        $row= mysqli_fetch_assoc($result);
                        echo "<div style='text-align: center'><img class='rounded-circle profile_img' height=100 width=100 src='images/".$_SESSION['pic']."'></div>";
                    ?>
                    
                    <div class="text-white mt-3" style="text-align:center"><b>Welcome,</b>
                    <h4 class='pb-3'>
                        <?php echo"<span style='color:#40bf5e'>".$row['name']."</span>"; ?>
                    </h4>
                    </div>
                    
                    <?php
                    
                    echo"<table class='table'>";
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-white'> NAME: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['name']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-white'> VARSITY ID: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['varsity_id']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-white'> DEPT: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['dept']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-white'> PASSWORD: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['password']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    echo"</table>";
                    
                    
                    ?>
                </div>
            </div>
<?php include "includes/footer.php"; ?>


