<?php
error_reporting(0);
// session_start();

include ('connection.php');



$id =$_REQUEST['updateid'];
$qry="select * from admin_tbl where id = '$id'";

$res=mysqli_query($con,$qry);
$row= mysqli_fetch_array($res);


if(isset($_POST['updatebtn'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email =$_POST['email'];
            $password =$_POST['pswd'];

            $qry = "UPDATE admin_tbl SET name ='$name', email ='$email',password ='$password' WHERE id ='$id' ";

            
        $res = mysqli_query($con,$qry);

        if(!$res){
            die("Error".mysqli_error($con));
        }else{
            header('location:adminprofile.php');
        }
        }

