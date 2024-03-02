<?php
require "start-portofolio2.php";
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

			
			<div id="karya-box-kanan">
				<img src="assets/img/portofolio-1.jpeg" alt="Karya 1" id="target_gambar">
			</div>			

		</div>

		<div class="arrow-box arrow-kanan" onclick="ganti_berikut()"> > </div>

		<div class="clear"></div>

		<div id="karya-lain"> 
			<img src="img/portofolio-1.jpg" alt="Karya 1" onclick="ganti_gambar(this)" class="0">
			<img src="img/portofolio-2.jpg" alt="Karya 2" onclick="ganti_gambar(this)" class="1">
			<img src="img/portofolio-3.jpg" alt="Karya 3" onclick="ganti_gambar(this)" class="2">
		</div>
	
	</div>

	<div class="clear"></div>

	<div id="footer">
		<p>&copy; TIM ENAM </p>
	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>