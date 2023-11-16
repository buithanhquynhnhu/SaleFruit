<?php

session_start();
    //include "Model/connect.php";
    //include "Model/hanghoa.php";
    //include "Model/giohang.php";
    //include "Model/hoadon.php";
    //include "Model/user.php";
    //include "Model/page.php";
    include "Model/uploadimage.php";
    include "Model/class.phpmailer.php";
set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="Content/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="Content/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="Content/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="Content/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="Content/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="Content/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="Content/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="Content/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="Content/assets/css/responsive.css">

</head>
<body>
      <!-- header -->
      <?php 
      include "View/headder.php";
      ?>
      <!-- hiên thi noi dung -->
      <div class="container">
          <div class="row">
              <!-- hien thi noi dung đây -->
              <?php
            //   $db=new connect();
            $ctrl="dangnhap";
            if(isset($_GET["action"]))
            {
                $ctrl=$_GET["action"];
            }
            include "Controller/".$ctrl.".php";
               ?>
          </div>
</div>
    <!-- hiên thị footer -->
    <?php
   
        include "View/footer.php";
    
    
     ?>

</body>

</html>
