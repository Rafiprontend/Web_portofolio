<?php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PORTFOLIO TIM 6</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" />	
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		function toggleMenu() {
			var menu = document.getElementById('menu-3');
			menu.classList.toggle('menu-open');
		}           
	</script>
</head>
<body>
	
	<div id="pertama">
		<div id="header">
			<img src="assets/img/logo2.png" id="logo" alt="Logo Tim 6">
			<div id="menu">
				<img src="assets/img/nav-icon.png" id="nav-icon" onclick="toggleMenu()">
				<div id="menu-text" onclick="toggleMenu()">MENU</div>
				<div class="konten" id="menu-3">
			</div>
		</div>

		<div class="clear"></div>

		<div class="konten">
			<div id="box-welcome">
				<h1>Selamat Datang <br> di Website Portofolio</h1>
				<a href="#karya" onclick="return smoothScroll('karya')">Lihat Karya</a>
			</div>
		</div>
	</div>

	<div id="kedua">
		<div class="konten" id="karya">
			<h2>Karya</h2>
			
			<div class="kolom-2">
				<a href="portfolio.html">
					<div class="pic">
						<img src="assets/img/tumphnil-1.jpg" alt="">
					</div>
				</a>
				<p class="desc">Karya Alvin kelas 10 RPL</p>
				<a href="portfolio.html" class="btn-lihat">Lihat</a>
			</div>

			
			<div class="kolom-3 tengah">
				<a href="portofolio2.html">
					<div class="pic">
						<img src="assets/img/tumphnil-2.jpg" alt="">
					</div>
				</a>
				<p class="desc">Karya Rizal kelas 11 RPL.</p>
				<a href="portofolio2.html" class="btn-lihat">Lihat</a>
			</div>

			<div class="kolom-3">
				<a href="portfolio.html">
					<div class="pic">
						<img src="assets/img/thub-4.png" alt="">
					</div>

				</a>
				<p class="desc">Karya Rizal kelas 12 RPL.</p>
				<a href="portofolio4.html" class="btn-lihat">Lihat</a>
			</div>

			<div class="kolom-3">
				<a href="portofolio4.html">
					<div class="pic">
						<img src="assets/img/thumbnail-3.png" alt="">
					</div>
				</a>
				<p class="desc">Karya Prakerin Kelompok 3 kelas 12 RPL.</p>
				<a href="portofolio3.html" class="btn-lihat">Lihat</a>

				<div class="kolom-4">
					<a href="portofolio3.html9">
						<div class="pic">
							<img src="assets/img/thumbnail-3.png" alt="">
						</div>
					</a>
					<p class="desc">Karya Prakerin Kelompok 8 kelas 12 RPL.</p>
					<a href="portofolio5.html" class="btn-lihat">Lihat</a>

		</div>	
		<div class="clear"></div>
	</div> 

		</div>

		<div id="footer">
			<p>&copy;karya tim 6</p>
		</div>

	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>