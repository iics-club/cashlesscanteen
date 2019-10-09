<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&amp;display=swap" rel="stylesheet" />
	<link href="../../css/animate.css" rel="stylesheet" />
	<link href="../../css/owl.carousel.min.css" rel="stylesheet" />
	<link href="../../css/jquery.fancybox.min.css" rel="stylesheet" />
	<link href="../../fonts/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="../../fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../../fonts/flaticon/font/flaticon.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet" /><!-- Theme Style -->
	<link href="../../css/style.css" rel="stylesheet" />
</head>
<body>
<header role="banner">
<nav class="navbar navbar-expand-lg  bg-dark">
<div class="container-fluid"><a class="navbar-brand " href="index.html">Cashless Canteen</a><button aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsExample05" data-toggle="collapse" type="button"></button>
<div class="collapse navbar-collapse" id="xample05">
<ul class="navbar-nav pl-md-5ml-auto">
	<li class="nav-item"><a class="nav-link active" href="../../login.php">Log Out</a></li>
</ul>


</div>
</div>
</nav>
</header>
<!-- END header -->

<div class="slider-item overlay" data-stellar-background-ratio="0.5" style="background-image: url('../../images/IMG_1545.jpg');">
<div class="container">
<div class="row slider-text align-items-center justify-content-center">
<div class="col-lg-9 text-center col-sm-12 element-animate">
<h1 class="mb-4">Items Sold</h1>
<!--may delete maybe?-->

<div class="btn-play-wrap mx-auto">
<p class="mb-4"></p>
</div>
<br />
<!--until here--></div>
</div>
</div>
</div>

<center>
<div class="section">
<div class="container">
<div class="row">
<?php
require ('connection.php');
// vendor id dapet dari login
$insertvendorid = 'C';
$sql = "SELECT food_name, vendor_id, COUNT(food_name) FROM transaction_history WHERE vendor_id = '$insertvendorid' GROUP BY food_name";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
  
    echo "<table><caption> Vendor ".  $insertvendorid ."</caption>";
    echo "<table><tr><td>Food</td><td> Total Items Sold </td></tr>" ;
    while($row = $result->fetch_assoc()) {
    echo "<tr>" ;
           echo  "<td>". $row['food_name']."</td> <td>" . $row['COUNT(food_name)']."</td>"; 
    echo "</tr>" ;
    }
    echo "</table>" ;

} else {
    echo "0 results";
}


$conn->close();
?>

<style>
        table, td{
        	border-style: solid;
        	border-color: black;
        }
</style>
</div>
</div>
</div>
</center>

<!-- END .block-4 -->

<div class="bg-primary py-5">
<div class="container text-center">
<div class="row justify-content-center">
<div class="col-lg-7">
<h3 class="text-white mb-4 font-weight-normal">Are you Interested In Joining Us?</h3>

<p class="text-white mb-5">If you are an IICS student who is interested in dealing with computer, feel free to be a part of the CS club!</p>

<p class="mb-0"><a class="btn btn-outline-white px-4 py-3" href="contact.php">Contact Us!</a></p>
</div>
</div>
</div>
</div>

<footer class="site-footer" role="contentinfo">
<div class="container">
<div class="row mb-5">
<div class="col-md-4 mb-5">
<h3 class="mb-4">About Cashless Canteen</h3>

<p class="mb-5">We Are A Computer Science Club That Aims to Provide Digital Solutions to Real-World Problems That We Face Everyday, Together.</p>

<ul class="list-unstyled footer-link d-flex footer-social">
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>
</div>

<div class="col-md-5 mb-5 pl-md-5">
<div class="mb-5">
<h3 class="mb-4">Contact Info</h3>

<ul class="list-unstyled footer-link">
	<li class="d-block"><span class="d-block">Address:</span> <span class="text-white">Komplek Taman Meruya Ilir Jalan Batu Mulia Blok K, RT.11/RW.7, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11620</span></li>
	<li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+62158905890</span></li>
	<li class="d-block"><span class="d-block">Email:</span><span class="text-white">isaacedwin777@gmail.com</span></li>
</ul>
</div>
</div>

<div class="col-md-3 mb-5">
<h3 class="mb-4">Quick Links</h3>

<ul class="list-unstyled footer-link">
	<li><a href="about.html">Our Project</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="https://www.instagram.com/csclubiics/">Our Instagram</a></li>
</ul>
</div>

<div class="col-md-3"></div>
</div>

<div class="row">
<div class="col-12 text-md-center text-left">
<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with by <a href="https://colorlib.com" target="_blank">Colorlib</a> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
</div>
</div>
</footer>
<!-- END footer --><!-- loader -->

<div class="show fullscreen" id="loader"><svg class="circular" height="48px" width="48px"> <circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle> <circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#f4b214" stroke-miterlimit="10" stroke-width="4"></circle></svg></div>
<script src="../../js/jquery-3.2.1.min.js"></script><script src="../../js/jquery-migrate-3.0.1.min.js"></script><script src="../../js/popper.min.js"></script><script src="../../js/bootstrap.min.js"></script><script src="../../js/owl.carousel.min.js"></script><script src="../../js/jquery.waypoints.min.js"></script><script src="../../js/jquery.fancybox.min.js"></script><script src="../../js/jquery.stellar.min.js"></script><script src="../../js/main.js"></script></body>
</html>


