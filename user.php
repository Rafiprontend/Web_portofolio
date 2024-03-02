<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PORTFOLIO TIM 6</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" />	
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
		<form action="logout.php">
<button class="btn btn-danger" role="button" type="submit" value="Logout">Logout</button>
</form>
			<img src="assets/img/logo2.png" bg="transparant" id="logo" alt="Logo Tim 6">
		</div>

		<div class="clear"></div>

		<div class="konten">
			<div id="box-welcome">
				<h1>Selamat Datang User<br> di Website Portofolio</h1>
				<a href="#karya" onclick="return smoothScroll('karya')">Lihat Karya</a>
			</div>
		</div>
	</div>

	<div id="kedua">
		<div class="konten" id="karya">
			<h2>Karya</h2>
			
			<div class="kolom-3">
				<a href="portfolio.php">
					<div class="pic">
						<img src="assets/img/tumphnil-1.jpg" alt="">
					</div>
				</a>
				<p class="desc">Karya Alvin kelas 10 RPL</p>
				<a href="portfolio.php" class="btn-lihat">Lihat</a>
			</div>

			
			<div class="kolom-3 tengah">
				<a href="portofolio2.php">
					<div class="pic">
						<img src="assets/img/tumphnil-2.jpg" alt="">
					</div>
				</a>
				<p class="desc">Karya Rizal kelas 11 RPL.</p>
				<a href="portofolio2.php" class="btn-lihat">Lihat</a>
			</div>

			<div class="kolom-3">
				<a href="portfolio4.php">
					<div class="pic">
						<img src="assets/img/thub-4.png" alt="">
					</div>

				</a>
				<p class="desc">Karya Rizal kelas 12 RPL.</p>
				<a href="portofolio4.php" class="btn-lihat">Lihat</a>
			</div>

			<div class="kolom-3 tengah">
				<a href="portofolio3.php">
					<div class="pic">
						<img src="assets/img/thumbnail-3.png" alt="">
					</div>
				</a>
				<p class="desc">Karya Prakerin Kelompok 3 kelas 12 RPL.</p>
				<a href="portofolio3.php" class="btn-lihat">Lihat</a>
			</div>

			<div class="kolom-3">
					<a href="portofolio6.php">
						<div class="pic">
							<img src="assets/img/thumbnail-5.jpg" alt="">
						</div>
					</a>
					<p class="desc">Karya Prakerin Kelompok 8 kelas 12 RPL.</p>
					<a href="portofolio6.php" class="btn-lihat">Lihat</a>
			</div>	
				
			<div class="kolom-3 tengah">
				<a href="portofolio3.php">
					<div class="pic">
						<img src="assets/img/thumbnail-3.png" alt="">
					</div>
				</a>
				<p class="desc">Karya Prakerin Kelompok 3 kelas 12 RPL.</p>
				<a href="portofolio3.php" class="btn-lihat">Lihat</a>
			</div>

		</div>	
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