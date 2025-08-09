<?php
include('connection.php');

$qry ="UPDATE hospital_tbl SET h_status = 'Activate' WHERE hospital_id = $_GET[id]";

mysqli_query($conn,$qry);
echo"<script>
alert('activate succussfully');

window.location.href='hospital.php'

</script>";

?>