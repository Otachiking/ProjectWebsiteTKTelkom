<!-- mengaktifkan session
// session_start();
 
// menghapus semua session
// session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
// header("location:../index.php?pesan=logout"); -->

<!-- <?php 
  // session_start();
  // if($_SESSION['tipe_user']!="admin"){
  //   header("location:Home.php");
  // }
  ?>
 -->

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
   

<!--- Content -->
<div class="col-md-10 p-5" style="padding-top: 100px;">
      <h3><i class="fas fa-child"></i> Daftar Siswa</h3>
      <hr>
      <br>
        <div class="row text-white">
<!---------------------------------->
    <table class="table table-hover table-bordered" style="border-color: black;">
        <thead class="thead-dark" style=" color: white; border-color: black;" >
          <tr>
            <th scope="col" colspan="" style="width: 30px;; border-color: black;border-bottom-width: 1px; text-align: center; vertical-align: middle;"> Id</th>
            <th scope="col" style="width: 500px; text-align: center;; border-color: black;border-bottom-width: 1px;vertical-align: middle;">Nama Siswa</th>
            <th scope="col" style="width: 200px; text-align: center;border-color: black;border-bottom-width: 1px;vertical-align: middle;">Jenis Kelamin</th>
            <th scope="col" style="width: 100px; text-align: center;border-color: black;border-bottom-width: 1px;vertical-align: middle;">Kelas</th>
            <th scope="col" style="width: 400px; text-align: center;border-color: black;border-bottom-width: 1px;vertical-align: middle;">Nama Orang Tua</th>
            <th scope="col" style="width: 100px; text-align: center;border-color: black;border-bottom-width: 1px;vertical-align: middle;">Tahun Ajaran</th>
            <th scope="col" style="width: 50px; text-align: center;border-color: black;border-bottom-width: 1px;vertical-align: middle;"></th>
            

          </tr>
        </thead>
        

        <tbody>
          <?php $nomor=1; ?>
          <?php $ambil=$koneksi->query("SELECT * FROM siswa"); ?>
          <?php while ($pecah = $ambil->fetch_assoc()){ ?>
          

          <tr>
            <th scope="row" style="text-align: center;"><?php echo '201900'. $pecah['id']; ?></th>
            <td><?php echo $pecah['nama_siswa']; ?> </td>
            <td style="text-align: center;"><?php echo $pecah['jenis_kelamin']; ?></td>
            <td style="text-align: center;"><?php echo $pecah['kelas']; ?></td>
            <td><?php echo $pecah['nama_ortu']; ?></td>
            <td style="text-align: center;"><?php echo $pecah['tahun_ajaran']; ?></td>
            <td><a href="" class="btn-danger btn"><small>Block</small></a></td>
          
          </tr>
          <?php $nomor++ ?>
        <?php } ?>
      </tbody>
    </table>


<br><br><br>
</body>
</html>