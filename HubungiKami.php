
<!DOCTYPE html>
<html>
<head>
  <!-- Style Untuk Footer-->
  <style>
      body  {
        background-image: url(BgWeb.jpg);
      }
      .bg-red{
        background-color:#dc0215;
      }
      .dropdown-item .active .red {
          color: #fff;
          text-decoration: none;
          background-color:#dc0215;
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
      .plus-minus-input {
        align-items: center;
        .input-group-field {
          text-align: center;
          margin-left: 0.5rem;
          padding: 1rem;

          &::-webkit-inner-spin-button,
          ::-webkit-outer-spin-button {
            appearance: none;
          }
        }

        .input-group-button {
          .circle {
            border-radius: 50%;
            padding: 0.25em 0.8em;
          }
        }
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
      .FilterGray {
        -webkit-filter: grayscale(10000%); /* Safari 6.0 - 9.0 */
        filter: grayscale(10000%);
      }
      .copyright p{border-top:1px solid rgba(255,255,255,.1);}
      }
      .shopping-cart{
        padding-bottom: 50px;
        font-family: 'Montserrat', sans-serif;
      }

      .shopping-cart.dark{
        background-color: #f6f6f6;
      }

      .shopping-cart .content{
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        background-color: white;
      }

      .shopping-cart .block-heading{
        padding-top: 50px;
        margin-bottom: 40px;
        text-align: center;
      }

      .shopping-cart .block-heading p{
        text-align: center;
        max-width: 420px;
        margin: auto;
        opacity:0.7;
      }

      .shopping-cart .dark .block-heading p{
        opacity:0.8;
      }

      .shopping-cart .block-heading h1,
      .shopping-cart .block-heading h2,
      .shopping-cart .block-heading h3 {
        margin-bottom:1.2rem;
        color: black;
      }

      .shopping-cart .items{
        margin: auto;
      }

      .shopping-cart .items .product{
        margin-bottom: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .shopping-cart .items .product .info{
        padding-top: 0px;
        text-align: center;
      }

      .shopping-cart .items .product .info .product-name{
        font-weight: 600;
      }

      .shopping-cart .items .product .info .product-name .product-info{
        font-size: 14px;
        margin-top: 15px;
      }

      .shopping-cart .items .product .info .product-name .product-info .value{
        font-weight: 400;
      }

      .shopping-cart .items .product .info .quantity .quantity-input{
        margin: auto;
        width: 80px;
      }

      .shopping-cart .items .product .info .price{
        margin-top: 15px;
        font-weight: bold;
        font-size: 22px;
      }

      .shopping-cart .summary{
        border-top: 2px solid #dc3545;
        background-color: #f7fbff;
        height: 100%;
        padding: 30px;
      }

      .shopping-cart .summary h3{
        text-align: center;
        font-size: 1.3em;
        font-weight: 600;
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .shopping-cart .summary .summary-item:not(:last-of-type){
        padding-bottom: 10px;
        padding-top: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }

      .shopping-cart .summary .text{
        font-size: 1em;
        font-weight: 600;
      }

      .shopping-cart .summary .price{
        font-size: 1em;
        float: right;
      }

      .shopping-cart .summary button{
        margin-top: 20px;
      }

      @smallia (min-width: 768px) {
        .shopping-cart .items .product .info {
          padding-top: 25px;
          text-align: left; 
        }

        .shopping-cart .items .product .info .price {
          font-weight: bold;
          font-size: 22px;
          top: 17px; 
        }

        .shopping-cart .items .product .info .quantity {
          text-align: center; 
        }
        .shopping-cart .items .product .info .quantity .quantity-input {
          padding: 4px 10px;
          text-align: center; 
        }
        .summary {
          border-top: 2px solid #dc3545;
          border-top-width: 2px;
          border-top-style: solid;
          border-top-color: rgb(220, 53, 69);
          background-color: #f8f9fa;
          height: 100%;
          padding: 30px;
        }
        .keren img{
          width: 150px;
          height: 156px;
        }
        .merah{
          height: 176px;
          width: 161px
          -webkit-filter: brightness(130%); /* Safari 6.0 - 9.0 */
           filter: brightness(130%); 
        }
        .hijau img{
          width:123px;
          height: 208.3333333333333px;


        }
      }

      </style>

  <title>Donasi | TK Telkom Bandung</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="plus-minus-input.js" rel="stylesheet">

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
        <a class="nav-link text-white" href="Proses_Home.php" style="margin-left: 540px;">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil Sekolah
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="Identitas.php">Identitas Sekolah</a>
          <a class="dropdown-item " href="VisiMisi.php">Visi & Misi</a>
          <a class="dropdown-item " href="GuruStaff.php">Guru & Staff</a>
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
          <a class="dropdown-item" href="Gedung.php">SPP & Uang Gedung</a>
          <a class="dropdown-item " href="PakaianBuku.php">Seragam & Buku</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Donasi.php">Donasi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white active" href="HubungiKami.php"><b>Hubungi Kami</b></a>
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

<br><br><br>

<!-- Batasssssss------>

<div class="container">
  <br><br>
 <div class="container" style="border-radius: 20px; background-color: white; padding: 10px; padding-left: 70px;padding-right: 70px">
      <br>
      <h3 style="margin-bottom: 20px;"><center> Hubungi Kami </center></h3>
      <br>
      <div class="row">
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.53773814199565!2d107.62162518024947!3d-6.937863196961395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87d55c3df5f%3A0x1daafdc67fe3f9ff!2sTelkom%20School%20Buah%20Batu!5e0!3m2!1sid!2sid!4v1581393737425!5m2!1sid!2sid" width="500" height="350" frameborder="1" style="border:2px solid black; border-color: gray;" allowfullscreen=""></iframe>

          </div>
          <div class="col-md-4" style="margin-left: 50px;">  
            <div align="left" style="margin-right: ">
              <br>
              <h4 class="">Lokasi</h4>
                    <p>Jl. BKR No.11, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265</p>
              <br><br>
              <h4 class="">Sosial Media</h4>
                    <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+62)812-2009-8823</p>
                    <p class="mb-0"><i class="fa fa-envelope-o mr-3"></i>tsbuahbatu@gmail.com</p>
                    <p class="mb-0"><i class="fas fa-globe mr-3"></i><a href="http://telkomschools.sch.id/web/" target="_blank">www.telkomschools.sch.id</p></a>
                    <p class="mb-0" ><i class="fab fa-facebook-square mr-3"></i><a href="https://www.facebook.com/tktelkombuahbatu/" target="_blank">TKTelkomBuahBatu</p></a>
                    <p class="mb-0"><i class="fab fa-instagram mr-3"></i><a href="https://www.instagram.com/tktelkombandung/" target="_blank">@tktelkombandung</p><a>
            <br><br>
            </div>
          </div>
      
    </div>


    <br>
  </div>
    <br>

  <div class="container" style="border-radius: 20px; background-color: white; padding: 10px; padding-left: 70px;padding-right: 70px;"> <br><br>
                                  <div align="center">
                                    <img src="Logo_TK_Telkom.svg" weight="50" height="50" alt="Logo TK Telkom ">
                                    </div> <br>
            <h3> Kirimkan Tanggapan Anda Untuk Kami! </h3>
            <span>&nbsp&nbsp&nbspKami sangat senang untuk mendengar pendapat Anda. Berikan kami tanggapan atau kirimkan laporan bila terjadi masalah untuk mengembangkan website ini. =)</span>
            <br><br><br><br>
            <div class="row">
              <div class="col-md-6">
                <h4>Identitas</h4> <br>
                <div class="input-group mb-4 col-md-11">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user" style="width: 18px;"></i></span>
                    </div>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" aria-label="Username" aria-describedby="basic-addon1"  required="">
                </div>
                  
                  <div class="input-group col-md-11">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope-o" style="width: 18px;"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" aria-label="Username" aria-describedby="basic-addon1"  required="@">
                  </div><br>
                  <h4>Jenis Pesan</h4><br>
                      <div class="row">
                        <div class="container" style="margin-left: 20px;">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Komentar"  name="JenisLaporan" class="custom-control-input">
                            <label class="custom-control-label" for="Komentar">Komentar</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="LaporanBug" name="JenisLaporan" class="custom-control-input">
                            <label class="custom-control-label" for="LaporanBug">Laporan Bug</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Pertanyaan" name="JenisLaporan" class="custom-control-input">
                            <label class="custom-control-label" for="Pertanyaan">Pertanyaan</label>
                          </div>
                      </div>   
                      </div> 

              </div>

              <div class="col-md-5">
                  <h4>Pesan</h4> <br>
                  <div class="input-group col-md-18">
                    <div class="input-group-prepend" style="height: auto;">
                      <span class="input-group-text"><i class="far fa-comments" ></i></span>
                    </div>
                    <textarea style="min-height: 144px;" class="form-control" id="validationTextarea" placeholder="Masukkan Pesan Anda Disini." required></textarea><br><br><br><br><br><br>
                      <div class="invalid-feedback">
                        Please enter a message in the textarea.
                      </div>
                  </div>
        <br>    <!-- <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                      <label class="custom-file-label" for="inputGroupFile04">Tambahkan File atau Foto (Opsional)</label>
                    </div>
                </div> -->
                <div class="container form-control" style="margin-top: 5px;">
                  <div class="input-group">
                    <div class="custom-file" style="margin-top: -7px;">
                      <input type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    </div>
                    
                  </div>
                </div>
                    
        
                    <div align="right">
                      <br><br>
                         <button type="submit" class="btn btn-danger float-right">Simpan</button>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      </div>
              </div>
                </div>
                
      

      <br><br><br>
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
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          })
    </script>
</body>
</html>