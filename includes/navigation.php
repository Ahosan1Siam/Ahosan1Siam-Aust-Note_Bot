<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
            <div class="container">
              
               <a href="home.php" class="navbar-brand"><span style="color:#40bf5e">AUST</span><span style="color:#007bff">NoteB<i class="fas fa-smile-wink d-inline align-middle"></i>T</span></a>
               
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
               <span class="navbar-toggler-icon"></span>
               </button>
               
               <div class="collapse navbar-collapse"></div>
               <div class="collapse navbar-collapse" id="navbarNav">
                
                  
                  <?php 
                    
                  /*$query = "SELECT * FROM categories";
                  
                    $select_all_categories_query = mysqli_query($connection,$query);
                    
                    while($row= mysqli_fetch_assoc($select_all_categories_query)){
                       $cat_title = $row['cat_title'];
                        
                        echo "<li class='nav-item'><a class='nav-linkk' href='#'> {$cat_title}</a></li>";
                    }*/
                    
                  ?>
                  
                  <?php
                    
                    if(isset($_SESSION['userid'])){?>
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                        <a class="nav-linkk" href="home.php">Home</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-linkk"  href="#routine">Class Routine</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-linkk"  href="#contact-number">CR's Number</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-linkk"  href="#notes">Note Resources</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-linkk"  href="#about">About</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-linkk"  href="userprofile2.php">Profile</a>
                   </li>
                 </ul>
                       <div class="text-white float-right">
                          <?php
                     echo"<img class='rounded-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";
                     
                     echo" ".$_SESSION['name']; 
                     
                     ?> 
                 </div> 
                      <a class="nav-link"  href="logout.php"><button type="button" class="btn btn-outline-primary py-1 btn-sm my-auto text-center">Logout</button></a>       
                            
                     <?php   
                    }else{?>
                         <ul class="navbar-nav mr-auto">
                             <li class="nav-item active">
                        <a class="nav-linkk" href="home.php">Home</a>
                        <li class="nav-item">
                       <a class="nav-linkk"  href="#about">About</a>
                       <a class="nav-linkk ml-3"  href="#contact">Contact</a>
                   </li>
                        </ul>
                         
                       <a class="nav-link"  href="login.php"><button type="button" class="btn btn-outline-primary py-1 btn-sm my-auto text-center">LogIn</button></a>
                       
                       
                        <?php    
                    }
                    
                    
                    ?>     
                 
                 
                 
                </div>
            </div>
            </nav>