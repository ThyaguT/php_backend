<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM student_details WHERE s_id='$id'");

    if($sql)
    {
        echo '<script> alert("Removed");window.location.href="view_student.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>