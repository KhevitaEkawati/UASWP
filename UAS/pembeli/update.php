<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$brand = $_POST['brand'];
$name = $_POST['name'];
$buy = $_POST['buy'];


 
// update data ke database
mysqli_query($koneksi,"update beli set brand='$brand', name='$name', buy='$buy' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:order.php");
 
?>