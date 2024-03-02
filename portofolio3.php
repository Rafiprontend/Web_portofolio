<?php
require "start-portofolio2.php";
?>
	<div class="konten">
		
		<div class="arrow-box arrow-kiri" onclick="ganti_sebelum()"> < </div>
			
		<div id="karya-box">
			
			<div id="karya-box-kiri">
				<h3>Website</h3>
				<p class="desc">karya website ini berjudul "Toko Online PC" yang di buat oleh kelompok 3 dari kelas 12. Website ini dibuat saat mereka sedang praktek kerja industri, website ini dapat membantu kita untuk membeli pc.
					<a href='https://drive.google.com/drive/folders/1DN-fI2pGIDAjwu99wf1RsODY9dgHe1_N?usp=drive_link'><br>(Masuk ke website)</br></a>
					</p> 
			</div>

			
			<div id="karya-box-kanan">
				<img src="assets/img/portofolio-7.jpeg" alt="Karya 1" id="target_gambar">
			</div>			

		</div>

		<div class="arrow-box arrow-kanan" onclick="ganti_berikut()"> > </div>

		<div class="clear"></div>

		<div id="karya-lain"> 
			<img src="assets/img/portofolio-7.jpeg" alt="Karya 1" onclick="ganti_gambar(this)" class="0">
			<img src="assets/img/portofolio-8.jpeg" alt="Karya 2" onclick="ganti_gambar(this)" class="1">
			<img src="assets/img/portofolio-9.jpeg" alt="Karya 3" onclick="ganti_gambar(this)" class="2">
		</div>
	
	</div>

	<div class="clear"></div>

	<div id="footer">
		<p>&copy; TIM ENAM </p>
	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>