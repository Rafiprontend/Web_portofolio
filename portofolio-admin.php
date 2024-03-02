<?php
require "start-portofolio.php";
require "koneksi.php";
?>
<div class="konten">
		
		<div class="arrow-box arrow-kiri" onclick="ganti_sebelum()"> < </div>
			
		<div id="karya-box">
			
			<div id="karya-box-kiri">
				<h3>SpaceShooter</h3>
				<p class="desc">karya game ini berjudul "SpaceShooter" yang di buat oleh Alvin Jefferson dari kelas 10. Game ini dirancang menantang seseorang untuk melawan penjahat luar angkasa, desain karakter yang unik dapat membuat orang-orang lebih tertarik.>
					<a href='https://spsalvin.netlify.app/'>(Masuk ke website)</a>
					.</p> 
			</div>

			
			<?php 
 			$data = mysqli_query($mysqli, "SELECT * from tb_upload");
 			
 ?>	
			<div id="karya-box-kanan">
    <img src="img/portofolio-1.jpg" alt="Karya 1" id="target_gambar">
</div>

			

		</div>

		<div class="arrow-box arrow-kanan" onclick="ganti_berikut()"> > </div>

		<div class="clear"></div>

		<div id="karya-lain"> 
			<img src="img/portofolio-1.jpg" alt="Karya 2" onclick="ganti_gambar(this)" class="0">
			<form method="post" action="delete.php">
				<input type="hidden" name="gambar_hapus" value="portofolio-1.jpg">
				<button type="submit" name="delete">Delete</button>
			</form>
			
			<img src="img/portofolio-2.jpg" alt="Karya 3" onclick="ganti_gambar(this)" class="1">
			<form method="post" action="">
				<input type="hidden" name="gambar_hapus" value="portofolio-2.jpg">
				<button type="submit" name="delete">Delete</button>
			</form>
			
			<img src="img/portofolio-3.jpg" alt="Karya 3" onclick="ganti_gambar(this)" class="2">
			<form method="post" action="">
				<input type="hidden" name="gambar_hapus" value="portofolio-3.jpg">
				<button type="submit" name="delete">Delete</button>
			</form>


			<div class="col-md-12 mt-5">
		<form enctype="multipart/form-data" method="post" action="upload.php">
			
			<div class="mb-3">
			<label for="formFile" class="form-label">Masukkan gambar</label>
				<input class="form-control" type="file" id="formFile">
			</div>
				<button type="submit" class="btn btn-success">Rubah</button>
			</div>
		</form> 
	

	</div>


	
	</div>

		</div>
	</form>
</div>

	
	
	<div class="clear"></div>

	<div id="footer">
		<p>&copy; TIM ENAM </p>
	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>