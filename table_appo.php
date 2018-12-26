<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Data Appointment</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css/tableku.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
  
</head>

<body >
  <section>
  <!--for demo wrap-->
  <h1 style="color: white">Data Appointment</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pasien</th>
          <th>Email</th>
           <th>Telepon</th>
          <th>Klinik</th>
          <th>Dokter</th>
           <th>Jadwal</th>
           <th>Tanggal</th>
            <th>Cetak Data</th>
             <th>Hapus</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      	<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM apoointment");?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?> 
        <tr>
          <td><?php echo $nomor;?></td>
          <td><?php echo $pecah['nama_pasien'];?> </td>
          <td><?php echo $pecah['email'];?></td>
          <td><?php echo $pecah['telepon'];?></td>
           <td><?php echo $pecah['klinik_pilih'];?></td>
               <td><?php echo $pecah['dokter_pilih'];?></td>
               <td><?php echo $pecah['jadwal'];?></td>
                  <td><?php echo $pecah['tgl'];?></td>
           
           
           
         
          <td><a href="appointment.php?id=<?php echo $pecah['No'];?>" class="btn btn-warning">Cetak</a> </td>
          <td><a href="hapusappointment.php?id=<?php echo $pecah['No'];?>" class="btn-danger btn">hapus</a></td>
        </tr>
       <?php $nomor++;?>
								<?php }?>
        
      </tbody>
    </table>
  </div>
<button style="background-color:  #5F9EA0; border-radius: 5px; border-style: double;"><a href="myclinic.php"><i class='fas fa-reply-all' style="font-size: 24px; color: white;"></i></a></button>
</section>

<!-- follow me template -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/tableku.js"><script>

</body>
</html>
