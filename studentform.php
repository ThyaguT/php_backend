<?php
include "connection.php";
if(isset($_POST['submit'])){
  $name=$_POST['studentname'];
  $course=$_POST['course'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $filename=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpeg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }
  $sql=mysqli_query($conn,"INSERT INTO student_details(photo,name,course,email,phone) VALUES('$image','$name','$course','$email','$phone')");
  if($sql)
  {
      echo'<script> alert("Added successfully");
      window.location.href="view_student.php";</script>';
  }
  else{
  echo"something went wrong";
  
  }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="pricing.html">Pricing</a></li>

          <li class="dropdown"><a href="#"><span>Module</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">t</a></li> -->
              <li class="dropdown"><a href="#"><span>Teachers</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="teacher_add.php">Add Teaher</a></li>
                  <li><a href="view_teachers.php">View Teacher</a></li>
                </ul>
              </li>
              <li><a href="#">Student</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="adminlog.php" class="get-started-btn">Get Started</a> -->
      <a href="logout.php" class="get-started-btn">LOGOUT</a>

    </div>
  </header><!-- End Header -->

  

    

   
    

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up"> 
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
  <form style="width:500px;margin-left:500px;" method="post" enctype="multipart/form-data">
    <div class="mb-3">

    <h1> Student Registration</h1>
    <form method="post">
      <label for="" class="form-label"style="color:black;">Student Name</label>
      <input type="text" name="studentname" class="form-control" >
    </div>
      <div class="mb-3">
        <label for="" class="form-label"style="color:black;">Course</label>
        <input type="text"  name="course" class="form-control" >
      </div>
     
      <div class="mb-3">
        <label for="" class="form-label"style="color:black;">email</label>
        <input type="text"  name="email" class="form-control" >
      </div>
      <div class="mb-3">
      
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male" required>

    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female" required>

      </div>
    
      <div class="mb-3">
        <label for="" class="form-label"style="color:black;">phone</label>
        <input type="text"  name="phone" class="form-control" >
      </div>
      <div class="mb-3">
        <label for="" class="form-label"style="color:black;">dob</label>
        <input type="datetime"  name="dob" class="form-control" >
      </div>
      
      <div class="mb-3">
      <label for="" class="form-label"style="color:black;">Student Photo</label>
      <input type="file" name="photo" class="form-control" >
      
    </div>
      
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>