<?php
$conn=mysqli_connect("localhost","root","","student management");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$s_id=$_POST['s_id'];
$feedback=$_POST['feedback'];
$initial_date=$_POST['initial_date'];
$sql=mysqli_query($conn,"INSERT INTO feedback(feedback,s_id,initial_date) VALUES('$feedback','$s_id','$initial_date')");
if($sql){
    $myarray['message']='inserted sucessfully';
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);
?>