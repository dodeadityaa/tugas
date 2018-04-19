<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>subakbali</title>
  <link rel="shortcut icon" href="sawah.png">
  <!-- Bootstrap core CSS-->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="style/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="style/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
        .content-wrapper{
      background: url(nebula.jpg);
      background-size: 100%;
    }

      </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand " href="index.php">S U B A K B A L I</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                  <a class="nav-link" href="home.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Pilihan Proyek </span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
                  <a class="nav-link" href="transaksi.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Proyek Saya</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="DataMember">
                  <a class="nav-link" href="riwayat_transaksi.php">
                    <i class="fa fa-fw fa-edit"></i>
                    <span class="nav-link-text">Riwayat Transaksi </span>
                  </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paket">
                  <a class="nav-link" href="paket.php">
                    <i class="fa fa-fw fa-gift"></i>
                    <span class="nav-link-text">Saldo</span>
                  </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paket">
                  <a class="nav-link" href="paket.php">
                    <i class="fa fa-fw fa-gift"></i>
                    <span class="nav-link-text">Pengajuan Kemitraan</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
                  <a class="nav-link" href="profile.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Profile</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="HalamanWeb">
                  <a class="nav-link" href="WebLaundry/header.php">
                    <i class="fa fa-fw fa-puzzle-piece"></i>
                    <span class="nav-link-text">Halaman Web</span>
                  </a>
                </li>
              </ul>

              <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                  </a>
                </li>
              </ul>

       <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- SideNav -->
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

  <!-- Logout -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>

  </nav>
    <div class="content-wrapper">
      <div class="container-fluid">

  <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Data Transaksi</a>
              </li>
            </ol>

  <!-- Tables -->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-clock-o"></i> On Process</div>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                              <th>Id Transaksi</th>
                              <th>Id Order</th>
                              <th>Status</th>
                              <th>Proyek</th>
                              <th>Komoditas</th>
                              <th>Jumlah Slot</th>
                              <th>Nominal</th>
                              <th>Total</th>
                              <th>Tanggal</th>
                            </tr>
                          </thead>
                         <tbody>

  <!-- SQL -->
                              <?php
                                    error_reporting(E_ERROR||E_PARSE);
                                    include 'koneksi.php';

                                    
                                    $sql = "SELECT * FROM tb_transaksi where status='onproses'  ";
                                    $hasil = mysqli_query($conn,$sql);
                                    $no=1;
                                    while($baris = mysqli_fetch_array($hasil)){
                                      echo "<tr>
                                          <td>$id_transaksi</td>
                                          <td>$baris[id_older]</td>
                                          <td>$baris[status]</td>
                                          <td>$baris[proyek]</td>
                                          <td>$baris[komoditas]</td>
                                          <td>$baris[juml_slot]</td>
                                          <td>$baris[nominal]</td>
                                          <td>$baris[total]</td>
                                          <td>$baris[tanggal]</td>
                                          <td><a href='proses.php?id=$baris[id_transaksi]'>"?><i class="fa fa-fw fa-refresh"></i> 
                                            <?php echo"</td>
                                          <td><a href='editTables.php?id=$baris[id_transaksi]'>"?> <i class="fa fa-fw fa-edit"></i> <?php echo"</td>
                                          <td><a href='batal.php?iddelete=$baris[id_transaksi]'>"?> <i class="fa fa-fw fa-trash-o"></i> <?php echo"</td>
                                        </tr>";
                                      $no++;
                                    }
                              ?>
                           </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
        </div>
      </div>
    </div>

  <!-- Footer -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>

  <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>

  <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="beranda.html">Logout</a>
              </div>
            </div>
          </div>
        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="style/vendor/jquery/jquery.min.js"></script>
    <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="style/vendor/datatables/jquery.dataTables.js"></script>
    <script src="style/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="style/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="style/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
