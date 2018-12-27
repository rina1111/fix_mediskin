<?php
 require_once("koneksi.php");
 if (!isset($_SESSION)) {
     session_start();
 }
require_once __DIR__ . '/vendor/autoload.php';
$ambil =$koneksi-> query ( "SELECT * FROM apoointment WHERE No='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$mpdf = new \Mpdf\Mpdf();
$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-12" style="float: right;">
        <div class="card">
        <img src="images/id.png"  style="width:100%">
        <h4 style="font-family: times rowman;"> Appointment</h4>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Nama :<a href=""style=" font-size: 14px; margin-right: 4px;font-family: times rowman;"> &nbsp </a></p>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Klinik :<a href=""style=" font-size: 14px;font-family: times rowman;"> &nbsp</a></p>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Dokter :<a href=""style=" font-size: 14px;font-family: times rowman;"> &nbsp</a></p>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Tanggal Appointment:<a href=""style=" font-size: 14px;font-family: times rowman;"> &nbsp</a></p>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Hari & Waktu:<a href=""style=" font-size: 14px;font-family: times rowman;"> &nbsp</a></p>
        <p class="title"style=" font-size: 14px;font-family: times rowman;"> Telepon:<a href=""style=" font-size: 14px;font-family: times rowman;"></a></p>
        </div>
        </div>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>