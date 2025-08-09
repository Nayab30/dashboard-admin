<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "DELETE FROM vaccines_tbl WHERE v_id = '$id'";
    $res = mysqli_query($conn, $qry);

    if (!$res) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo "<script>
                alert('Vaccine deleted successfully');
                window.location.href='vaccinelist.php';
              </script>";
    }
}

mysqli_close($conn);
?>
