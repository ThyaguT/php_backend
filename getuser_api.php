<?php
$conn=mysqli_connect("localhost","root","","student management");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($conn,"SELECT s_id FROM student_details WHERE email='$email' AND password='$password'");
$row=mysqli_fetch_assoc($sql);
if($sql){
    $myarray['data']=$row;
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);