<?php
// error_reporting(0);

include ('connection.php');


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $status = $_POST['status'];



$qry = "INSERT INTO vaccines_tbl (v_name, v_status) VALUES ('$name','$status')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');
    echo"<script>
    alert('Vaccine add succussfully');
    window.location.href='vaccinelist.php';
    
    </script>";
}

}





mysqli_close($conn);


?>