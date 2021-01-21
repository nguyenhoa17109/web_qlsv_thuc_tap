<?php 
    session_start();
    include('../db.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SV | Nguyện vọng</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid-theme.min.css">
  <style>
    .cl{
      background-color: #009688 !important; 
    }
  </style>
</head>
<body class="hold-transition cl sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.html" class="nav-link">Trang chủ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-teal elevation-4 cl">
    <!-- Brand Logo -->
    <a href="../sinhVien.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sinh viên</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/sinhvien.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="../SV/suaTTSV.php" class="d-block">Tên sinh viên</a>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../SV/danhsachBaiDang.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Danh sách bài đăng
                  </p>
                </a>
              </li>
         <li class="nav-item">
            <a href="../SV/suaNV.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p >
                Chỉnh sửa nguyện vọng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../SV/xemHang.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>Xem hạng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>
        </ul>
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
            <h1>Xem hạng</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thống kê sinh viên</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%;">STT</th>
                    <th style="width: 12%;">Vị trí</th>
                    <th style="width: 15%;">Tên doanh nghiệp</th>
                    <th style="width: 15%;">Yêu cầu</th>
                    <th>Thời hạn</th>
                    <th style="width: 5%;">Hạng</th>
                    <td></td>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>Dev web
                      </td>
                      <td>SamSung</td>
                      <td>CPA > 3.5</td>
                      <td>22-06-2020 đến 03-07-2020</td>
                      <td class="project-actions text-center">
                        10
                      </td>
                      <td class="project-actions text-center">
                        <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          Xem
                        </a>
                        </td>     
                    </tr>
                    <tr>
                        <td>
                            1
                          </td>
                          <td>Dev web
                          </td>
                          <td>SamSung</td>
                          <td>CPA > 3.5</td>
                          <td>22-06-2020 đến 03-07-2020</td>
                          <td class="project-actions text-center">
                            4
                          </td>
                          <td class="project-actions text-center">
                            <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Xem
                            </a>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            1
                          </td>
                          <td>Dev web
                          </td>
                          <td>SamSung</td>
                          <td>CPA > 3.5</td>
                          <td>22-06-2020 đến 03-07-2020</td>
                          <td class="project-actions text-center">
                            1
                        </td>
                        <td class="project-actions text-center">
                            <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Xem
                            </a>
                        </td>
                    </tr>
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
    <strong>Copyright &copy; 1999-2020 <a href="https://hoanghuongthao.blogspot.com/">CN.gaboxoiteam</a>.</strong>
    Thành công luôn bên bạn
    <div class="float-right d-none d-sm-inline-block">
      <b>Phiên bản</b> 2020
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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
