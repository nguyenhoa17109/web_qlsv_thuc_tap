<!DOCTYPE html>

<?php 
    session_start();
    include("config.php");
    $sql = "SELECT * FROM tbl_baiviet WHERE trangthai=0";
    $baiviet = $conn->query($sql);
    //echo "kết nôi dữ liệu bài viết";
?>

<html lang="en">

<?php 
  // Lấy thông tin chi tiết về bài viết tuyển dụng
  if(isset($_GET['baiviet'])){
    //echo "vào chi tiết bài viết";
    $id =filter_var((int)$_GET['baiviet'], FILTER_VALIDATE_INT);
//	  $id=80000;
//	  echo $id;
    $sql = "SELECT * FROM tbl_baiviet WHERE mabv = $id";
    $sqlResult = $conn->query($sql);//echo $id;
    $internshipCount = mysqli_num_rows($sqlResult);
    if($internshipCount > 0){
      while ($row = mysqli_fetch_array($sqlResult)) {
        $tencv = $row['tencv'];
        $tendn= $row['tendn'];
        $ngaydang = $row['ngaydang'];
        $ngayapdung = $row['ngayapdung'];
        $aboutus = $row['aboutus'];
        $motacv = $row['motacv'];
        $soluong = $row['soluong'];
        $diachi = $row['diachi'];
        $quyenloi = $row['quyenloi'];
        $aicothenop = $row['aicothenop'];
      }
    }else{
      echo "Vị trí thực tập này không tìm thấy";
      exit();
    }
  }
  else{
    echo "Dữ liệu bị thiếu, vui lòng chọn thực tập";
    exit();
  }
	header("qlBaiDang.php");
?>
  <!-- Hiển thị chi tiết bài viết tuyển dụng -->
<!--
  -->
