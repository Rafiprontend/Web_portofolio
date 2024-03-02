<?php
session_start();
include "koneksi.php";

$user = [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation']
];

if($user['password'] != $user['password_confirmation']){
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['username'] = $_POST['username'];
    header("Location: register.php");
    return;

}

$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $mysqli->stmt_init();
if ($stmt->prepare($query)) {
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    //jika username sudah ada, maka return kembali ke halaman register.
    if($row != null){
    	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
    	$_SESSION['email'] = $_POST['email'];
    	$_SESSION['password'] = $_POST['password'];
    	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
    	header("Location: register.php");
    	return;
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $mysqli->stmt_init();
        if ($stmt->prepare($query)) {
            $stmt->bind_param('sss', $user['username'], $user['email'], $user['password']);
            if ($stmt->execute()) {
                $_SESSION['message'] = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat. <a href="index.php">Login disini!</a>';
                header("Location: register.php"); // Arahkan ke halaman login atau halaman lain yang sesuai.
                exit();
            } else {
                $_SESSION['error'] = 'Terjadi kesalahan saat menyimpan data.';
            }
        } else {
            $_SESSION['error'] = 'Terjadi kesalahan saat mempersiapkan pernyataan.';
        }
    }
}

header("Location: index.php");
exit();
?>