<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/lightbox.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/ind.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/css/buttons.bootstrap4.min.css">
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

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="font-size: 12px;"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="<?=base_url('home')?>" class="nav-link">BERANDA</a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('sertifikat')?>" class="nav-link">KEMBALI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
  <p class="text-center" style="font-size: 35px; margin-top: 150px; text-transform: uppercase;">Sertifikat Peserta Webinar</p>
  <hr>
  <section class="content">
    <div class="container ">
      <table id="table" class="table table-hover table-striped table-bordered">

        <thead class="mb-3">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Bidang Sertifikat</th>
            <th scope="col">Instansi/Kop/UKM</th>
            <th scope="col">No.Sertifikat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data as $row) : ?>
            <tr>
              <td><?= $row["No"] ?></td>
              <td><?= $row["Nama"] ?></td>
              <td><?= $row["Bidang_Sertifikat"] ?></td>
              <td><?= $row["Instansi_Kop_UKM"] ?></td>
              <td><?= $row["No_Sertifikat"] ?></td>
              <td>
                <a class="btn btn-warning" style="margin-bottom: 8px;" href="img_webinar/<?= $row["gambar"] ?>" data-lightbox="mygallery">
                  <i class="fa fa-eye"></i>
                </a>&nbsp;
                <a class="btn btn-info" href="" Download="img_webinar/<?= $row["gambar"] ?>">
                  <i class="fa fa-download"></i>
                </a>&nbsp;
              </td>
            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Bidang Sertifikat</th>
            <th scope="col">Instansi/Kop/UKM</th>
            <th scope="col">No.Sertifikat</th>
            <th scope="col">Aksi</th>
          </tr>
        </tfoot>
      </table>

  </section>
  <!-- <section class="sec contact"> -->
  <footer class="footer" style="margin-top: 100px;">
    <div class="content">
      <p class="copyright" align="center">Copyright 2020 © UPTPKUKMJATIM. All Right Reserved.</p>
    </div>
  </footer>
  <!-- REQUIRED SCRIPTS -->

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <!-- jQuery -->
  <script type="text/javascript" src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Bootstrap 4 -->
  <script type="text/javascript" src="<?=base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <!-- <script src="../../../dist/js/adminlte.min.js"></script> -->
  <script src="<?=base_url()?>/template/dist/js/lightbox-plus-jquery.min.js"></script>
  <!-- DataTables -->
  <script src="<?=base_url()?>/template/dist/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.colVis.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        scrollY: "400px",
        scrollX: true,
        scrollCollapse: true,
        select: true,
      });

      $('body').on('click', '.btn-edit', function(e) {
        let no = $(this).data('id')
        let name = $(this).data('name')
        let bidangSertifikat = $(this).data('bidang-sertifikat')
        let instansiKop = $(this).data('instansi-kop')
        let noSertifikat = $(this).data('no-sertifikat')
        console.log(name);
        // $("input[name='No']").val(no)
        $('#formEditAction').attr('action', 'edit.php?id='+no);
        $("input[name='nama']").val(name)
        $("input[name='bidang']").val(bidangSertifikat)
        $("input[name='instansi']").val(instansiKop)
        $("input[name='nomor']").val(noSertifikat)
      })
    });
  </script>
</body>

</html>
