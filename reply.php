<?php

  include "connection.php";
    $id=$_GET['id'];
    $data=mysqli_query($conn,"SELECT * FROM feedback WHERE f_id='$id'");
    $row=mysqli_fetch_assoc($data);
    if(isset($_POST['submit'])){
    $value=$_POST['id'];
    var_dump($id);
    $reply=$_POST['reply'];
    $data1=mysqli_query($conn,"UPDATE feedback SET reply='$reply' WHERE f_id='$id'");
      if($data1){
        echo'<script>alert("Replied");window.location.href="feedback.php"</script>';
      }else{
        echo'<script>alert("Failed to reply");window.location.href="feedback.php"</script>'; 
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


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
    <div class="one container">
    <div class="row">
    <div class="col-4">
    
    </div>
    <div class="col-4">
    <form method="POST" >
    <div class="mb-3">
    <fieldset disabled="disabled">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Query</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['feedback'];?>">
          </div>

    </fieldset>
        
      <div class="mb-3">
        <label  class="form-label">Reply</label><br>
        <textarea name="reply" class="form-control" cols="40" rows="10"></textarea>
      </div>
      <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
    </form>
    
    
    
    
    
    
    
    
    </div>
    
    
    
    
    
    
    </div>
    
    
    
    
    </div>
    </section>
  <!-- End Hero -->
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

  