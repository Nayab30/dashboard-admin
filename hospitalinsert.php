<?php
// error_reporting(0);

include ('connection.php');


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $phn =$_POST['phn'];
    $email =$_POST['email'];
    $address = $_POST['address'];
    $password =$_POST['pw'];
    $status = $_POST['status'];



$qry = "INSERT INTO hospital_tbl (h_name, h_phone, h_email,h_address, h_password, h_status) VALUES ('$name','$phn','$email','$address','$password','$status')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    header('location:hospital.php');
    // echo"inserted";
}

}





mysqli_close($conn);


?>