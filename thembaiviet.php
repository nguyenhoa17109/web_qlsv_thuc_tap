<!DOCTYPE html>  
<html>  
 <head>  
  <title>Doanh nghiệp</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your emptom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet"> 
 </head>  
 <body>  

<?php 
//  echo "login vao them bai viet doanh nghiep";
  session_start();
  require_once 'db.php';
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
    //echo "linhtinh";
?>

<?php 
  if(!isset($_SESSION['tenDangNhap'])){
      echo "<script>window.open('dangnhap.php','_self')</script>";
    }else{
?>
  <main>
    <h3 class="text-center p-3">Thông tin thực tập</h3>
    <?php
      if(isset($_GET['add'])){
          $tencv = "";
          $ngaydang = null; 
          $ngayapdung = null;
          $ngayhethan = null;
          //$tendn = $tendn; 
          $aboutus ="";       
          $motacv = "";
          //$diachi = $_SESSION['diachi'];    
          $quyenloi = "";
          $soluong = "";
          $aicothenop = "";

        if(isset($_GET['edit'])){
          $edit_id = (int)$_GET['edit'];
          $baivietResults = $conn->query("SELECT * FROM tbl_baiviet WHERE mabv = '$edit_id'");
          $baiviet = mysqli_fetch_assoc($baivietResults);
          $tencv = $baiviet['tencv'];
          $ngaydang = $baiviet['ngaydang']; 
          $ngayapdung = $baiviet['ngayapdung'];
          $ngayhethan = $baiviet['ngayhethan'];
          $tendn = $baiviet['tendn']; 
          $aboutus =$baiviet['aboutus'];       
          $motacv = $baiviet['motacv'];
          $diachi = $baiviet['diachi'];    
          $quyenloi = $baiviet['quyenloi'];
          $soluong = $baiviet['soluong'];
          $aicothenop = $baiviet['aicothenop'];
          
        }
    ?>
    <div class="container">
      <div class="">
        <div class="card">
          <div class="card-header card-title text-center">
            <h4 class="text-center">Chi tiết thông tin thực tập</h4>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
          <div class="card-body">
<!--Tên dn-->
                    <div class="form-group">
                  <label for="tendn">Tên doanh nghiệp</label>
                  <input type="text" disabled="disabled" class="form-control" id="tendn" name="tendn" value="<?=$tendn;?>" placeholder="">
                </div>
<!--Địa chỉ-->
                    <div class="form-group">
                  <label for="diachi">Địa chỉ</label>
                  <input type="text" class="form-control" disabled="disabled" id="diachi" name="diachi" value="<?=$diachi;?>"  required>
                </div>
<!-- Tên cv-->
                    <div class="form-group">
                  <label for="tencv">Tên công việc</label>
                  <input type="text" class="form-control"   id="tencv" name="tencv" value="<?=$tencv;?>" required>
                </div>
<!--Ngày up-->
                    <div class="form-group">
                  <label for="ngaydang">Ngày đăng:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask name="ngaysinh"
                    id="ngaydang" name="ngaydang" class="form-control" value="<?=$ngaydang;?>">
                  </div>
                  <!-- /.input group -->
                </div>
<!--Ngày start-->
                    <div class="form-group">
                  <label for="ngayapdung">Ngày bắt đầu:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask name="ngaysinh"
                    id="ngayapdung" name="ngayapdung" value="<?=$ngayapdung;?>" required>
                  </div>
                  <!-- /.input group -->
                </div>

<!--Ngày end-->
                    <div class="form-group">
                  <label for="ngayhethan">Ngày kết thúc:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask name="ngaysinh"
                    id="ngayhethan" name="ngayhethan" value="<?=$ngayhethan;?>" required>
                  </div>
                  <!-- /.input group -->
                </div>
            
<!--Thông tin-->
                    <div class="form-group">
                  <label for="aboutus">Thông tin về công ty</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="aboutus" name="aboutus" rows="3" value="<?=$aboutust;?>" required></textarea>
                    </div>
                </div>
<!--Mô tả-->
                    <div class="form-group">
                  <label for="motacv">Mô tả công việc</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" value="<?=$motacv;?>" required></textarea>
                    </div>
                </div>
<!--Quyền lợi-->
                    <div class="form-group">
                  <label for="quyenloi">Quyền lợi</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" required></textarea>
                    </div>
                </div>
<!--Số lượng-->
                    <div class="form-group">
                  <label for="soluong">Số lượng</label>
                  <input type="text" class="form-control" type="text" 
                  id="soluong" name="soluong" value="<?=$quyenloi;?>" required>
                </div>
<!--Yêu cầu-->
                    <div class="form-group">
                    <label for="aicothenop">Yêu cầu</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                        id="aicothenop" name="aicothenop" rows="3" value="<?=$aicothenop;?>" required></textarea>
                    </div>
                    </div>

                </div>
<!-- /.card-body -->
            </form>
          </div>      
        </div>
      </div>
      <?php } 
          else{
            $sql = "SELECT * FROM tbl_baiviet WHERE madn = $madn";
            $presults = $conn->query($sql);
          
      ?>
      <div class="container-fluid table-responsive">  
        <a href="thembaiviet.php?add=1" class="btn text-white" style="background-color: #1c2a48" id="add-product-btn">Thêm bài viết</a>
        <div class="clearfix"></div><br>
        <table class="table table-striped table-bordered" style="display: table;">
          <thead>
            <th></th>
            <th></th>
            <th class="text-center"><h5 class="h5-responsive"><b>Tên công việc</b></h5></th>
                    
            <th class="text-center"><h5 class="h5-responsive"><b>Số lượng</b></h5></th>
            <th class="text-center"><h5 class="h5-responsive"><b>Ngày đăng</b></h5></th>
            <th class="text-center"><h5 class="h5-responsive"><b>Ngày áp dụng</b></h5></th>
            <th class="text-center"><h5 class="h5-responsive"><b>Ngày hết hạn</b></h5></th>
            <th class="text-center"><h5 class="h5-responsive"><b>Trạng thái</b></h5></th>
          </thead>
          <tbody>
            <?php 
              $sql = "SELECT * FROM tbl_baiviet WHERE  madn = $madn";
              $baiviet = $conn->query($sql);
            ?>

            <?php while($row_baiviet = mysqli_fetch_assoc($baiviet)):?>
              <tr>

                <!-- nút xóa và sửa  -->
                <td>
                  <a href="thembaiviet.php?edit=<?=$row_baiviet['mabv'];?>"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                  <a href="thembaiviet.php?delete=<?=$row_baiviet['mabv'];?>"><i class="fas fa-trash"></i></a>
                </td>
                <td class="text-center"><?=$row_baiviet['tencv']?></td>
                
                <td class="text-center"><?=$row_baiviet['soluong'];?></td>
                <td class="text-center"><?=$row_baiviet['ngaydang'];?></td>
                <td class="text-center"><?=$row_baiviet['ngayapdung'];?></td>
                <td class="text-center"><?=$row_baiviet['ngayhethan'];?></td>
                <td class="text-center"><?=$row_baiviet['trangthai'];?></td>
              </tr>
            <?php endwhile;?>
          </tbody>
        </table>
      </div>
    <?php } ?>
    </div>
  </main>
  <?php  include '../include/footer.php'; } ?>