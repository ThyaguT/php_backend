<?php
$conn=mysqli_connect("localhost","root","","student management");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$name=$_POST['name'];
$course=$_POST['course'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="./image/".$filename;
$image=$filename;
$uploadOk=1;
$imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
    echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
    $uploadOk=0;
}
if($uploadOk==0){
    echo "sorry";
}else{
    move_uploaded_file($tempname,$folder);
}
$sql=mysqli_query($conn,"INSERT INTO student_details(photo,name,course,email,password,phone,gender,dob) VALUES('$image','$name','$course','$email','$password','$phone','$gender','$dob')");
$data=mysqli_insert_id($conn);
$sql=mysqli_query($conn,"INSERT INTO login(log_id,email,password) VALUES('$data','$email','$password')");
if($sql){
    $myarray['message']='inserted sucessfully';
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);


?>