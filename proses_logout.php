
<?php 
	session_start();

	// menghapus semua sistem

	session_destroy();

	header("location:Login.php?pesan=logout");


 ?>