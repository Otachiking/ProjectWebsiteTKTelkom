<!doctype html>
<html lang="en">
  <head>
  <!-- Style Untuk Footer-->
  <style>
    body  {
      background-image: url(BgWeb.jpg);
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
    .bg-red{
      background-color: #dc0215;
    }
    .FilterGray {
      -webkit-filter: grayscale(10000%); /* Safari 6.0 - 9.0 */
      filter: grayscale(10000%);
    }
    .copyright p{border-top:1px solid rgba(255,255,255,.1);}
}
  </style>
    <!--Ini untuk FontAwsome-->
    <script src="https://kit.fontawesome.com/0ad6824cad.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Iftar Bersama dengan Anak-Anak Yatim Piatu</title>
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
      <li class="nav-item">
        <a class="nav-link text-white" href="Proses_Home.php" style="margin-left: 540px;">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil Sekolah 
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Identitas.php">Identitas Sekolah</a>
          <a class="dropdown-item" href="VisiMisi.php">Visi & Misi</a>
          <a class="dropdown-item " href="GuruStaff.php">Guru & Staff</a>
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
          <a class="dropdown-item"  href="Gedung.php">SPP & Uang Gedung</a>
          <a class="dropdown-item " href="PakaianBuku.php">Seragam & Buku</a>
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
  <i class="fas fa-envelope mr-3" href="pesan.php" style="margin-left: 20px;" data-toggle="tooltip" data-placement="bottom" title="Pesan Masuk"></i>
        <i class="fas  fa-bell mr-3"  href="notifikasi.php"data-toggle="tooltip" data-placement="bottom" title="Notifikasi"></i>
        <i class="fas  fa-sign-out-alt" href="proses_logout.php" data-toggle="tooltip" data-placement="bottom" title="Keluar"></i>
  </div>
</nav>

<br><br><br><br><br><br><br>
<!-- YANG DIATAS JANGAN DIRUBAH-->





<!-- Sama ae Homenya mah-->
    <div class="container">
        <div class="row">
             <div class="card-header col-lg-9" style="background-color:#dc0215; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px; ">
                       <h3 style="margin-bottom: 0px;">Iftar Bersama dengan Anak-Anak Yatim Piatu</h3>
                  </div>
          <div class="col-lg-9" style="background-color: white; padding-top: 20px; padding-right: 20px; padding-left: 20px; border-bottom-left-radius : 15px; border-bottom-right-radius: 15px; margin-right: 30px;" >

            <div class="panel panel-default">

                <div class="panel-body">
                    
                   <!--  <div class="page-header">
                      
                      <h3>TK TELKOM BUAH BATU</h3><hr>
                    </div> -->

                    <img class="featureimg" src="OrphanCrop.jpg" style="width: 815px; height: 500px;">

                    <hr>
                    
                    

<p><h4 style="margin-bottom: 0px;">Iftar Bersama dengan Anak-Anak Yatim Piatu</h4>
<small class="text-muted"> Diposting pada Hari Kamis, 26 Februari 2020</small></p>
                    <hr>
                    <br>
                   <div class="" style="text-align: justify;"> 
                    <p>TK Telkom juga mengadakan makan bersama yatim piatu, mereka belajar bersosialisasi antar kawan mereka yg membutuhkan</p>

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

    <br><br><br><br><br><br><br><br>
  

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
          <li> <a href="Artikel.php">Kegiatan</a></li>
          <li> <a href="Form_PPDB">PPDB</a></li>
          <li> <a href="HubungiKami.php">Hubungi Kami</a></li>
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
    <script type="text/javascript">
      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          })
    </script>
  </body>
</html>