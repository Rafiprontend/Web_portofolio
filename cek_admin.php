<?php
include 'koneksi.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = ($_POST['password']); // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM admin WHERE username ='$username' AND password='$password'";
    $result = mysqli_query($mysqli, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Username atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p  class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
            <br>
            <br>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username" required>
            </div>
            <br>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
        <div class="right">
            <img src="logo1.png" alt="">
    			
				</div>
    </div>
</body>
</html>