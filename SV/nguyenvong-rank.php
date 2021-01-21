<?php

//include("config.php");
$conn = mysqli_connect("localhost", "root", "", "qlsv");
$ma = $_POST["ma"];
$masv = $_POST["masv"];
$sql = "SELECT * FROM (SELECT tbl_nguyenvong.mavtdn AS vtdn, tbl_sinhvien.masv AS sv, tbl_sinhvien.diem AS d FROM tbl_nguyenvong, tbl_sinhvien WHERE tbl_nguyenvong.masv = tbl_sinhvien.masv ) AS x WHERE x.vtdn IN (SELECT tbl_nguyenvong.mavtdn FROM tbl_nguyenvong WHERE tbl_nguyenvong.manvong = '$ma' ORDER BY d DESC)";
$result = mysqli_query($conn, $sql);
$rank = 1;
while($row = mysqli_fetch_array($result)){
    if($row['sv'] == $masv)
        break;
    $rank += 1;
}

echo 'Bạn đứng thứ '.$rank;
?>