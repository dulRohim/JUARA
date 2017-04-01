<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "juara";
$con = mysqli_connect($host,$user,$pass,$dbname);
if(mysqli_connect_errno()){
printf("Gagal melakukan koneksi ke Server Database: %s\n",
mysqli_connect_error());
 exit();
}
else{
echo "KONEKSI DATABASE BERHASIL!";
}
?>
