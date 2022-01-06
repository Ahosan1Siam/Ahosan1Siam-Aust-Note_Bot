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
                
            <div class="container py-5 col-lg-4 col-md-6">
                <div class="wrapper">
                    <?php 
                    
                    $q="select * from userlogin2 where varsity_id='$_SESSION[userid]'";
                    
                    $result2 = mysqli_query($connection, $q);
                    $row= mysqli_fetch_assoc($result2);
                    ?>
                    
                    <h2 class="m-auto text-center text-white py-3">ADD Profile Image</h2>
                    
                    <div class="text-white mt-3" style="text-align:center"><h4><b>HEY,</b></h4>
                    <h4 class='pb-3'>
                        <?php echo"<span style='color:#40bf5e'>".$row['name']."</span>"; ?>
                    </h4>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="file" class="form-control my-5" required>
                    <input class="btn btn-primary btn-block btn-md" type="submit" name="edit" value="Edit">
                </form>
            </div>
            
            <?php
		      if(isset($_POST['edit']))
		      {
                move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
                  
                  $image=$_FILES['file']['name'];
                  
                  $sql1= "UPDATE `userlogin2` SET `image`='$image' WHERE varsity_id='".$_SESSION['userid']."';";
                  if(mysqli_query($connection,$sql1))
			     {
					echo"<script> alert('Edit Successfull');window.location='userprofile.php' </script>";
			     }
              }
            ?>
            
<?php include "includes/footer.php"; ?>


