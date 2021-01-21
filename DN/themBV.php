<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thêm bài viết</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <style>
    .cl{
      background-color: #153657 !important; 
    }
    .active{
      background-color: crimson !important; 
    }

  </style>
</head>
<?php 
//  echo "login vao them bai viet doanh nghiep";
  session_start();
  require_once '../../db.php';
?>

<?php 
    $tennv = $_SESSION['tenDangNhap'];
    $sql = "SELECT * FROM tbl_nguoidung, tbl_doanhnghiep WHERE tenDangNhap = '$tennv' 
    AND tbl_nguoidung.ma = tbl_doanhnghiep.ma_nguoidung";
    $result = $conn->query($sql);
    while ($row_pro = mysqli_fetch_array($result)) {
      $madn = $row_pro['madn'];
      $tendn = $row_pro['tendn'];
      $ma_nguoidung = $row_pro['ma'];
      $matKhau = $row_pro['matKhau'];
      $email = $row_pro['email'];
      $diachi = $row_pro['diachi'];
    }
?>


<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header  navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../doanhNghiep.php" class="nav-link">Trang chủ</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4 cl">
    <!-- Brand Logo -->
    <a href="../../doanhNghiep.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Doanh nghiệp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/doanhnghiep.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tên doanh nghiệp</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../../doanhNghiep.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Quản lý bài đăng
                  </p>
                </a>
              </li>
         <li class="nav-item">
            <a href="themBV.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Thêm bài viết
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/dsSVĐK.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Danh sách đăng kí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/dsViTriDN.php" class="nav-link">
              <i class="nav-icon far fas fa-briefcase"></i>
              <p>Danh sách vị trí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../login.php" class="nav-link">
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
            <h1>Thêm bài viết</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          
          <div class="col-md-8">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bài viết</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="tencv">Tên công việc</label>
                  <input type="text" class="form-control"   id="tencv" name="tencv"  required>
                </div>

                <div class="form-group">
                  <label>Ngày đăng:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-yy" data-mask name="ngaydang"
                    id="ngaydang" name="ngaydang" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Ngày bắt đầu:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-yy" data-mask name="ngayapdung"
                    id="ngayapdung" name="ngayapdung" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Ngày kết thúc:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-yy" data-mask name="ngayhethan"
                    id="ngayhethan" name="ngayhethan" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label for="aboutus">Thông tin về công ty</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="aboutus" name="aboutus" rows="3" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label for="motacv">Mô tả công việc</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                  <label for="quyenloi">Quyền lợi</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                  <label for="quyenloi">Số lượng</label>
                  <input type="text" class="form-control" type="text" 
                  id="soluong" name="soluong" required>
                </div>
                <div class="form-group">
                  <label for="motacv">Yêu cầu</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                        id="aicothenop" name="aicothenop" rows="3" required></textarea>
                    </div>
                </div>

              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="add">Thêm</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <div class="col-md-2">
            
            </div>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Datemask dd-mm-yyyy
    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })

    $('[data-mask]').inputmask()
  })
</script>

</body>
</html>
<?php
    if($_POST['add']){
//      echo("thảo linh tinh");
      $tencv = $_POST['tencv'];
      $ngaydang = $_POST['ngaydang']; 
      $ngayapdung = $_POST['ngayapdung'];
      $ngayhethan = $_POST['ngayhethan'];
      $tendn = $_POST['tendn']; 
      $aboutus =$_POST['aboutus'];       
      $motacv = $_POST['motacv'];
      $diachi = $_POST['diachi'];    
      $quyenloi = $_POST['quyenloi'];
      $soluong = $_POST['soluong'];
      $aicothenop = $_POST['aicothenop'];
      $insertSql = "INSERT INTO tbl_baiviet (`tencv`,`madn`,`ngaydang`,`ngayapdung`,`ngayhethan`,`tendn`,`aboutus`,`motacv`,`diachi`,`quyenloi`,`soluong`,`aicothenop`,`trangthai`) 
                    VALUES ('$tencv','$madn','$ngaydang','$ngayapdung','$ngayhethan','$tendn','$aboutus','$motacv','$diachi','$quyenloi','$soluong','$aicothenop', 0)";
      $conn->query($insertSql); 
      if($run_query){
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.open('../../doanhNghiep.php','_self')</script>";
      }
    }
//    echo "linhtinh";
  ?>