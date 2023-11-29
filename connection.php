<?php
$conn=mysqli_connect("localhost","root","","student management");
if(mysqli_connect_errno()){
    echo"Something went wrong";
}
echo "Connection Successfully";
?>