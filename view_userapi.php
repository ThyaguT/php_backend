<?php
$conn=mysqli_connect('localhost','root','','student management');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$s_id=$_POST['s_id'];
$sql=mysqli_query($conn,"SELECT * FROM student_details WHERE s_id='$s_id'");
$row=mysqli_fetch_assoc($sql);
if($sql){
    $myarray['data']=$row;
}else{
    $myarray['message']='error';
}
echo json_encode($myarray); 