<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PD.MUNCUL REZEKI | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="https://chat.whatsapp.com/Eq99dhV4lDR5S41T3Pods1" target="_blank" rel="noopener noreferrer" class="nav-link">Kontak</a>
        </li>
      </ul>

      <!-- Right navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark elevation-4">
      <!-- Brand Logo -->
      <a href="home.php" class="brand-link" style="color: black;">
        <img src="logokusen.png"alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PD.MUNCUL REZEKI</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="profile1.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info" style="text-white" >
            <a href="profile.php" style="color: black;">Profile Admin</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Data Pembeli
                <i class="right fas fa-angle-left"></i>
              </p>
              
                <a href="index.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-sign-out"></i>
                  <p>Logout</p>
                </a>
              </li>  
            </ul>
            </a>
          </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Pembeli</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- /.card -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Pembeli</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <!-- The Modal -->
                        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#myModal">
                          Input Data Pelanggan
                        </button>
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">

                                <h4 class="modal-title">Input Data Pelanggan</h4>
                                <form action="Input.php" method="POST" enctype="multipart/form-data">
                                  <!-- Modal Body -->
                                  <div class="modal-body">
                                    <div class="mb-3 mt-3">
                                      <label for="ID_Pelanggan">ID_Pelanggan:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="ID_Pelanggan" placeholder="ID_Pelanggan"
                                      name="ID_PELANGGAN">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="Nama_Pelanggan">Nama_Pelanggan:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="Nama_Pelanggan" placeholder="Nama_Pelanggan"
                                      name="NAMA_PELANGGAN">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="Produk">Produk:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="Produk" placeholder="Produk"
                                      name="PRODUK">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="Harga">Harga:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="Harga" placeholder="Harga"
                                      name="HARGA">
                                    </div>
                                     <div class="mb-3 mt-3">
                                      <label for="Alamat">Alamat:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="Alamat" placeholder="Alamat"
                                      name="ALAMAT">
                                    </div>
                                     <div class="mb-3 mt-3">
                                      <label for="No_Telp">No_Telp:</label>
                                      <input type="text"
                                      class="form-control"
                                      id="No_Telp" placeholder="No_Telp"
                                      name="NO_TELP">
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                      <a href="data.php"> <button type="submit"
                                        data-bs-dismiss="modal">Save</button>
                                      </a>
                                      <a href="data.php"> <button type="submit"
                                        data-bs-dismiss="modal">Close</button>
                                      </a>
                                    </div>
                                  </form>
                                </div>
                              </div>
                              <button type="button" class="btn-close"
                              data-bs-dismiss="modal"></button>
                            </button>
                            <tr>
                              <th>ID_Pelanggan</th>
                              <th>Nama_Pelanggan</th>
                              <th>Produk</th>
                              <th>Harga</th>
                              <th>Alamat</th>
                              <th>No_Telp</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include 'Koneksi.php';
                            $SQL = "SELECT * FROM tb_barang";
                            $result = mysqli_query($conn, $SQL);
                            while ($row = mysqli_fetch_array($result)){ ?>
                              <tr>
                                <td><?php echo $row['ID_Pelanggan'] ?></td>
                                <td><?php echo $row['Nama_Pelanggan'] ?></td>
                                <td><?php echo $row['Produk'] ?></td>
                                <td><?php echo $row['Harga'] ?></td>
                                <td><?php echo $row['Alamat'] ?></td>
                                <td><?php echo $row['No_Telp'] ?></td>
                                <td>
                                  <div class="custom-control-inline">
                                    <a href="Editdata.php?ID=<?php echo $row['ID_Pelanggan'];?>"
                                      class="btn btn-warning">EDIT
                                    </a>
                                    <a href="Hapus.php?ID_DEL=<?php echo $row['ID_Pelanggan'];?>"
                                      class="btn btn-danger"
                                      onclick="javascript: return confirm('Anda yakin hapus?')">DELETE
                                    </a>
                                  </div>
                                </td>
                              </tr>
                              <?php
                            }
                            $conn->close();
                            ?>
                          </tbody>
                        </table>
                        <br>
                      </div>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>
  </html>
