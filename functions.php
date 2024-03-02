<?php
require 'koneksi.php';

function hapus($id) {
    global $mysqli;
    mysqli_query($mysqli, "DELETE FROM tb_upload WHERE id=$id");


    return mysqli_affected_rows($mysqli);
}  


?>