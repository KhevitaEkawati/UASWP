<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$brand = $_POST['brand'];
$name = $_POST['name'];
$buy = $_POST['buy'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into beli values('','$brand','$name','$buy')");
 
// mengalihkan halaman kembali ke index.php
header("location:order.php");
 
?>