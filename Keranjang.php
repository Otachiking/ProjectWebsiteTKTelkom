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
			.dropdown-item .active .red {
			    color: #fff;
			    text-decoration: none;
			    background-color:#dc0215;
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
					weight: 150px;
					height: 156px;
				}
				.merah img{
					height:176px;
					weight: 161px
					-webkit-filter: brightness(130%); /* Safari 6.0 - 9.0 */
     			 filter: brightness(130%); 
				}
				.hijau img{
					weight: 123px;
					height: 208.3333333333333px


				}
			}

		  </style>

	<title>Seragam & Buku</title>
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
      <li class="nav-item">
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
             <b>Pembayaran</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Gedung.php">SPP & Uang Gedung</a>
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

<!-- YANG DIATAS JANGAN DIRUBAH-->

<!-- YANG DIATAS JANGAN DIRUBAH-->

<!-- ISI NYA NI GAES-->
<main class="page">
	<div align="center" style="">
		<div class="col-md-12 col-lg-8"  style="border-radius: 15px;">
	 	<section class="shopping-cart dark">
	 		<div class="container" style="padding: 0px"  style="border-radius: 15px;">
		        <div class="block-heading">
						<br><br><br>
		          <h2>Detil Pembayaran</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
		        </div><br>
		        <div class="content"  style="border-radius: 15px;">

<!----------------------------------------------->
						<div class="summary"  style="border-radius: 15px;">
			 			<div class="container">
			 				<br>
			 					
			 					<div align="left">
			 					<div class="summary-item"><span class="text" style="font-size: 24px">Produk Yang Dibeli</span><hr>
			 					<div class="summary-item"><span class="text" style="font-size: 20px">Pakaian</span>
			 						
			 						 <br><small style="font-size: 13px"><b>&nbsp -Seragam Putih Merah</b></small> <small style="float:right; margin-top: 5px"><b> Rp 90.000</b></small>
			 								 <br><small>&nbsp&nbsp&nbsp&nbsp -Ukuran</small> <small style="float:right; margin-top: 5px"> M</small>
			 								 <br><small>&nbsp&nbsp&nbsp&nbsp -Jenis Pakaian</small> <small style="float:right; margin-top: 5px"> Laki-Laki </small>
			 								 <br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>
			 					<br>
			 						<br><small style="font-size: 13px"> <b>&nbsp -Seragam Hijau</b></small> <small style="float:right; margin-top: 5px"><b> Rp 90.000</b></small>
			 								<br><small>&nbsp&nbsp&nbsp&nbsp -Ukuran</small> <small style="float:right; margin-top: 5px"> M</small>
			 								 <br><small>&nbsp&nbsp&nbsp&nbsp -Jenis Pakaian</small> <small style="float:right; margin-top: 5px"> Laki-Laki </small>
			 								 <br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>
			 					<br>
			 						<br><small style="font-size: 13px"> <b>&nbsp -Seragam Pramuka</b></small> <small style="float:right; margin-top: 5px"><b>Rp 90.000</b></small>
			 								<br><small>&nbsp&nbsp&nbsp&nbsp -Ukuran</small> <small style="float:right; margin-top: 5px"> M</small>
			 								<br><small>&nbsp&nbsp&nbsp&nbsp -Jenis Pakaian</small> <small style="float:right; margin-top: 5px"> Laki-Laki </small>
			 								<br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>
			 					<br><br>
			 					</div>
			 					<br>
			 					<div class="summary-item"><span class="text" style="font-size: 20px">Buku</span>
			 						<br><small style="font-size: 13px"><b> &nbsp -Buku TK-A (SM 1)</b></small> <small style="float:right; margin-top: 5px"><b> Rp 30.000</b> </small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Kelas</small> <small style="float:right; margin-top: 5px"> TK-A</small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Semester</small> <small style="float:right; margin-top: 5px"> Semester 1 </small>
			 							 <br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>

			 					<br>
			 						<br><small style="font-size: 13px"><b> &nbsp -Buku TK-A (SM 2)</b></small> <small style="float:right; margin-top: 5px"><b> Rp 30.000</b> </small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Kelas</small> <small style="float:right; margin-top: 5px"> TK-A</small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Semester</small> <small style="float:right; margin-top: 5px"> Semester 2 </small>
			 							 <br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>

			 					<br>

			 						<br><small style="font-size: 13px"><b> &nbsp -Buku TK-B (SM 1)</b></small> <small style="float:right; margin-top: 5px"><b> Rp 40.000</b> </small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Kelas</small> <small style="float:right; margin-top: 5px"> TK-B</small>
			 							<br><small>&nbsp&nbsp&nbsp&nbsp -Semester</small> <small style="float:right; margin-top: 5px"> Semester 1 </small>
			 							 <br><small>&nbsp&nbsp&nbsp&nbsp -Jumlah</small> <small style="float:right; margin-top: 5px"> (1) </small>

			 					<br><br><br>
			 					<div class="summary-item"><span class="text" style="font-size: 24px">Pembayaran</span><hr>
			 					
			 					<div class="summary-item"><span class="text" style="font-size: 20px">Total Harga Produk</span><span class="price">Rp. 370.000</span></div>
			 					<div class="summary-item"><span class="text" style="font-size: 20px; color:#dc0215;">Diskon</span><span style="color: #dc0215;" class="price">25%</span></div>
			 					<div class="summary-item"><span class="text" style="font-size: 20px">Ongkos Kirim</span><span class="price">Rp 10.000</span></div>

			 					<br><br>

			 					<div class="summary-item"><span class="text" style="font-size: 25px;">Total Pembayaran</span><small style="float:right;font-size: 25px;"><b>Rp 287.500</b></small></div>

			 					
			 					</div>
			 			
			 				
						<br><br>
			 					<a type="button" class="btn btn-danger btn-lg btn-block" href="Checkout.php">Lanjutkan Pembayaran</a>
			 					<br>
			 					<br>
				 			</div>
			 			</div>
		 			</div> 
		 		</div>
	 		</div></div>
		</section>
	</main>







	<!--Footer-->
<div class="mt-5 pt-5 pb-0 footera">
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
			  <p>Jl. BKR No.11 Kota Bandung, Jawa Barat 40265</p>
			  <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+62)812-2009-8823</p>
			  <p class="mb-0"><i class="fa fa-envelope-o mr-3"></i>tsbuahbatu@gmail.com</p>
			  <p class="mb-0"><i class="fas fa-globe mr-3"></i><a href="http://telkomschools.sch.id/web/" target="_blank">www.telkomschools.sch.id</p></a>
			  <p class="mb-0" ><i class="fab fa-facebook-square mr-3"></i><a href="https://www.facebook.com/tktelkombuahbatu/" target="_blank">TKTelkomBuahBatu</p></a>
			  <p class="mb-0"><i class="fab fa-instagram mr-3"></i><a href="https://www.instagram.com/tktelkombandung/" target="_blank">@tktelkombandung</p><a>
			</div>
			</div><br>
			  <p class="text-white-50">`<font size="2.5">Made with Love ❤️🧡💛💙💜🖤& Hardworking⚔️ in Bandung, Asrama, School, Whatsapp, and Sleep. =)</font></p>
		  
		  </div>
		  <div class="mt-3 footerb">
		  <div class="container">
			<div class="row">
			<div class="col copyright mt-2">
			<div align="center">
			  <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
			</div>
		  </div>
		</div>
		</div>
		
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
