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
          <div class="container">
            <div><h1 class="text-center m-4 " style="color:var(--text-color2);">Update Hospital details </h1></div>
         <?php
            
$qry="SELECT * FROM hospital_tbl  WHERE hospital_id = $_GET[id] ";
$res= mysqli_query($conn,$qry);

$row = mysqli_fetch_assoc($res);

       ?>
<form action=""  method ="POST" class="mx-5 ">
  <div class="mb-3 mt-3">
    <label for="" class="form-label">Hospital Name:</label>
    <input type="text" class="form-control bg-light"  value="<?php echo $row['h_name']   ?>" name="name">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone_no:</label>
    <input type="text" class="form-control"  value="<?php echo $row['h_phone']   ?>" name="phn">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Email:</label>
    <input type="email" class="form-control" value="<?php echo $row['h_email']   ?>"  name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="" class="form-label">Address:</label>
    <input type="text" class="form-control bg-light" value="<?php echo $row['h_address']   ?>"  name="address">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input type="text" class="form-control" value="<?php echo $row['h_password']   ?>" name="pw">
  </div>
  
  
  
  <button name="updatebtn" type="submit" class="btn "style="background-color:var(--bg-base-color);color:var(--text-color);">Update</button>
  
  <!-- <input type="submit" name="btn" class="btn btn-primary" value="Submit" > -->
</form>
<?php
// error_reporting(0);

include ('connection.php');


if(isset($_POST['updatebtn'])){
    $name =$_POST['name'];
    $phn =$_POST['phn'];
    $email =$_POST['email'];
    $address = $_POST['address'];
    $password =$_POST['pw'];
   



$qry = "UPDATE hospital_tbl SET h_name = '$name', h_phone ='$phn', h_email='$email',h_address='$address',h_password='$password' WHERE hospital_id = $_GET[id]";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');
    echo"<script>
    alert('Hospital updated succussfully');
    window.location.href='hospital.php';
    
    </script>";
}

}





mysqli_close($conn);


?>

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
