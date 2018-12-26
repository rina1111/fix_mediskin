<?php
session_start();
 
include 'koneksi.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Berlangganan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dr PRO template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css`	<link rel="stylesheet" type="text/css" href="styles/about.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/cardku.css">


</head>



<body style="background-image: url(images/1.jpg) ; width:100%">


	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div style="color: #5F9EA0	">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
					<div style="color: #556B2F; font-size: 14px;">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
					
				</a>
			</div>

			<!-- Main Navigation -->
			<div class="topnav" id="myTopnav">
				<nav class="main_nav" style="color: black    ">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li ><a href="index.php"><i class="fas fa-reply-all" style="font-size: 24px; color: #556B2F"></i></a></li>
						<li class="active "><a href="Berlangganan.html">Berlangganan</a></li>

						
</ul>
</nav>

</div>


<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

	<!-- Work Hourse -->


	<!-- Header Social -->
	<div class="social header_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>

</div>
<!-- Hamburger -->
<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>
</div>
</header>
<?php
echo "<script>alert('Silahkan Berlangganan Terlebih Dahulu'); </script>";
?>
<!-----------table----->
			<div class="Home">

	<div class="home d-flex flex-column align-items-start justify-content-end" style="background-color: transparent;">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		
		<div class="home_container" style="background-color: transparent;">

			<div class="container">
				<div class="row">
					<!----card langganan---->
					 <?php $ambil=$koneksi->query("SELECT * FROM langganan ");?>
                  <?php while ($pecah=$ambil->fetch_assoc()){?> 
  
  
					<div class="col-lg-4" style="float: right;">
						<div class="card transition">
							<h2 class="transition"> <?php echo $pecah['jns_member'];?></h2>

							<div class="cta-container transition"><a href="payment.php?id=<?php echo $pecah['id_member'];?>" class="cta2">Rp.  <?php echo $pecah['hrg_member'];?>/  <?php echo $pecah['bulanan'];?></a></div>
							<div class="card_circle transition"></div>
						</div>
					</div>
				
                <?php }?>

					
				</div>
			</div>
		</div>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Berlangganan!</strong> Kamu harus berlangganan terlbih dahulu agar dapat meregistrasikan klinik kamu!.
</div>
	</div>

</div>


<style type="">
@import url('http://fonts.googleapis.com/css?family=Raleway:400,200')
body {   font-family: Helvetica, san-serif;
	background: -webkit-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
	background:    -moz-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* FF3.6+ */
	background:     -ms-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* IE10 */
	background:      -o-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Opera 11.10+ */
background:         linear-gradient(90deg, #00aaee 10%, #DEB887 90%); /* W3C */ }
.transition { transition: .3s cubic-bezier(.3, 0, 0, 1.3) }
.card {
	background-color: white;
	bottom: 0;
	box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	-webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	height: 300px;
	left: 0;
	margin: auto;
	overflow: hidden;
	position: absolute;
	right: 0;
	top: 0;
	width: 300px;
}
.card:hover {
	height: 450px;
	width: 300px;
}
.card:hover .cta-container {
	display: inline;
	margin-top: 380px;
}
.card:hover .card_circle {
	background-size: cover;
	border-radius: 0;
	margin-top: -130px;
}
.card:hover h2 {
	background: 	#DEB887;
	color: white;
	margin-top: 100px;
	padding: 5px;
}
.card:hover h2 small { color: #fff }
.card:hover p { margin-top: 300px }
.card_circle {
	background: url(images/ini.jpg) no-repeat center bottom;
	background-color: 	white;
	background-size: cover;
	border-radius: 50%;
	height: 400px;
	margin-left: -75px;
	margin-top: -270px;
	position: absolute;
	width: 450px;
}
h2 {
	color: #DEB887;
	font-family: 'Raleway', sans-serif;
	font-size: 24px;
	font-weight: 200;
	margin-top: 150px;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 9999;
}
p {
	color: rgba(0,0,0,.6);
	font-family: 'Raleway', sans-serif;
	font-size: 100%;
	font-weight: normal;
	margin-top: 200px;
	position: absolute;
	text-align: center;
	z-index: 9999;
}
.cta-container {
	display: none;
	margin-top: 320px;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 9999;
	background-color:#DEB887;
}
.cta2 a {
	color: black;
}
.cta2 {
	-moz-border-radius: 2px;
	-moz-transition: 0.2s ease-out;
	-ms-transition: 0.2s ease-out;
	-o-transition: 0.2s ease-out;
	-webkit-border-radius: 2px;
	-webkit-transition: 0.2s ease-out;
	background-clip: padding-box;
	border: 2px solid #DEB887;
	border-radius: 2px;
	color: 	white;
	display: inline-block;
	font-family: 'Raleway', sans-serif;
	font-size: 17px;
	font-weight: 400;
	height: 36px;
	letter-spacing: 0.5px;
	line-height: 36px;
	margin-bottom: 15px;
	padding: 0 2rem;
	text-decoration: none;
	text-transform: uppercase;
	transition: 0.2s ease-out;
}
.cta:hover {
	background-color: #DEB887;
	box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	color:white;
	-moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>


<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>


<div class="footer_bar" style="background-color: black; text-align: center">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="" style="float: center; text-align: center;">
				<div class="" style="text-align: center; float: center;">
				Copy Right by Rina Anjari

				</div>

			</div>
		</div>
	</div>
</div>			
</div>

</body>
</html>
