<?php 
 session_start();
$koneksi = mysqli_connect("localhost","root","","ukk_perpus1");

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>