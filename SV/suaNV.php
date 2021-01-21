<?php 
    session_start();
    include('../db.php');
    $_SESSION['masv']= 102;
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
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
        <a href="../index.php" class="nav-link">Trang chủ</a>
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
            <a href="suaTTSV.php" class="d-block">Tên sinh viên</a>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../sinhVien.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Danh sách bài đăng
                  </p>
                </a>
              </li>
         <li class="nav-item">
            <a href="suaNV.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p >
                Chỉnh sửa nguyện vọng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="xemHang.php" class="nav-link">
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
            <h1>Sửa nguyện vọng</h1>
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
                <h3 class="card-title" style=" margin-top: .275em;">Thống kê nguyện vọng</h3>
				 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_data_Modal" onclick="selectDoanhNghiep()" style="margin-left: .875em;">
				<i class="fas fa-plus"></i>
                 Thêm</button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body" id="dn_table">
                <table id="example1" class="table table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên doanh nghiệp</th>
                    <th>Vị trí</th>
                    <th class="project-actions text-center" >Chức năng</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
	  				include("nguyenvong-select.php");
      				?>
				  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
			<!--Xem rank-->
			<div class="modal fade" id="rank" role="dialog">
			
				<div class="card card-warning shadow modal-dialog">
              	<div class="card-header"><h3 class="card-title">Thông báo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              	</div>
              <!-- /.card-header -->
              	<div class="card-body">
                <p id="thongbao"></p>
              	</div>
              <!-- /.card-body -->
            	</div>
            <!-- /.card -->
			</div>
			 <!--shadowbox-->
			 
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Vị trí doanh nghiệp</h4>
   </div>
   <div class="modal-body">
   
    <form method="post" id="insert_form">
     <label>Tên doanh nghiêp</label>
     <!--input type="text" name="name" id="name" class="form-control" /-->
     <select id="doanhnghiep">
        <option value="0">- Select -</option>
     </select>
     <br>
     <label>Tên vị trí</label>
     <!--input type="text" name="name" id="name" class="form-control" /-->
     <select id="vitri">
        <option value="0">- Select -</option>
     </select>
     
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
   </div>
  </div>
 </div>
</div>

<!--capnhat-->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Cập nhật thông tin</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<label>Tên vi tri</label>
				<input type="text" id="upname" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Điểm</label>
				<input type="text" id="upgen" class="form-control">
			</div>
			
			<input type='hidden' id='emId' class='form-control'>
		</div>
		<div class="modal-footer">
			<a href="#" id="save" class ="btn btn-primary pull-right">Cập nhật</a>
		  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
		</div>
	  </div>

	</div>
  </div>

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

  <!-- Main Footer -->
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
<!--<script src="../../../plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/adminlte.min.js"></script>
 
<script>

     function selectDoanhNghiep(){
         $("#doanhnghiep").empty();
         $("#doanhnghiep").append("<option >loading....</option>");
         
         $.ajax({
            url: 'selectDoanhNghiep.php',
            method:"POST",
            
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            success:function(data){
                console.log("data");
                $("#doanhnghiep").empty();
                var len = data.length;
                $("#doanhnghiep").append("<option value=''>- Select -</option>");
                
                for( var i = 0; i<len; i++){
                    var id = data[i]['id'];
                    var name = data[i]['name'];
                    
                    $("#doanhnghiep").append("<option value='"+id+"'>"+name+"</option>");

                }
            },
            complete: function(){
                
            }
        });
        
    }
     
    $(document).ready(function(){

    $("#doanhnghiep").change(function(){
        var madn = $(this).val();

        $.ajax({
            url: 'selectViTri.php',
            type: 'post',
            data: {madn: madn},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#vitri").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#vitri").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

});
    
    // them
    $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();    
        
        var mavtdn = $('#vitri').children("option:selected").val();
        var masv = "<?php echo $_SESSION['masv'];?>"
        ;
        $.ajax({
            url: 'nguyenvong-insert.php' ,
            method: 'post',
            data : { mavtdn : mavtdn,  masv: masv},
           success:function(data){  
            $('#insert_form')[0].reset();  
            $('#add_data_Modal').modal('hide');  
            $('#dn_table').html(data); 
            $("#vitri").empty();
            $("#vitri").append("<option value=''>- Select -</option>");
            }  

         });
       //       $.ajax({  
//        url:"vtdoanhNghiep-insert.php",  
//        method:"POST",  
//        data:$('#insert_form').serialize(),  
//        beforeSend:function(){  
//         $('#insert').val("Inserting");  
//        },  
//        success:function(data){  
//         $('#insert_form')[0].reset();  
//         $('#add_data_Modal').modal('hide');  
//         $('#dn_table').html(data);  
//        }  
//       }); 
     });
     });
 
//	$(document).ready(function(){
//	   $(document).on('click','a[data-role="update"]', function(){
//		   console.log('ok');
//		 //  alert($(this).data('id'));
//		 // them gia tri vao input
//		 var ma = $(this).data('id');
//		   
//		 var ten = $('#' + ma).children('td[data-target=ten]').text();
//		 var diem = $('#' + ma).children('td[data-target=diem]').text();
//		 
//		 
//		 $('#upname').val(ten);
//		 $('#upgen').val(diem);
//		 
//		 $('#emId').val(ma);
//		 
//		 $('#myModal').modal('toggle');
//		 
//	   }) ;
//	   
//	   // cap nhat csdl
//	   
//	   $('#save').click(function(){
//		   var ma = $('#emId').val();
//		   var ten = $('#upname').val();
//		   
//			var diem = $('#upgen').val();
//			
//			
//			$.ajax({
//			   url: 'vtdoanhNghiep-updatedata.php' ,
//			   method: 'post',
//				
//			   data : { diem : diem, ma : ma},
//			   success : function(response){
//				  // console.log(response);
//				  // $('#' + madn).children('td[data-target=ten]').text(tendn);
//				   $('#' + ma).children('td[data-target=diem]').text(diem);
//				   
//				   $('#myModal').modal('toggle');
//				console.log(response);   
//			   }
//				
//			});
//                        
//                     
//		   
//	   });
//	});
        
        $(document).ready(function(){
	   $(document).on('click','a[data-role="delete"]', function(){
		 var ma = $(this).data('id');
                 var masv = "<?php echo $_SESSION['masv'];?>"
                 var tr = "tr[id='" + ma + "']";
                 var stt = $('#' + ma).children('td[data-target=stt]').text();
                 console.log(stt);
		 $.ajax({
                    url: 'nguyenvong-delete.php' ,
                    method: 'post',

                    data : { ma : ma ,masv : masv, stt : stt},
                    success : function(response){
 
                       // $(this).parent().remove();
                       $('#dn_table').html(response);
                       //$(tr).remove();
                       
                    }

                 });
            });
        }) ;
        
         $(document).ready(function(){
	   $(document).on('click','a[data-role="check"]', function(){
		 var ma = $(this).data('id');
                 var masv = "<?php echo $_SESSION['masv'];?>"
                 console.log(ma);
                 console.log(masv);
		 $.ajax({
                    url: 'nguyenvong-rank.php' ,
                    method: 'post',

                    data : { ma : ma, masv : masv },
                    success : function(response){
                        
                       // $(this).parent().remove();
                       //alert(response);
                       //$(tr).remove();
                       
                       $('#thongbao').text(response);
                       $('#rank').modal('toggle');
                    }

                 });
            });
        }) ;
</script>
</body>
</html>

