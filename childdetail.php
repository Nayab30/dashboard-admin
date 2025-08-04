<div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0">
                <h5 class="mb-3" ><strong>Child Details</strong></h5>
                
                
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--child  Listing-->
                        
                        <div class="table-responsive child-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="childList">
                                <thead>
                                    <tr>
                                    
                                        <th>Id</th>
                                                <th scope="row">Name</th>
                                                <th>Father name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        include('connection.php');
                        $qry ="SELECT * FROM child_tbl ";

                        $res = mysqli_query($conn,$qry);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                            $id =$row['child_id'];
                            $name=$row['c_name'];
                            $fathername =$row['c_fathername'];
                            $age =$row['c_age'];
                            $gender = $row['c_gender'];
                          
                                            echo"<tr>
                                                <td class='align-middle'>".$id."</td>
                                                <td scope='row' class='align-middle'>".$name."</td>
                                                <td >".$fathername."</td>
                                                <td class='align-middle'>".$age."</td>
                                                <td class='align-middle'>".$gender."</td>
                                            <td class='text-center'><button class='btn btn-success' data-toggle='modal' data-target='#idUpdate'><a href='update.php?updateid=".$id."' ><i class='fa fa-pencil'></i></a></button>
                                            <button class='btn btn-danger' data-toggle='modal' data-target='#idDelete><a href='delete.php?deleteid=".$id."'><i class='fas fa-trash'></i></a></button>
                                        </td>
                                    </tr>";
                    }
                    }else{

                        echo"<td colspan='8' class='text-center'>Data not found</td>";
                    }

                                    ?>
                            </table>
                        </div>
                    </div>
                    <!--/child Listing-->
                   

                    <!--child Update Modal-->
        <div class="modal fade" id="idUpdate" tabindex="-1" role="dialog"    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">id#1 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped text-dark table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th scope="row">Name</th>
                                                <th>Father name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include('connection.php');
                        $qry ="SELECT * FROM child_tbl ";

                        $res = mysqli_query($conn,$qry);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                            $id =$row['child_id'];
                            $name=$row['c_name'];
                            $fathername =$row['c_fathername'];
                            $age =$row['c_age'];
                            $gender = $row['c_gender'];
                          
                                            echo"<tr>
                                                <td class='align-middle'>".$id."</td>
                                                <td scope='row' class='align-middle'>".$name."</td>
                                                <td >".$fathername."</td>
                                                <td class='align-middle'>".$age."</td>
                                                <td class='align-middle'>".$gender."</td>
                                                <td style='width: 120px;' class='align-middle'>
                                                    <button class='btn btn-success mr-1'><i class='fa fa-pencil'></i></button>
                                                </td>
                                            </tr>
                                            ";}
                                            }else{

                                            echo"<td colspan='8' class='text-center'>Data not found</td>";
                                            }
                    
                                            ?>
                                            
                                        </tbody>
                                    </table>

                                 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--child Update Modal-->
                </div>

                <!--Footer-->
                <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2025 designed by <a class="text-theme" href="#">VAXHEALTH</a></span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div>
                <!--Footer-->

            </div>