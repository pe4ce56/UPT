
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/lightbox.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/ind.css">
    <style>
    body {
  min-height: 500px;

}
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top  shadow-lg p-3 bg-white rounded">
      <div class="container">
        <a class="navbar-brand">
          <div class="d-flex align-items-center">
            <img src="<?=base_url()?>/gambar/logojawatimur.png" alt="Prov Jatim Logo">
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
              <a href="<?=base_url('admin/hasilanalisis')?>" class="nav-link"><i class="fa fa-arrow-left"></i> KEMBALI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
  <p class="text-center" style="font-size: 50px; margin-top: 150px; font-weight:bold;">Sertifikat</p>
  <hr>

  <div class="container">
    <form action="" enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="name"  name="judul" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Pilih PDF</label>
    <input type="file" class="form-control-file" id="gambar_serti" name="data_pdf" required>
    <small  class="form-text text-muted">Gambar berformat PDF</small>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>

  <div class="container mb-4">

  </div>
  <!-- <section class="sec contact"> -->
  <footer class="footer" style="margin-top: 100px;">
    <div class="content">
      <p class="copyright" align="center">Copyright 2020 © UPTPKUKMJATIM. All Right Reserved.</p>
    </div>
  </footer>
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>/template/dist/js/adminlte.min.js"></script>
  <script src="<?=base_url()?>/template/dist/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>