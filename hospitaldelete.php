<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "DELETE FROM hospital_tbl WHERE hospital_id = '$id'";
    $res = mysqli_query($conn, $qry);

    if (!$res) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo "<script>
                alert('Hospital deleted successfully');
                window.location.href='hospital.php';
              </script>";
    }
}

mysqli_close($conn);
?>
