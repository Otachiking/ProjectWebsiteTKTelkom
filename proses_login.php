<?php

	session_start();

		include'koneksiakun.php';

	define("INDEX", true);

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi,"select * from register where username='$username' and password='$password'");

  $cek = mysqli_num_rows($login);

  if ($cek > 0){
      $data=mysqli_fetch_assoc($login);

        if($data["tipe_user"]== "admin"){
          $_SESSION['username'] = $username;
          $_SESSION['tipe_user'] = "admin";
          echo "<script>alert('Selamat Datang Admin, Anda Berhasil Masuk!');window.location='HomeAdmin.php'</script>";

        }elseif ($data["tipe_user"]== "user"){
          $_SESSION['username'] = $username;
          $_SESSION['tipe_user'] = "user";
          echo "<script>alert('Selamat Datang ".$_SESSION['username'].", Anda Berhasil Masuk!');window.location='HomeUser.php'</script>";
        }elseif ($data["tipe_user"]== ""){
          $_SESSION['username'] = $username;
          $_SESSION['tipe_user'] = "user";
          echo "<script>alert('Selamat Datang ".$_SESSION['username'].", Anda Berhasil Masuk!');window.location='HomeUser.php'</script>";
          # code...
        }else{
          echo "Login Error!";
        }
  }else{
    echo "<script>alert('Usename atau Password Anda Salah! Mohon Coba Lagi');window.location='Login.php';</script>";
  }


  //   echo "<script>alert('Selamat, Anda Berhasil Masuk!');window.location='HomeUser.php';</script>";
  // }else{
  //   echo "<script>alert('Usename atau Password Anda Salah! Mohon Coba Lagi');window.location='Login.php';</script>";
  // }

?>