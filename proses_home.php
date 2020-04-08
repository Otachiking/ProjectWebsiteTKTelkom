<?php 
  session_start();
 define("INDEX", true);
      // menghubungkan dengan koneksi
      include 'koneksiakun.php';
       

       if($_SESSION['tipe_user']=="admin"){
       header("location:HomeAdmin.php");
     }elseif ($_SESSION['tipe_user']=="user"){
     	header("location:HomeUser.php");
     }elseif ($_SESSION['tipe_user']=="") {
     	header("location:Home.php");
     }else
     echo "Error gaesssss";
    
 ?>