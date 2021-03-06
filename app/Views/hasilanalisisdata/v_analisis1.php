<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/ind.css">

  <!-- <style>
    .gallery{
      margin: 5px;
      border:1px solid #ccc;
      float: left;
      width: 390px;

    }
    .gallery img{
      width: 100%;
      height: auto;

    }
  </style> -->
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top  shadow-lg p-3 bg-white rounded">
      <div class="container">
        <a class="navbar-brand">
          <div class="d-flex align-items-center">
            <img src="<?= base_url() ?>/gambar/logojawatimur.png" alt="Prov Jatim Logo">
            <h6>
              <div class="brand-text font-weight-primary">
                <p> &nbsp; &nbsp;UPT Pelatihan Dinas Koperasi Dan UKM <br>
                  &nbsp; &nbsp;Provinsi Jawa Timur</p>
              </div>
            </h6>
          </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="font-size: 12px;"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
              <a href="<?= base_url('home') ?>" class="nav-link"  >BERANDA</a>
            </li>
            <li class="nav-item" >
             <button onclick="Swal.fire()">swal</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
  <p class="text-center" style="font-size: 40px; margin-top: 150px; text-transform: uppercase;">Hasil Analisis Data</p>
  <hr>
  <div class="container mt-3">

    <div class="row">
    <?php if(isset($_GET['data_pdf'])){
  				$data_pdf = $_GET['data_pdf'];
  				$sql ="select * from hasil_analisis where data_pdf='$data_pdf'";
  			 }
        //else{
  			// 	$sql = mysqli_query($koneksi,"select * diagram_coba");
  			// } ?>
      <?php foreach($data as $row) : ?>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body" style="background-color:#ededf0">
            <h5 class="card-title" style="color:black;  font-size: 25px;"><?= $row["judul"]?></h5> <br>
            <hr>
            <iframe src="pdf_data/<?= $row["data_pdf"]?>"></iframe>
            <p class="card-text mt-2" style="color: black;">Senin,20 Juli 2020</p>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>

  <div class="container mt-3">
    <nav aria-label="...">
      <ul class="pagination pagination-sm justify-content-end">
        <li class="page-item disabled">
          <a class="page-link" href="pdf.php" tabindex="-1" aria-disabled="true">Previous</a>

        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="pdf2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="pdf3.php">3</a></li>
        <li class="page-item">
          <a class="page-link" href="pdf2.php">Next</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container mb-4">

  </div>
  <!-- <section class="sec contact"> -->
<?php 
echo view('layout/v_footer');
?>
</body>

</html>
