<?php 
  include('koneksiakun.php'); //agar index terhubung dengan database, maka koneksi sebagai pehubung diInclude

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-image: url(BgWeb.jpg)
      }
    .container {
        max-width: 960px;
      }

      /*
       * Custom translucent site header
       */

      .site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
      }
      .site-header a {
        color: #999;
        transition: ease-in-out color .15s;
      }
      .site-header a:hover {
        color: #fff;
        text-decoration: none;
      }

      /*
       * Dummy devices (replace them with your own or something else entirely!)
       */

      .product-device {
        position: absolute;
        right: 10%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        -webkit-transform: rotate(30deg);
        transform: rotate(30deg);
      }

      .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
       
        border-radius: 5px;
      }

      .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
      }


      /*
       * Extra utilities
       */

      .flex-equal > * {
        -ms-flex: 1;
        flex: 1;
      }
      @media (min-width: 768px) {
        .flex-md-equal > * {
          -ms-flex: 1;
          flex: 1;
        }
      }

      .overflow-hidden { overflow: hidden; }
    }
  /* Ya gitu dah */ 
    .Bingkai {        
      background-image:"Astro.png";
    }

    .BgWeb  {
      background-image: url(BgWeb.jpg);
    }
    .bg-red{
        background-color:#dc0215;
      }
    .bg-redhover:hover{
        background-color:#dc0215;
    .justify {
      text-align: justify;
      text-justify: inter-word;
    }
    .footera{
      background-color: #333;
      color:white;
    }
    .footerb{
      background-color: black;
      color:white;
    }
    .links{
        ul {list-style-type: none;}
        li a{
          color: white;
          transition: color .2s;
          &:hover{
            text-decoration:none;
            color:#4180CB;
            }
        }
    }  
    .about-company{
      i{font-size: 25px;}
      a{
        color:white;
        transition: color .2s;
        &:hover{color:#4180CB}
      }
    } 
    .location{
      i{font-size: 18px;}
    }
    .FilterWhite {
      -webkit-filter: brightness(10000%); /* Safari 6.0 - 9.0 */
      filter: brightness(10000%);
    }
    .FilterDark {
      -webkit-filter: brightness(0%); /* Safari 6.0 - 9.0 */
      filter: brightness(0%);
    }
    .FilterGray {
      -webkit-filter: grayscale(10000%); /* Safari 6.0 - 9.0 */
      filter: grayscale(10000%);
    }
    .copyright p{border-top:1px solid rgba(255,255,255,.1);}
}
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .jumbotron {
        padding-top: 3rem;
        padding-bottom: 3rem;
        margin-bottom: 0;
        background-color: #fff;
      }
      @media (min-width: 768px) {
        .jumbotron {
          padding-top: 6rem;
          padding-bottom: 6rem;
        }
      }

      .jumbotron p:last-child {
        margin-bottom: 0;
      }

      .jumbotron h1 {
        font-weight: 300;
      }

      .jumbotron .container {
        max-width: 40rem;
      }
      .bg-grey:hover {
        background-color: grey;
      }
      .card-body-icon{
        position: absolute;
        z-index: 0;
        top: 25px;
        right: 16px;
        opacity:0.6;
        font-size: 90px;
      }
      

  </style>
    

    <!--Ini untuk FontAwsome-->
    <script src="https://kit.fontawesome.com/0ad6824cad.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   

    <title>TK Telkom Buah Batu</title>
  </head>
  <body>


  <!-- Ini Navbar --->
  <nav class="navbar navbar-expand-lg navbar-light bg-red fixed-top " >
  <div class="container" style="margin-left: 40px;">
  <a class="navbar-brand" href="HomeUser.php"   style= "margin-right: 8px;">
        <img src="Logo_TK_Telkom.png" width="50" height="50" class="d-inline-block align-top"><mr-top-10>
      </a>
      <a class="navbar-brand" href="HomeUser.php">
        <img src="LogoCropColorfulWhite.png" width="115" height="50" class="d-inline-block align-top ml-0 "><mr-top-10>
      </a>
      <p style="font-size: 27px; margin-bottom: 0px; margin-left: -10px;"><b> Admin</b><i class="fa fa-user-cog"></i></p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item active">
        <a class="nav-link text-white" href="Proses_Home.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil Sekolah
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Identitas.php">Identitas Sekolah</a>
          <a class="dropdown-item" href="VisiMisi.php">Visi & Misi</a>
          <a class="dropdown-item" href="GuruStaff.php">Guru & Staff</a>
        </div>
      <li class="nav-item ">
        <a class="nav-link text-white" href="Artikel.php">Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Form_PPDB.php">PPDB</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pembayaran
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Gedung.php">SPP</a>
          <a class="dropdown-item" href="Gedung.php">Uang Gedung</a>
          <a class="dropdown-item" href="PakaianBuku.php">Seragam & Buku</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Donasi.php">Donasi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="HubungiKami.php">Hubungi Kami</a>
      </li>
    </ul>
  </div>
  <div class="css-1f4p444 enbmto40">
    <a class="unf-header-menu_button" href="Login.php" data-testid="btnHeaderLogin"> 
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-testid="btnHeaderLogin"> <SPAN> Masuk</SPAN> </button>
    </a>
  </div>
</div>
  <div class=icon style="margin-bottom:-30px; font-size: 20px; ">
        <i class="fas fa-envelope mr-3" data-toggle="tooltip" data-placement="bottom" title="Pesan Masuk"></i>
        <i class="fas  fa-bell mr-3" data-toggle="tooltip" data-placement="bottom" title="Notifikasi"></i>
        <i class="fas  fa-sign-out-alt" data-toggle="tooltip" data-placement="bottom" title="Keluar"></i>

        &nbsp&nbsp
        <!-- <a style="margin-right: 20px; color: #212529; margin-bottom: -5px;" href="login.php" action="proses_logout.php"><i class="fa fa-sign-out-alt" align="left" style="font-size:25px;"></i></a> -->
  </div>

</nav>
<!-- YANG DIATAS JANGAN DIRUBAH-->

<!----------------------------------------------MENU NAVBAR ADMIN--------------------------------------------------------------------------->

  <div class="row no-gutters" style="margin-top: 68px;">
    <div class="col-md-2 mt-2" style="background-color: #333;">
        <ul class="nav flex-column">
          <li class="nav-item">
              <hr style="margin-top: 0px; margin-bottom: 10px; background-color: #333;">
            <a class="nav-link bg-grey active text-white hover-bro" href="HomeAdmin.php?halaman=Dashboard">
              <i class="fas fa-chart-line" style="font-size: 17px; margin-right: 13px; margin-left: -2px;"></i>Dashboard</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>
          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=DaftarUser"><i class="fa fa-user mr-3" style="margin-left: -1px; margin-right: 8px;"></i>Daftar User</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>
          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=DaftarSiswa" style="margin-top: -5px;"><i class="fas fa-child mr-3"></i>Daftar Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=DaftarGuruStaff"><i class="fas fa-chalkboard-teacher" style="margin-left: -6px; margin-right: 14px;"></i>Daftar Guru & Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=FormPPDB"><i class="fa fa-paste mr-3"></i>Formulir PPDB</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px ">
          </li>
          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=Pembelian"><i class="fa fa-shopping-cart" style="margin-left: -6px; margin-right: 14px;"></i>Pembelian</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>


          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="HomeAdmin.php?halaman=Pesan"><i class="fa fa-comments" style="margin-left: -6px; margin-right: 14px;"></i>Pesan</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>

          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="#"><i class="fa fa-comments" style="margin-left: -6px; margin-right: 14px;"></i>Pesan</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>

          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="#"><i class="fa fa-comments" style="margin-left: -6px; margin-right: 14px;"></i>Pesan</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>

          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="#"><i class="fa fa-comments" style="margin-left: -6px; margin-right: 14px;"></i>Pesan</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>

          <li class="nav-item">
            <a class="nav-link bg-grey text-white" href="#"><i class="fa fa-comments" style="margin-left: -6px; margin-right: 14px;"></i>Pesan</a><hr class="bg-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>

    </div>

<!--- Content -->
    <?php 

      if(isset($_GET['halaman']))
      {
              if($_GET['halaman']=="Dashboard"){
                include 'Dashboard.php';
              }
            elseif($_GET['halaman']=="DaftarSiswa"){
                include 'DaftarSiswa.php';
            }
            elseif($_GET['halaman']=="DaftarUser"){
                include 'DaftarUser.php';
            }
            elseif($_GET['halaman']=="DaftarGuruStaff"){
                include 'DaftarGuruStaff.php';
            }
            elseif($_GET['halaman']=="FormPPDB"){
                include 'FormulirPPDBAdmin.php';
            }
            elseif($_GET['halaman']=="Pembelian"){
                include 'PembelianAdmin.php';
            }
            elseif($_GET['halaman']=="Pesan"){
                include 'PesanAdmin.php';
            }
      }
      else
      {
      include 'Dashboard.php';  
      }
     ?>
    <div class="col-md-10 p-5" style="padding-top: 100px;">
     
  </div>


<br><br><br>
</body>
</html>