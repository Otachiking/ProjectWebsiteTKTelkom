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

	<title>Form Checkout</title>
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
	<br><br><br>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="Logo_TK_Telkom.svg" alt="" width="100" height="100">
    <h2>Formulir Pembayaran</h2>
    <p class="lead"></p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="">Alamat Rekening</span>
        <span class="badge badge-secondary badge-pill"></span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed" style="color: white; background-color: #333;">
          <div>
            <h6 class="my-0" style="color:white;">Bank Mandiri Syariah</h6>
            <small class="text" style="color: white;">No Rekening</small>
          </div>
          <span class="text" style="color:white;">054.02.02.32681</span>
        </li>
      </ul>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed" style="color: white; background-color: #333;">
          <div>
            <h6 class="my-0">Bank Mandiri</h6>
            <small class="text" style="color: white;">No Rekening</small>
          </div>
          <span class="text" style="color: white;">0230-01-000586.308</span>
        </li>
      </ul>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed" style="color: white; background-color: #333;">
          <div>
            <h6 class="my-0">Bank BCA</h6>
            <small class="text" style="color: white;">No Rekening</small>
          </div>
          <span class="text" style="color: white;">0230-01-000586.308</span>
        </li>
      </ul>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed" style="color: white; background-color: #333;">
          <div>
            <h6 class="my-0">Bank BJB</h6>
            <small class="text" style="color: white;">No Rekening</small>
          </div>
          <span class="text" style="color: white;">3002-01-000783.424</span>
        </li>
      </ul>
      	<small class="text-muted">Transfer biaya pembayaran ke nomor rekening yang tertera di atas. Dan kirimkan hasil bukti pembayaran di bawah ini.</small>
      	 <br><br>

                <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
  </div>
  
                    <!-- <input type="file"  name=""  placeholder="Masukkan Nama Wali Anda (Opsional)" multiple>
      -->
       <!--  <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li> -->
      

      <!-- <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Kode Promo">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>



    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Alamat Tagihan</h4>
      <form class="needs-validation" novalidate="">

        <div class="mb-3">
          <form method="POST" action="proses_daftar_akun.php" enctype="multipart/form-data">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user" style="width: 18px;"></i></span>
                    </div>
                    <input type="text" name="nama_ortu" class="form-control" placeholder="Masukkan Nama Orangtua/Wali" aria-label="Username" aria-describedby="basic-addon1"  required="">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-child" style="width: 18px;"></i></span>
                    </div>
                    <input type="text" name="nama_anak" class="form-control" placeholder="Masukkan Nama Anak " aria-label="Username" aria-describedby="basic-addon1"  required="">
                  </div>
                  
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-mobile" style="width: 18px;"></i></span>
                    </div>
                    <input type="tel" pattern="{0-9}" required="" name="no_hp" class="form-control" placeholder="Masukkan Nomor HP Anda">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope-o" style="width: 18px;"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email" aria-label="Username" aria-describedby="basic-addon1"  required="@">
                  </div>
                   <div class="input-group mb-1">
                    <div class="input-group-prepend" >
                      <span class="input-group-text"><i class="fa fa-home" style="width: 18px;"></i><span>
                    </div>
                    <textarea class="form-control" id="validationTextarea" style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="Masukkan Alamat Rumah Anda. Seperti: Jl.Radio 2 No. 10, Dayeuhkolot, Bandung, Jawa Barat." required></textarea>
                  </div>



            </span>
          </span></div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Kota/Kabupaten</label>
            <select class="custom-select d-block w-100" id="country" required="">
              <option value="">Pilih Kota/Kabupaten..</option>
              <option>Kota Bandung</option>
              <option>Kabupaten Bandung</option>
            </select>
            <div class="invalid-feedback">
              Harap masukkan kota alamat tujuan.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Kecamatan</label>
            <select class="custom-select d-block w-100" id="state" required="">
              <option value="">Pilih Kecamatan..</option>
               <option>---Kota Bandung---</option>
                     <option> Andir </option>
					 <option> Antapani </option>
					 <option> Arcamanik </option>	
					 <option> Astana Anyar </option>	
					 <option> Babakan Ciparay	</option>
					 <option> Bandung Kidul	</option>
					 <option> Bandung Kulon	</option>
					 <option> Bandung Wetan	</option>
					 <option> Batununggal	</option>
					 <option> Bojongloa Kaler </option>
					 <option> Bojongloa Kidul	</option>
					 <option> Buahbatu </option>
					 <option> Cibeunying Kaler </option>
					 <option> Cibeunying Kidul </option>
					 <option> Cibiru	</option>
					 <option> Cicendo	</option>
					 <option> Cidadap </option>
					 <option> Cinambo </option>
					 <option> Coblong	</option>
					 <option> Gegebage	</option>
					 <option> Kiara Condong	</option>
					 <option> Lengkong </option>
					 <option> Mandalajati </option>
					 <option> Panyileukan </option>
					 <option> Rancasari </option>
					 <option> Regol	 </option>
					 <option> Sukajadi </option>
					 <option> Sukasari </option>
					 <option> Sumur Bandung </option>
					 <option> Ujung Berung </option>



              <option>---Kabupaten Bandung---</option>
		              <option>Arjasari </option>
		              <option>Baleendah </option>
		              <option>Banjaran </option>
		              <option>Bojongsoang </option>
		              <option>Cangkuang </option>
		              <option>Cicalengka </option>
		              <option>Cikancung </option>
		              <option>Cilengkrang </option>
		              <option>Cileunyi </option>
		              <option>Cimaung </option>
		              <option>Cimenyan </option>
		              <option>Ciparay </option>
		              <option>Ciwidey </option>
		              <option>Dayeuhkolot </option>
		              <option>Ibun </option>
		              <option>Katapang </option>
		              <option>Kertasari </option>
		              <option>Kutawaringin </option>
		              <option>Majalaya </option>
		              <option>Margaasih </option>
		              <option>Margahayu </option>
		              <option>Nagreg </option>
		              <option>Pacet </option>
		              <option>Pameungpeuk </option>
		              <option>Pangalengan </option>
		              <option>Paseh </option>
		              <option>Pasirjambu </option>
		              <option>Rancabali </option>
		              <option>Rancaekek </option>
		              <option>Solokan </option>
		              <option>Jeruk </option>
		              	<option>Soreang </option>
            </select>
            <div class="invalid-feedback">
              Harap masukkan kecamatan alamat tujuan..
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Kode Pos</label>
            <input type="text" class="form-control" id="zip" placeholder="Kode Pos" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Kurir Pengantaran</h4>
      <div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" required="">
	  <label class="custom-control-label" for="customRadioInline1" style="margin-right: 80px;">JNE</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" required="">
		  <label class="custom-control-label" for="customRadioInline2" style="margin-right: 80px;">J&T</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" required="">
		  <label class="custom-control-label" for="customRadioInline3" style="margin-right: 80px;">Tiki</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input" required="">
		  <label class="custom-control-label" for="customRadioInline4" style="margin-right: 0px;">Si Cepat</label>
		</div>
        
        <hr class="mb-4">

        <h4 class="mb-3">Metode Pembayaran</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="credit">Kartu Debit</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Kartu Kredit</label>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Atas Nama Kartu</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted"> Sesuaikan Nama Lengkap sesuai dengan yang tertera di kartu </small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Nomor Kartu</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Tanggal Kedaluwarsa</label>
            <input type="number" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-danger btn-lg btn-block" type="submit" href="CheckoutFinish.php">Lanjutkan Pembayaran</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2019-2020 TK Telkom Buah Batu, Bandung</p>
   
  </footer>
</form>
</div>







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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--Ini untuk FontAwsome-->
	<script src="https://kit.fontawesome.com/0ad6824cad.js" crossorigin="anonymous"></script>
	<script src="./Checkout example · Bootstrap_files/jquery-3.4.1.slim.min.js.download" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="./Checkout example · Bootstrap_files/bootstrap.bundle.min.js.download" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="./Checkout example · Bootstrap_files/form-validation.js.download"></script>
        <script type="text/javascript">
      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          })
    </script>

 
</body>
</html>
