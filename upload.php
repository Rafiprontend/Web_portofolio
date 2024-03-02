<?php 
	include "koneksi.php";

	$image = $_FILES['image']['name'];
	$x = explode('.', $image);
	$ekstensi_diperbolehkan = array('png','jpg','jpeg');
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];


	if(in_array($ekstensi, $ekstensi_diperbolehkan)){
		if($ukuran < 1044070){ 
			move_uploaded_file($image_tmp, 'img/'.$image);
			$query = mysqli_query($mysqli, "INSERT INTO tb_upload VALUES('$name', '$image')");
			if($query){
				echo 'Foto berhasil di upload!';
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}

	header('location:portofolio-admin.php');
?>
