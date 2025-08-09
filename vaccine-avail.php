<?php
include('connection.php');

$qry ="UPDATE vaccines_tbl SET v_status = 'Unavailable' WHERE v_id = $_GET[id]";

mysqli_query($conn,$qry);
echo"<script>
window.location.href='vaccinelist.php'
</script>";

?>