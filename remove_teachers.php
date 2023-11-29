<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM teachers WHERE t_id='$id'");

    if($sql)
    {
        echo '<script> alert("Removed");window.location.href="view_teachers.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>