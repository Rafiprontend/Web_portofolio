<?php
require "start-portofolio.php";
?>

	<div class="konten">
		
		<div class="arrow-box arrow-kiri" onclick="ganti_sebelum()"> < </div>
			
		<div id="karya-box">
			
			<div id="karya-box-kiri">
				<h3>Website</h3>
				<p class="desc">karya website ini bernama "Invetory RPL" yang di buat oleh kelompok 8 dari kelas 12. Website ini berguna untuk memenuhi kebutuhan atau permintaan.
					<a href='https://drive.google.com/drive/folders/1JCZ-WNFjrR6ntP6pkPlbV4627VPTe2Ec?usp=sharing'><br>(Masuk ke website)</br></a>
					</p> 
			</div>

			
			<div id="karya-box-kanan">
				<img src="assets/img/portofolio-19.jpeg" alt="Karya 1" id="target_gambar">
			</div>			

		</div>

		<div class="arrow-box arrow-kanan" onclick="ganti_berikut()"> > </div>

		<div class="clear"></div>

		<div id="karya-lain"> 
			<img src="assets/img/portofolio-19.jpeg" alt="Karya 1" onclick="ganti_gambar(this)" class="0">
			<img src="assets/img/portofolio-20.jpeg" alt="Karya 2" onclick="ganti_gambar(this)" class="1">
			<img src="assets/img/portofolio-21.jpeg" alt="Karya 3" onclick="ganti_gambar(this)" class="2">
        
		</div>
	
	</div>

	<div class="col-md-12 mt-5">
	<form enctype="multipart/form-data" method="post" action="upload.php">
			
			<div class="mb-3">
			<label for="formFile" class="form-label">Masukkan gambar</label>
				<input class="form-control" type="file" id="formFile">
			</div>
				<button type="submit" class="btn btn-success">Rubah</button>
			</div>
		</form>

	<div class="clear"></div>

	<div id="footer">
		<p>&copy; TIM ENAM </p>
	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>