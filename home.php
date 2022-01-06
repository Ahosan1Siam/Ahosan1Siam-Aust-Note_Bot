<?php 

session_start();

?>


<?php 
if(isset($_SESSION['userid'])){
    
include "includes/db.php";
    
///<!--head-->
include "includes/header.php";
  
   
//<!--Navigation-->
include "includes/navigation.php";
            
//<!--Showcase-->
include "includes/showcase.php";
            
//<!--routine-->
include "includes/routine.php";            
            
            
//<!--Contact umber of CRs-->
 include "includes/contactcr.php";          
            
            
//<!--Note-->
include "includes/notes.php";   
            
            
//<!--About-->
include "includes/about.php";
include "includes/contact.php";
            

//<!--footer-->            
include "includes/footer.php"; 

}
else{
    include "includes/db.php";
//<!--header-->
include "includes/header.php";
  
   
//<!--Navigation-->
include "includes/navigation.php";
            
//<!--Showcase-->
include "includes/showcase.php";
    
include "includes/about.php";
    
?>
               <section id="contact" class="bg-light py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto text-center">
                            <h3>For Any Inquary</h3>
                            <p class="lead">If you want to send us notes or want to work with us, then send us a message</p>
                            <form method="post">

                               
                                <div class="form-group">
                                    <div class="input-group input-group-lg"> 
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        <input type="digit" name="id" class="form-control" placeholder="Id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        <textarea class="form-control" name="message" placeholder="Message" rows="5" required></textarea>
                                    </div>
                                </div>
                                <input class="btn btn-primary btn-block btn-lg" type="submit" name="send_btn" value="Submit">
                            </form>
                             <?php 
                              
                              if(isset($_POST['send_btn']))
                              {                        
                              $name= $row['name'];
                              $id = $row['varsity_id'];
                              $message = $_POST['message'];
                            
                              $regg = "insert into contactform(name,id,message) values('$name','$id','$message')";
                                               
                              $run= mysqli_query($connection, $regg);
                              
                                if($run == 1){
                                    echo"<script> alert('Message Sent');</script>";
                                }
                                else{
                                    echo"<script> alert('Message not Sent!!');</script>";
                                }               
                              
                              }
                            ?>
                        </div>
                    </div>
                </div>
            </section> 

            
<?php
//<!--footer-->            
include "includes/footer.php";
}
?>
            