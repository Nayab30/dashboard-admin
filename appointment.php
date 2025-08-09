<?php
include('connection.php');
session_start();
if(!isset($_SESSION['admin_session'])){
    header("Location:Adminlogin.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
   
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
   
    
    <title>Admin Panel</title>
    
</head>
 <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><img src="./assets/image/logo.png" alt="" class="logo" width="100"><span class="small">admin Panel</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row  justify-content-between ">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8  pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>

                        </span>
                       
                           <!-- <i class="ri-moon-fill" id="toggleDark"></i> -->


                        <!--Toggle sidebar-->
                    </div>

                    <div class="col-sm-4 col-8 dark-icon" style="margin-top: 15px;">
                           <i class="ri-sun-line" id="toggleDark"></i>
                    </div>
                
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                       
                        <?php
                        include('connection.php');
                        $qry ="SELECT * FROM admin_tbl ";

                       $res = mysqli_query($conn,$qry);

                     $row = mysqli_fetch_array($res);

                      echo"
                       <a href='adminprofile.php'>  
                        <img src='".$row['image']."' alt='' class='rounded-circle' />

                        </a>
                        <p><strong>".$row['name']."</strong></p>
                       <span class='text-primary small'><strong>".$row['email']."</strong></span>";

                        ?>
                       
                       
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                      <?php
                      include('navigation.php')

                      ?>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
           <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0" style="height:100vh;">
                <h2 class="mb-3" ><strong>List of Appointments</strong></h2>
                
                
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--child  Listing-->
                        
                        <div class="table-responsive child-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="childList">
                                <thead>
                                    <tr>
                                    
                                        <th class="text-center">Appointment Id</th>
                                                <th class="text-center" scope="row">Child Name</th>
                                                <th class="text-center">Hospital Name</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Time</th>
                                                <th class="text-center">Vaccine Name</th>
                                                <th class="text-center">Status</th>                                                                                               
                                                <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        include('connection.php');
                      $qry ="SELECT child_tbl.c_name as cname, 
              hospital_tbl.h_name as hname, 
              vaccines_tbl.v_name as vname, 
              appointment_tbl.* 
       FROM appointment_tbl 
       INNER JOIN child_tbl ON appointment_tbl.child_id = child_tbl.child_id 
       INNER JOIN hospital_tbl ON appointment_tbl.hospital_id = hospital_tbl.hospital_id 
       INNER JOIN vaccines_tbl ON appointment_tbl.v_id = vaccines_tbl.v_id";


                        $res = mysqli_query($conn,$qry);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                            $id =$row['appoint_id'];
                            $c_name=$row['cname'];
                            $h_name =$row['hname'];
                            $date=$row['date'];
                            $time = $row['time'];
                            $v_name = $row['vname'];
                            $status = $row['app_status'];

                          
                                            echo"<tr>
                                                <td class='align-middle text-center'>".$id."</td>
                                                <td scope='row' class='align-middle text-center'>".$c_name."</td>
                                                <td class='text-center' >".$h_name."</td>
                                                 <td class='text-center' >".$date."</td> <td class='text-center' >".$time."</td> <td class='text-center' >".$v_name."</td>
                                                  <td class='text-center' >".$status."</td>
                                             
                                            <td class='text-center'>";

                                              if($row['app_status']=="pending"){
                                                echo"<button class='btn btn-success mt-2'><a style='color:white;' href='appoint-accept.php?id=$row[v_id]' >Approved</i></a></button>";
                                            }else{
                                                  echo"<button class='btn btn-warning mt-2'><a style='color:black; padding-left:6px; padding-right:6px;'' href='appoint-reject.php?id=$row[v_id]' >Available</i></a></button>";
                                            }
                                         
                                         "
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
        <div class="modal fade" id="idUpdate" tabindex="-1" role="dialog"    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color:var(--text-color); background-color:var(--login-bg);">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                            <div class="modal-content" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                <div class="modal-header" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Child Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                    
                        <?php
                        include('connection.php');
                        $qry ="SELECT * FROM child_tbl ";

                        $res = mysqli_query($conn,$qry);

                        $row=mysqli_fetch_assoc($res);
                        
                        
                    ?>
                                            
            <div class="container">
                <ul class="list-group" style="color:var(--text-color); background-color:var(--bg-base-color);">
                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Id : <?php echo $row['child_id']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Name : <?php echo $row['c_name']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Father's Name : <?php echo $row['c_fathername']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Age : <?php echo $row['c_age']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Gender: <?php echo $row['c_gender']  ?></li>
                    
                </ul>
            </div>
                                            
                                        

                                 
                                </div>
                                <div class="modal-footer" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:var(--text-color); background-color:var(--bg-base-color);">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--child Update Modal-->
                </div>

                <!--Footer-->
                
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>


  <!-- -------------- Theme-------------------- -->

    <script>
    var icon = document.getElementById("toggleDark");

    icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        
        // Toggle icon classes (assuming you're using Remix Icons)
        if (document.body.classList.contains("dark-theme")) {
            icon.classList.remove("ri-sun-line");
            icon.classList.add("ri-moon-fill");
        } else {
            icon.classList.remove("ri-moon-fille");
            icon.classList.add("ri-sun-line");
        }
    }
</script>

    
  </body>
</html>
