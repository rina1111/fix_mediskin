

<?php
include 'koneksi.php';
session_start();
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="description" content="Dr PRO template project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css`  <link rel="stylesheet" type="text/css" href="styles/about.css">
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
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/book-project-css.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["PT Sans:400,400italic,700,700italic"]
        }
      });
    </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/footer.css">



      <link rel="stylesheet" href="css/cardku2.css">

  
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>



<body style="background-image: url(images/1.jpg) ; width:100%">


  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

      <!-- Logo -->
      <div class="logo">
        <a href="#">
          <div style="color: #5F9EA0  ">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
          <div style="color: #556B2F">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
          
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
<li class="active"><a href="klinik.php">Clinic</a></li>
<li><a href="confrim_payment.php">Confrim Payment</a></li>



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

<br>
<br><br>
<br>
<br>
<br>
<br>
<div class="col-12">
                    <h2 style=" text-align: center;
    border-bottom:6px double lightblue;
    border-width:5px;   "></h2><hr>
                </div>

<?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM data_clinic  ");?>
                  <?php while ($pecah=$ambil->fetch_assoc()){?> 
  
  <!--for demo wrap-->
  
    
  
 
  

 
            <!-- Footer Erha -->
        <div class="col-lg-3 footer_col">
          <div class="footer_contact">
            <div class="footer_title" style="text-align: center; color: darkgrey;"><p style="text-align: justify;"><?php echo $pecah['klinik'];?></p></div><hr>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img_db/<?php echo $pecah['foto'];?>"  alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back"style="background-image: url(images/oo.jpg); color: black" >
                  <ul class="opening_hours_list" ><div class="footer_title" style="color: black;">About Clinic<hr></div>
                   
                      <li><p style="font-size: 12px;">EMAIL :<span>   <?php echo $pecah['email'];?></span></p></li>
                       <p style="font-size: 12px;">ALAMAT :<span>   <?php echo $pecah['alamat'];?></span></p>
                        <li><p style="font-size: 12px;">TELEPON :<span>   <?php echo $pecah['telepon'];?></span></p></li>
                       <li><p style="font-size: 12px;">JADWAL :<span>   <?php echo $pecah['jadwal_klinik'];?></span></p></li>
                       
                      
                      

                   
                    
                       
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php $nomor++;?>
                <?php }?>
<!-- follow me template -->
<style type="">
      .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
      }

      .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      }

      .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
      }

      .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
      }

      .flip-card-front {
        background-color: #bbb;
        color: black;
        z-index: 2;
      }

      .flip-card-back {

        background-size: 100%;
        color: white;
        transform: rotateY(180deg);
        z-index: 1;
      }
    </style>

    <!-- Footer Opening Hours -->
  </div>
</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/tableku.js"><script>

</body>
</html>
