<?php 

session_start();

?>


<?php include "includes/db.php"; ?>

<style>
    
    .user{
        margin-top: 120px;
    }

    .user img{
        margin-top: -110px !important;
        margin-bottom: 20px !important;
        height: 200px;
        }
    


</style>
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
        
            
            <div class="container py-5 col-lg-4 col-md-6">
                <div class="wrapper">
                    <?php 
                    
                    $q="select * from userlogin2 where varsity_id='$_SESSION[userid]'";
                    
                    $result = mysqli_query($connection, $q);
                    
                    ?>
                    
                    <?php 
                    
                        $row= mysqli_fetch_assoc($result);
                    ?>
                    
                    <div class="text-white mb-5" style="text-align:center"><h2><b>HEY,</b></h2>
                    <h4 class='pb-3'>
                        <?php echo"<span style='color:#40bf5e'>".$row['name']."</span>"; ?>
                    </h4>
                    </div>
                    
                    <div class="container">
                    <div class="card user">
                      <img src="<?php echo "images/".$_SESSION['pic']; ?>" class="rounded-circle d-fluid w-50 mb-5 m-auto">
                       <?php
                        echo"<table class='table'>";
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-black ml-5'> NAME: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['name']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-black ml-5'> VARSITY ID: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['varsity_id']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-black ml-5'> DEPT: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['dept']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    
                        echo"<tr>";
                            echo"<td>";
                                echo "<b class='text-black ml-5'> PASSWORD: </b>";
                            echo"</td>";
                    
                            echo"<td>";
                                echo"<span style='color:#40bf5e'>".$row['password']."</span>";
                            echo"</td>";
                        echo"</tr>";
                    echo"</table>";?>
                      <div class="float-right m-auto pb-4">
                        <a href="editprofile.php"><button type="button" class="btn btn-info .btn-md text-white">Edit Profile</button></a>
                        </div>
                    </div>
                    </div>
                    
                    <?php
                    
                    /*echo"<table class='table'>";
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
                    echo"</table>";*/
                    
                    
                    ?>
                </div>
            </div>
<?php include "includes/footer.php"; ?>


