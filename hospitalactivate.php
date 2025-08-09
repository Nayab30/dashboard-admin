<?php
include('connection.php');

$qry ="UPDATE hospital_tbl SET h_status = 'Deactivate' WHERE hospital_id = $_GET[id]";

mysqli_query($conn,$qry);
echo"<script>
alert('deactivate succussfully');
window.location.href='hospital.php'
</script>";

?>