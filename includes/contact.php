            <section id="contact" class="bg-light py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto text-center">
                            <h3>For Any Inquary</h3>
                            <p class="lead">If you want to send us notes or want to work with us, then send us a message</p>
                            <form method="post">
                               <?php 
                    
                                $sq="select * from userlogin2 where varsity_id='$_SESSION[userid]'";
                    
                                $result = mysqli_query($connection, $sq);
                                $row= mysqli_fetch_assoc($result);
                    
                                ?>
                               
                                <div class="form-group">
                                    <div class="input-group input-group-lg"> 
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $row['name']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        <input type="digit" name="id" class="form-control" placeholder="Id" value="<?php echo $row['varsity_id']?>">
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