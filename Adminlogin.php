<?php

include("connection.php");
session_start();

error_reporting(0);
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
    <link rel="stylesheet" href="assets/css/adminlogin.css">
    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
   
    
    <title>Admin Login</title>
    
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

    <div class="container-fluid" >

  <div class="container form">
    <form action="" method="POST" autocomplete="off">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
  </div>
  
  <button type="submit" class="btn a_loginbtn" name="btnlogin">login</button>
</form>
<?php
if(isset($_POST['btnlogin']))
{
    $email = $_POST['email'];
    $password =$_POST['pswd'];

    $qry = "SELECT * FROM admin_tbl WHERE email = '$email' AND password = '$password'";

    $res = mysqli_query($conn,$qry);

     $row = mysqli_fetch_array($res);
    if($email == $row['email'] && $password == $row['password'])
    {
     
      $_SESSION['admin_session'] = $row['name'];
     header("Location:dashboard.php"); 
      echo"<script>
      alert('Login succussful');
      
      </script>";
    }else{
        echo"<script>
          alert('Incorrect Email or Password');
      
      </script>";
    }
}

?>



  </div>

       

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
