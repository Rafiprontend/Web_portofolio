<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Kelompok 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container">
        <div class="login">
            <!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
            <form method="post" action="cek_login.php">
                <h2><center>Selamat datang
                    <br>di  Website Portofolio
</br></center></h2>
                <hr>
                <p>Masukan akun anda</p>
                <label for="Username">Username</label>
                <input type="text" name="username"  placeholder="username" id="Username">
                <label for="Password">Password</label>
                <input type="password" name="password" placeholder="Password" id="Password">
                <button>Login</button>
                <p>
                    <a href="cek_admin.php">APAKAH ANDA ADMIN?</a>
                    <p>
                     <a href="register.php">BELUM PUNYA AKUN SILAHKAN REGISTER</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="logo1.png" alt="">
        </div>
    </div>
</body>

</html>