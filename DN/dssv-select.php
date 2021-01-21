<?php  

	include("config.php");
    $madn = $_SESSION['madn'];
    $table = mysqli_query($conn, "SELECT B1.ma AS ma, masv, ho, B1.ten, stt, nganh, B1.diem, tbl_vitri.ten AS tenvt FROM (SELECT B.ma AS ma ,masv, ho, ten, stt, nganh, mavt, madn , B.diem FROM (SELECT tbl_nguyenvong.manvong AS ma, tbl_sinhvien.masv, mavtdn, ho, ten, stt, nganh, tbl_sinhvien.diem FROM tbl_nguyenvong, tbl_sinhvien WHERE tbl_nguyenvong.masv = tbl_sinhvien.masv) AS B, tbl_vitridn WHERE B.mavtdn = tbl_vitridn.ma) AS B1, tbl_vitri WHERE B1.madn = '$madn' AND B1.mavt = tbl_vitri.ma");
    while($row = mysqli_fetch_array($table)){
		$temp = $row["ma"];
		echo '<tr id ='.(string)$temp.'>';
		echo "<td data-target='masv'>". $row['masv']."</td>";
		echo '<td data-target="tensv">'.$row['ho']." ".$row['ten'].'</td>';
		echo '<td data-target="stt">'.$row['stt'].'</td>';
		echo '<td data-target="nganh">'.$row['nganh'].'</td>';
		echo '<td data-target="vitri">'.$row['diem'].'</td>';
		echo '<td data-target="diem">'.$row['tenvt'].'</td>';
		echo '</tr>';
    }
?>