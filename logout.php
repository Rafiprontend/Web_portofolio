<?php
//function start lagi
session_start();
session_destroy();


//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header( "Location: index.php" );

?>