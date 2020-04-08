<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body  {
        background-image: url(BgWeb.jpg);
      }
      .nav-link {
        display: block;
        padding: .5rem 1rem;
        padding-top: 0.5rem;
        padding-right: 1rem;
        padding-bottom: 100px;
        padding-left: 1rem;
    }
      ul li > a {
        position: relative;
        text-decoration:none;
        color: white;
      }
       ul li > a:hover {
        color: white;
      }
      ul li > a:before {
       content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: white;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
      }
      ul li > a:hover:before {
        visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
      }
     
      .container {
        max-width: 960px;
      }
      .row .card:hover{
        box-shadow: 2px 2px 7px rgba(0,0,0,0,4);
        transform: scale(1.03);
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

    .BgWeb  {
      background-image: url(BgWeb.jpg);
    }
    .bg-red{
        background-color:#dc0215;
      }
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
    .ml6 {
      position: relative;
      font-weight: 900;
      font-size: 3.3em;
    }

    .ml6 .text-wrapper {
      position: relative;
      display: inline-block;
      padding-top: 0.2em;
      padding-right: 0.05em;
      padding-bottom: 0.1em;
      overflow: hidden;
    }

    .ml6 .letter {
      display: inline-block;
      line-height: 1em;
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
    .carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform 10.100s ease-in-out;
    transition: transform 10.100s ease-in-out;
    transition: transform 10.100s ease-in-out,-webkit-transform 10.100s ease-in-out;
    }
  </style>
    <!--Ini untuk FontAwsome-->
    <script src="https://kit.fontawesome.com/0ad6824cad.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Artikel - TK Telkom Buah Batu</title>
   
  </head>
  <body>
     <!--Ini untuk FontAwsome-->
  <script src="https://kit.fontawesome.com/0ad6824cad.js" crossorigin="anonymous"></script>

  <!-- Ini Navbar --->
  <nav class="navbar navbar-expand-lg navbar-light bg-red fixed-top " >
  <div class="container" style="margin-right: 30px; margin-left: 30px;">
  <a class="navbar-brand" href="Proses_Home.php"   style= "margin-right: 8px;">
        <img src="Logo_TK_Telkom.png" width="50" height="50" class="d-inline-block align-top"><mr-top-10>
      </a>
      <a class="navbar-brand" href="Proses_Home.php">
        <img src="LogoCropColorfulWhite.png" width="115" height="50" class="d-inline-block align-top ml-0 "><mr-top-10>
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: -500px;">
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item active">
        <a class="nav-link text-white" href="Proses_Home.php" style="margin-left: 540px;">Beranda<span class="sr-only">(current)</span></a>
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
        <a class="nav-link text-white" href="Artikel.php"><b>Kegiatan</b></a>
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
    <a class="unf-header-menu_button" href="Proses_Logout.php" data-testid="btnHeaderLogin"> 
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-testid="btnHeaderLogin"> 
    <SPAN> Keluar</SPAN>
  </button>
    </a>
  </div>
  <div class="icon" style="margin-right: -25px; font-size: 18px;" align="right"> 
  <i class="fas fa-envelope mr-3" style="margin-left: 20px;" data-toggle="tooltip" data-placement="bottom" title="Pesan Masuk"></i>
        <i class="fas  fa-bell mr-3" data-toggle="tooltip" data-placement="bottom" title="Notifikasi"></i>
        <i href="proses_logout.php" class="fas  fa-sign-out-alt" data-toggle="tooltip" data-placement="bottom" title="Keluar"></i>
  </div>
</nav>
<br><br><br><br><br><br><br>
<!-- YANG DIATAS JANGAN DIRUBAH-->




<!-- Sama ae Homenya mah-->
    <div class="container">
        <div class="row" >

          <div class="card-header col-lg-9" style="background-color:#dc0215; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px; ">
                       <h3 style="margin-bottom: 0px;">Peduli Lingkungan Sejak Dini</h3>
                  </div>
          <div class="col-lg-9" style="background-color: white; padding-top: 20px; padding-right: 20px; padding-left: 20px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; margin-right: 30px;" >
            <div class="panel panel-default">

                <div class="panel-body">
                  
                    <div class="page-header">
                      
        
                    </div>

                    <img class="featureimg" src="Liburan.jpg" style="width: 815px; height: 500px;">

                    <hr>
                    <p><h4 style="margin-bottom: 0px;">Peduli Lingkungan Sejak Dini</h4>
                    <small class="text-muted"> Diposting pada Hari Kamis, 26 Februari 2020</small></p>
                    <hr>
                    <br>
               

                   <div class="" style="text-align: justify;"> 
                    <p>Pendidikan di Sekolah TK Telkom Buah Batu ini kita mengajari agar setiap anak harus peduli dengan lingkungan sekitar. Mereka belajar menyayangi lingkungan hidup dan hewan di sekitar</p>

                    <p>YPT juga memiliki lembaga riset yang sekaligus merupakan lembaga inkubasi bisnis, Bandung Techno Park, yang merupakan role model Techno Park di Indonesia. Good Corporate/University Governance yang didukung oleh strategi Quality Excellence, melalui berbagai kebijakan mutu yang mengacu kepada regulasi yang berlaku (diantaranya DIKTI, BAN PT, dsb) dan dikemas dengan ISO 9001:2008 diharapkan dapat meningkatkan kepuasan serta membina hubungan baik jangka panjang dengan pihak Stakeholders. Dalam penyelenggaraan lembaga pendidikan, sumber pendanaan YPT di dukung oleh unit usaha yang bergerak di berbagai bidang.</p>
                  </div>
                  <br>
                  <hr>
                  <br>
                    <p><h4><b>VISI:</b></h4></p>

                    <p>Menjadi yayasan pendidikan yang bermutu dengan standar internasional, untuk membentuk insan berkarakter unggul, dalam membangun perdaban bangsa.</p>
                  <br>
                    <p><h4><b>MISI:</b></h4></p>

                    <p>Menyelenggarakan pendidikan berstandar internasional.
Mengembangkan sistem pembinaan, untuk pembentukan manusia yang berkarakter unggul, dalam membangun peradaban bangsa.Menyelenggarakan pendidikan berstandar internasional.
Mengembangkan sistem pembinaan, untuk pembentukan manusia yang berkarakter unggul, dalam membangun peradaban bangsa.</p>
                  <br>
                  <hr>

                </div>

            </div>

        </div>

        <div class="col-lg-2" style="background-color: #333; border-radius: 15px;">
          
        <p> Halooooo </p>
      </div>
      </div>

    </div>

    <br><br><br><br><br>
<!--Footer-->
<div class="5 pt-5 pb-0 footera">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2 style="mr-5">TK Telkom Buah Batu <img class="FilterGray" src="Logo_TK_Telkom.svg" weight="33" height="33" alt="Logo TK Telkom" style="ml-3 mb-10 pl-0"></h2>
      <p class="pr-5 text-white-50">Taman kanak-kanak dengan berintegrasikan nilai-nilai ajaran Agama Islam, dibawah naungan Yayasan Pendidikan Telkom, Telkom Schools. </p>
     
      <p class=""><small class="text-white-50">Berasosiasi dengan:</small></p>
      <div align="left">
      <div class="FilterWhite">
    <img src="LogoYPT.png" weight="45" height="45" alt="LogoYPT"> &nbsp
    <img src="telkomschool.png" weight="30" height="30" alt="LogoTelkomSchool"> &nbsp
    <img style="mt-100" src="LogoTelkomPutih.png" weight="29" height="29" alt="LogoSMK">
    </div>
      </div>
      <p><a href="#"></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Menu</h4>
        <ul class="m-0 p-0 mb-3">
          <li> <a href="Home.php">Beranda</a></li>
          <li> <a href="VisiMisi.php">Visi & Misi</a></li>
          <li> <a href="#">Kegiatan</a></li>
          <li> <a href="Form_PPDB">PPDB</a></li>
          <li> <a href="SPP.php">Pembayaran SPP</a></li>
          <li> <a href="WebDesigner.php">Perancang Website</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Lokasi</h4>
      <p>Jl. BKR No.11, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+62)812-2009-8823</p>
      <p class="mb-0"><i class="fa fa-envelope-o mr-3"></i>tsbuahbatu@gmail.com</p>
      <p class="mb-0"><i class="fas fa-globe mr-3"></i><a href="http://telkomschools.sch.id/web/" target="_blank">www.telkomschools.sch.id</p></a>
      <p class="mb-0" ><i class="fab fa-facebook-square mr-3"></i><a href="https://www.facebook.com/tktelkombuahbatu/" target="_blank">TKTelkomBuahBatu</p></a>
      <p class="mb-0"><i class="fab fa-instagram mr-3"></i><a href="https://www.instagram.com/tktelkombandung/" target="_blank">@tktelkombandung</p><a>
    </div>
    </div><br>
      <p class="text-white-50 yeah">`<font size="2.5">Made with Love ❤️️🧡💛💙💜🖤& Hardworking⚔️ in Bandung, Asrama, School, Whatsapp, and Sleep. =)</font></p>
  
  </div>
  <div class="mt-3 footerb">
  <div class="container">
    <div class="row">
    <div class="col copyright mt-2">
    <div align="center">
      <p    style="border-top-width: 0px;"><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
<!-- Batasssssss------>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript">
      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          })
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </body>

    <!-- <script type="text/javascript">
      $('.carousel').carousel('bs.carousel')

    </script> -->

   <script type="text/javascript">
      // Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: 2})
  .add({
    duration: 1000,
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  });
    </script>

</html>
        