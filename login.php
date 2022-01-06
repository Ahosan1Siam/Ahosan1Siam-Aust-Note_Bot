<?php include "includes/db.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    
    <!--Main CSS-->
    <link href="stylelogin.css" rel="stylesheet" >
    
    <title>AUST NoteBot | log in</title>
    
  </head>
  
   <body class="bg-dark">

<header class="header-area">
   <div class="primary-overlay text-white">
              <div class="container">
                <div class="row text-center">
                    <div class="text col-lg-6 m-auto text-center">
                        <h1 class="display-4 mt-5 pt-5">
                            Welcome To <span style="color:#40bf5e"><strong>AUST</strong></span> NoteBot Service.
                        </h1>
                        <p class="lead">
                            (চোথার রাজ্য)
                        </p>
                        <p class="lead">
                            Our motive to bring notes for all the department's students of AUST.
                        </p>
                    </div>
                </div>
              </div>    
             </div>
</header>

<div class="main-body">
   
    <div class="container-fluid login">
       
        <div class="card w-75 m-auto">
    <h5 class="card-header w-100 bg-success text-white text-center py-4 itemname">
       <strong>SIGN IN</strong>
    </h5>


    <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="py-5" style="color: #757575;" action="validation.php" method="post">

      <!-- ID -->
      <div class="md-form mb-3">
       <label class="ml-2 itemname" for="materialLoginFormEmail">Varsity ID</label>
        <input type="text"  name="varid" id="materialLoginFormEmail" class="form-control" placeholder="varsity Id" required>
      </div>

      <!-- Password -->
      <div class="md-form mb-5">
       <label class="ml-2 itemname" for="materialLoginFormPassword">Password</label>
        <input type="password"  name="pass" id="materialLoginFormPassword" class="form-control" placeholder="password" required>
        
      </div>


      <button class="btn btn-success btn-rounded btn-block my-4 waves-effect z-depth-0 itemname" type="submit" name="signin">Sign in</button>

      <!-- Register -->
      <div class="col-md-12">
        <p class="regis font-small white-text d-flex justify-content-end loginpage itemname">Not a member?
        <button type="button" class="btn btn-outline-primary btn-sm my-auto text-center ml-2 py-0 regis itemname">Signup</button>
        </p>
      </div>


      </form>

     </div>

    </div>
  </div>
  
  
  
  <div class="container-fluid registration">
  
   <div class="card w-75 m-auto">

    <h5 class="card-header text-light font-weight-bold bg-primary text-center py-4 w-100 itemname">
        <strong>Sign up</strong>
    </h5>

    <div class="card-body px-lg-5 pt-4">

        <!-- Form -->
        <form class="px-3" style="color: #757575;" action="register.php" method="post">

            <!-- First name -->
            <div class="md-form mb-1">
                <label class="ml-2 itemname" for="materialRegisterFormFirstName">Name</label>
                <input type="text" name="user" id="materialRegisterFormFirstName" class="form-control" required>
            </div>

            <!-- ID -->
            <div class="md-form mb-2">
                <label class="ml-2 itemname" for="materialRegisterFormPhone">Varsity ID</label>
                <input type="digit" name="varid" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required>
            </div>
            
            <!--Depertment-->
            <div class="md-form mb-3">
                <label class="ml-2 itemname" data-error="wrong" data-success="right" for="dept-name">Your Depertment</label>
                    <select id="dept-name" class="form-control validate white-text" name="dept" required>
                        <option selected>Choose...</option>
                        <option>CSE</option>
                        <option>EEE</option>
                        <option>MPE</option>
                        <option>CE</option>
                        <option>TE</option>
                        <option>ARCH</option>
                    </select>
            </div>

            <!-- Password -->
            <div class="md-form mb-1">
               <label class="ml-2 itemname" for="materialRegisterFormPassword">Password</label>
                <input type="password" name="pass" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required>
                
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4 itemname">
                    At least 8 characters and 1 digit
                </small>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-primary btn-rounded btn-block my-4 waves-effect z-depth-0 signup itemname" type="submit" name="submit">Sign UP</button>
            
            <div class="col-md-12 p-0">
            <p class="font-small white-text d-flex justify-content-end loginpage itemname">Go to Login Page
            <button class="btn btn-outline-success btn-sm btn-rounded waves-effect z-depth-0 ml-2 loginpage py-0 itemname">SignIn</button>
            </p>
            <hr class="py-0">
            </div>

        </form>
        <!-- Form -->

    </div>

</div>
   
 </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/mainfile.js"></script>
    <script src="js/navbar-fixed.js"></script>
    
    <script src="https://kit.fontawesome.com/f684675309.js"></script>
</body>
</html>