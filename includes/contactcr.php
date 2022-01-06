<section id="contact-number" class="my-5 py-5 text-center bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="info-header mb-5">
                                <h2 class="text-success pb-3">
                                    Looking for CR's Number ?
                                </h2>
                                <p class="lead pb-3">
                                    Here you will find all the depertment's CR & SR'S name, contact number.
                                </p>
                            </div>
                            
                            
                            <!--Acordion-->

                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                       <h5 class="mb-0">
                                           <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                                             
                                             <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF CSE</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>                                   
                                    <div id="collapse1" class="collapse">
                                        <div class="card-body">
                                           
                                           
                                           <?php 
                                            $query = "SELECT * FROM crnumber_cse";
                  
                                            $result = $connection->query($query);

                                                if ($result->num_rows > 0) {
                                                echo "<table class='table table-bordered'><thead class='bg-primary'><tr><th scope='col'>Name</th><th scope='col'>Phone Number</th><th scope='col'>Section</th><th scope='col'>Title</th></tr></thead>";
                                                    
                                                // output data of each row
                                                    
                                                while($row = $result->fetch_assoc()) {
                                                 echo "<tr class='table-success'><td>" .$row["Name"]. "</td><td>" . $row["phone_no"]."</td><td>".$row["section"]."</td><td>" .$row["title"]. "</td></tr>";
                                                    }
                                                        echo "</table>";
                                                    
                                                    } else {
                                                    
                                                        echo "0 results";
                                                    }
                                        
                    
                                            ?>
                                           
                                           
                                           
                                           <!--
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>-->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                       <h5 class="mb-0">
                                           <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                                               <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF EEE</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>                                 
                                    <div id="collapse2" class="collapse">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                       <h5 class="mb-0">
                                           <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                                               <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF MPE</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>
                                    <div id="collapse3" class="collapse">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                       <h5 class="mb-0">
                                           <div href="#collapse4" data-toggle="collapse" data-parent="#accordion">
                                               <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF CE</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>                                   
                                    <div id="collapse4" class="collapse">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                       <h5 class="mb-0">
                                           <div href="#collapse5" data-toggle="collapse" data-parent="#accordion">
                                               <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF TE</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>
                                    <div id="collapse5" class="collapse">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="heading6">
                                       <h5 class="mb-0">
                                           <div href="#collapse6" data-toggle="collapse" data-parent="#accordion">
                                               <a href="#contact-number"><i class="fas fa-caret-square-down"><span style="color: #40bf5e"> DEPT OF ARCH</span></i></a>
                                           </div>
                                       </h5>  
                                    </div>
                                    <div id="collapse6" class="collapse">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                              <thead class="bg-primary">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Section</th>
                                                  <th scope="col">Title</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr class="table-success">
                                                  <th scope="row">1</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">2</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                  <th scope="row">3</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">4</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">6</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">7</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                                <tr class="table-danger">
                                                <th scope="row">8</th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>