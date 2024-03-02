<?php 
$koneksi = mysqli_connect("localhost","root","","db_portofolio");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<?php
$database = "db_portofolio";
$host = "localhost";
$user = "root"; // ganti dengan username database km
$password = ""; // ganti dengan password database km

$mysqli = new mysqli($host,$user,$password,$database);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}