<?php
$conn=mysqli_connect('localhost','root','','student management');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}  
$users_id=$_POST['users_id'];
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
$title=$_POST['title'];
$description=$_POST['description'];
$sql=mysqli_query($conn,"INSERT INTO upload(users_id,photo,title,description) VALUES('$users_id','$image','$title','$description')");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>