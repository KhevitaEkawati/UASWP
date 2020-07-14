<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$brand = $_POST['brand'];
$name = $_POST['name'];
$price = $_POST['price'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$brand','$name','$price')");
 
// mengalihkan halaman kembali ke index.php
header("location:stars.php");
 
?>