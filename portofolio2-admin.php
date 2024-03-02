<?php
require "start-portofolio.php";
?>
	<div class="konten">
		
		<div class="arrow-box arrow-kiri" onclick="ganti_sebelum()"> < </div>
			
		<div id="karya-box">
			
			<div id="karya-box-kiri">
				<h3>Website</h3>
				<p class="desc">karya website ini berjudul "website sekolah" yang di buat oleh Rizaldi Arief dari kelas 11. Website ini dirancang untuk mengenalkan sekolah Triple "J" kepada publik.
					<a href='https://drive.google.com/drive/folders/1fyquqD5eqZyRH05InQTCt7sjJsDNHtu4?usp=drive_link'><br>(Masuk ke website)</br></a>
					</p> 
			</div>

			
			<div id="karya-box-kanan">
				<img src="assets/img/portofolio-4.jpeg" alt="Karya 1" id="target_gambar">
			</div>			

		</div>

		<div class="arrow-box arrow-kanan" onclick="ganti_berikut()"> > </div>

		<div class="clear"></div>

		<div id="karya-lain"> 
			<img src="assets/img/portofolio-4.jpeg" alt="Karya 1" onclick="ganti_gambar(this)" class="0">
			<img src="assets/img/portofolio-5.jpeg" alt="Karya 2" onclick="ganti_gambar(this)" class="1">
			<img src="assets/img/portofolio-6.jpeg" alt="Karya 3" onclick="ganti_gambar(this)" class="2">
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