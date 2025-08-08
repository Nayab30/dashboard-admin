<?php
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
                        <a href="adminprofile.php">  
                        <img src="<?php echo $row['image'];  ?>" alt="" class="rounded-circle" />

                        </a>
                        <?php
                        include('connection.php');
                        $qry ="SELECT * FROM admin_tbl ";

                       $res = mysqli_query($conn,$qry);

                     $row = mysqli_fetch_array($res);
                      echo"<p><strong>".$row['name']."</strong></p>
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
           <!-- <h1> hospital</h1> -->
           <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0">
                <h5 class="mb-3" ><strong>Hospital Details</strong></h5>
                
                  <button class="btn  btn-lg m-4" style="background-color:var(--bg-base-color);"><a href="hospitaladd.php"  style="text-decoration:none;color:var(--text-color);">Add new</a></button>
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--hospital  Listing-->
                        
                        <div class="table-responsive child-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="childList">
                                <thead>
                                    <tr>
                                    
                                        <th> Hospital Id</th>
                                                <th scope="row">Hospital Name</th>
                                                <th>Phone no</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        include('connection.php');
                        $qry ="SELECT * FROM hospital_tbl ";

                        $res = mysqli_query($conn,$qry);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                            $id =$row['hospital_id'];
                            $name=$row['h_name'];
                            $phone =$row['h_phone'];
                            $email =$row['h_email'];
                            $address = $row['h_address'];
                            $password = $row['h_password'];
                            $status = $row['h_status'];                          
                                            echo"<tr>
                                                <td class='align-middle'>".$id."</td>
                                                <td scope='row' class='align-middle'>".$name."</td>
                                                <td >".$phone."</td>
                                                <td class='align-middle'>".$email."</td>
                                                <td class='align-middle'>".$address."</td>
                                                <td class='align-middle'>".$password."</td>
                                                <td class='align-middle'>".$status."</td>
                                                
                                            <td class='text-center'><button class='btn btn-success'><a href='hospitalupdate.php?updateid=".$id."' ><i class='fa fa-pencil'></i></a></button>
                                            <button class='btn btn-danger'><a href='delete.php?deleteid=".$id."'><i class='fas fa-trash'></i></a></button>
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
                    <!--/hospital Listing-->
                   

    
            
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
