<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    require_once '../../db.php';
    //echo("dang nhap xem bai viet");
    $sql = "SELECT * FROM tbl_baiviet WHERE trangthai = 0";
    $baiviet = $conn->query($sql);

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Quản lý bài viết</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
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
        <a href="../../index.php" class="nav-link">Trang chủ</a>
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Thông báo</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 7 Email mới
            <span class="float-right text-muted text-sm">3 phút</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 Thông báo
            <span class="float-right text-muted text-sm">1 phút</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Xem tất cả thông báo</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../indexadmin.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Quản lý</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../indexadmin.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Thống kê
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chỉnh sửa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Sinhvien/themSV.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sinh viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../DoanhNghiep/themDN.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm doanh nghiệp</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thống kê
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Sinhvien/thongKeSV.php" class="nav-link">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Sinh viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../DoanhNghiep/thongKeDN.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doanh nghiệp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../BaiViet/thongKeBV.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Hoạt động</li>
          <li class="nav-item">
            <a href="../mailbox.html" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Hộp thư
                <span class="badge badge-info right">25</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../lenLich.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Lên lịch sự kiện
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../BaiViet/qlBaiDang.php" class="nav-link  active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Quản lý bài đăng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
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
            <h1>Quản lý bài đăng</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="margin-top: .165em; font-size: 24px;">Danh sách</h3>
            
			<?php
    			$row = mysqli_fetch_array($baiviet)?>
<!--
          <a class="btn btn-success btn-sm" href="xulybaiviet.php?baiviet=" style="margin-left: .875em;">
            <i class="fas fa-check">
            </i>
            Duyệt
          </a>
			  
-->
<!--
			
-->

<!--
          <a class="btn btn-danger btn-sm" href="#" style="margin-left: .875em;">
              <i class="fas fa-trash" id="delete">
              </i>
              Xóa
          </a>
-->
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>Chọn</th>
                      <th style="width: 10%">
                          Tên công ty
                      </th>
                      <th style="width: 10%">
                          Tên công việc
                      </th>
                      <th style="width: 20%">
                      Ngày áp dụng - Ngày hết hạn
                      </th>
                      
                      <th style="width: 20%;">Yêu cầu</th>
                      <th style="width: 10%;">Số lượng</th>
                      <th style="width: 5%;">Trạng thái</th>
                      <th style="width: 12%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php while($row = mysqli_fetch_assoc($baiviet)): ?>
                    <tr>
                      <td class="jsgrid-cell jsgrid-align-center">
                        <input type="checkbox">
                      </td>
                      <td><?=$row['tendn'];?></td>
                      <td><?=$row['tencv'];?></td>
                      <td><?=$row['ngayapdung'].' đến '.$row['ngayhethan'];?></td>
                      <td><?=$row['aicothenop'];?></td>                     
                      <td><?=$row['soluong'];?></td>
                      <td><?=$row['trangthai'];?></td>
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Xem
                          </a> -->
                          <a class="btn btn-primary btn-sm" href="../BaiViet/xembaiDangAD.php?baiviet=<?=$row['mabv'];?>">
                          <i class="fas fa-folder"></i> Xem
                          </a>
                      </td>
                    </tr>
                    <?php endwhile;?>   
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--//Them-->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

<!--	   Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Bài viết</h4>
		</div>
		<div class="modal-body">
			<div>Đã duyệt
			</div>
			<input type='hidden' id='emId' class='form-control'>
		</div>
		<div class="modal-footer">
		  <button type="button" id="save" class="btn btn-default pull-right" data-dismiss="modal">Đóng</button>
		</div>
	  </div>

	</div>
  </div>
 
 <script>  
 $(document).ready(function(){
	   $(document).on('click','a[data-role="update"]', function(){
		   console.log('ok');

		 var mabv = $(this).data('id');

		 $('#emId').val(mabv);
		 
		 $('#myModal').modal('toggle');
		 $.ajax({
                    url: 'bv-updatedata.php' ,
                    method: 'post',

                    data : { mabv : mabv},
                    success : function(response){
                        $('#bv_table').html(response); 
                    }

                 });
	   }) ;
	   
	   // cap nhat csdl
	   
	 
	});
        
         $('#save').click(function(){
		  $('#myModal').modal('toggle');
//		   
				

	   });


	$(document).ready(function(){
		$('#checkall').click(function(){
			if(this.checked ){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}else{
				$('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});

        $('#delete').click(function(){
//                console.log('ok');
                var dataArr = new Array();
                if($('input:checkbox:checked').length > 0){
                        $('input:checkbox:checked').each(function(){
                                dataArr.push($(this).attr('id'));

                                $(this).closest('tr').remove();
                        });
                        sendResponse(dataArr)
                      //  console.log(dataArr);
                }else{
                        alert('Không có mục nào được chọn');
                }
        });

        function sendResponse(dataArr){
                
                $.ajax({
                    type: 'post',
                    url: 'bv-delete.php',
                    data : {data : dataArr},
                    success : function(response){
                        alert(response);
                    },
                    error: function(errResponse){
                        alert(errResponse);
                    }
                });
//                console.log(dataArr);
        }
});
		
		
</script>
 <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">CN.gaboxoiteam</a>.</strong>
    Thành công luôn bên bạn
    <div class="float-right d-none d-sm-inline-block">
      <b>Phiên bản</b> 2020
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
