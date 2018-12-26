<?php
session_start();
 
include 'koneksi.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confrim Payment</title>
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

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/cardku.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">


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
						<li class="" ><a href="index.php">Home</a></li>
						
						
							<li ><div class="Login">
							<button onclick="myFunction2()" class="dropbtn" style="font-size: 15px;
							font-weight: 600;
							">Register & Login</button>
							<div id="Dropdown" class="dropdown-content2" style="color: #57ccc3">
								<a href="berlangganan.php">Register for Clinic</a>
								<a href="login_klinik.php">Login as clinic</a>
							</div>
						</div></li>


						<style>
						.dropbtn {
							background-color: white;
							color:  black;

							font-size: 15px;
							border: none;
							cursor: pointer;
						}

						.dropbtn:hover, .dropbtn:focus {
							background-color: white;
							color:  #57ccc3;
						}


						.dropdown {
							position: relative;
							display: inline-block;
						}

						.dropdown-content {
							display: none;
							position: absolute;
							background-color: white;
							min-width: 160px;
							overflow: auto;
							
						}

						.dropdown-content a {
							color: black;
							padding: 12px 16px;
							text-decoration: none;
							display: block;
						}
							.dropdown-content2 {
							display: none;
							position: absolute;
							background-color: white;
							min-width: 160px;
							overflow: auto;
							
						}

						.dropdown-content2 a {
							color: black;
							padding: 12px 16px;
							text-decoration: none;
							display: block;
						}

						.dropdown a:hover {background-color:  white;}

						.show {display: block;}
					</style>
					

	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction2() {
	document.getElementById("Dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
</script>

<li><a href="about.php">About Us</a></li>
<li><a href="datadokter.php">Doctors</a></li>
<li><a href="klinik.php">Clinic</a></li>
<li class="active"><a href="confrim_payment.php">Confrim Payment</a></li>



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

</div>
</header>
<!---------------->
	<div class="services" style="background-color: transparent;">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
					
					</div>
				</div>
			</div>
		<br>
		<br>
		<br>
		<br>
		<br>
			<br>
		<br>
		<br>
		<br>
		<br>
<!---------------->
<section>
<div id="wrapper" >
  <div id="container" style="border-style: double; background-color: white;">

    <div id="info">
      <br>
      <br>
      <br>
      <img id="product" src="images/new.png" style="width: 100%;"><hr>

<br>
     <p>Konfirmasi Pembayaranmu Disini Beserta Bukti Transfer</p>
     <hr>

      <div id="price">

     

      </div>
    </div>

    <div id="payment" >

      <form id="checkout" method="post" enctype="multipart/form-data">

         <input id="nama" type="text" name="nama" requierd="true" maxlength="50" placeholder="Nama "style="border-radius: 7px; border-style: double;font-size: 11px">

        <input id="rekening" type=text  name="rek" requierd="true" placeholder="No Rekening"style="border-radius: 7px; border-style: double; font-size: 11px">

       <input id="tel" type="text" name="total" requierd="true" maxlength="50" placeholder="Total Transfer" style="border-radius: 7px; border-style: double;font-size: 11px">

       <input id="tel" type="text" name="tel" requierd="true" maxlength="50" placeholder="Telepon" style="border-radius: 7px; border-style: double;font-size: 11px">

 <input id="tel" type="text" name="tgl" requierd="true" maxlength="50" placeholder="Tanggal Pembayaran" style="border-radius: 7px; border-style: double; font-size: 11px;">
       <input id="tel" type="file" name="bukti" requierd="true" maxlength="50" placeholder="Tanggal Pembayaran" style="border-radius: 7px; border-style: double; font-size: 11px;">
       
       

        <button name="save" type="submit" style="color: white;"> Confrim Payment</button>
      </form>
       <?php 
 
if (isset($_POST['save']))
{
 

	$tgl=date("Y-m-d");
  $bukti=$_FILES['bukti']['name'];
  $lokasi=$_FILES['bukti']['tmp_name'];
  move_uploaded_file($lokasi, "img_db/".$bukti);
 
// menyimpan data id kedalam variabel
// query SQL untuk insert data

		$koneksi->query("INSERT INTO konfirmasi(nama,rek,tot,tel,tgl,bukti)VALUES ('$_POST[nama]','$_POST[rek]','$_POST[total]','$_POST[tel]','$_POST[tgl]','$bukti')");
		
echo "<script>alert('Terimakasih'); </script>";
echo "<meta http-equiv='refresh' content='1;url=registrasi_clinic.php?halaman=produk'>";
}

?>


    



    </div>

  </div>
</div>
<link rel="stylesheet" type="text/css" href="css/checkout.css">
</section>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer style="background-color:black ;">
 <div class="container">
   <div class="row">
   
    
  <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo" id="ku" style="color: #5F9EA0; font-size: 32px; font-style: italic;"><strong>MediSkin</strong></span>
              	<span style="color:#BDB76B;font-size: 32px; font-style: italic;">Appointment</span><hr>
            </div>
            </div>


    <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Contact Us</span>       
                    <li>
                       <i class="fas fa-phone" aria-hidden="true"></i> : <a href="#">     +62 225 757 630</a>
                    </li> 
                    <li>
                       <i class="fas fa-envelope" aria-hidden="true"></i> : <a href="#">   MediSkinku77@gmail.com</a>
                    </li> 
               </ul>
           </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Find Us</span>       
                    <li>
                       <i class="fab fa-facebook" aria-hidden="true"></i>  : <a href="#">  MediSkin_Appointment</a>
                    </li> 
                      <li>
                       <i class="fab fa-twitter" aria-hidden="true"></i>   : <a href="#">  MediSkinku</a>
                    </li> 
                    <li>
                       <i class="fab fa-instagram" aria-hidden="true"></i> : <a href="#">  MediSkin_Appointment</a>
                    </li> 
               </ul>
           </div>
      <div class="col-12">
      	<p style="text-align: center;">Copy Right by Rina Anjari</p><hr>
      </div>
  </div>
</div>
</footer>
</body>
</html>