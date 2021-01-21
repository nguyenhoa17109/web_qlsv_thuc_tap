<?php
require('Classes/PHPExcel.php');
require('config.php');

if(isset($_POST['btnExport'])){
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('Sinh vien');
	//xem nguoi dung o dong nao
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount, 'Ma sinh vien');
	$sheet->setCellValue('B'.$rowCount, 'Ma nguoi dung');
	$sheet->setCellValue('C'.$rowCount, 'Ho dem');
	$sheet->setCellValue('D'.$rowCount, 'Ten');
	$sheet->setCellValue('E'.$rowCount, 'Email');
	$sheet->setCellValue('F'.$rowCount, 'Ngay sinh');
	$sheet->setCellValue('G'.$rowCount, 'Nganh');
	$sheet->setCellValue('H'.$rowCount, 'Diem');
	$sheet->setCellValue('I'.$rowCount, 'Que quan');
//	$sheet->setCellValue('J'.$rowCount, 'Anh');
	
//	data tra ve
	$result = mysqli_query($conn, "SELECT * FROM tbl_sinhvien WHERE ma_nguoidung IS NOT NULL");
	
//	set du lieu tra ve
	while($row = mysqli_fetch_array($result)){
		$rowCount++;
		$sheet->setCellValue('A'.$rowCount, $row['masv']);
		$sheet->setCellValue('B'.$rowCount, $row['ma_nguoidung']);
		$sheet->setCellValue('C'.$rowCount, $row['ten']);
		$sheet->setCellValue('D'.$rowCount, $row['ho']);
		$sheet->setCellValue('E'.$rowCount, $row['email']);
		$sheet->setCellValue('F'.$rowCount, $row['ngaysinh']);
		$sheet->setCellValue('G'.$rowCount, $row['nganh']);
		$sheet->setCellValue('H'.$rowCount, $row['diem']);
		$sheet->setCellValue('I'.$rowCount, $row['quequan']);
//		$sheet->setCellValue('J'.$rowCount, $row['anh']);
	}
	//xuat sang file excel
	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'export.xlsx';
	$objWriter->save($filename);
	//tra ve file kieu attachment
//	exit;
	header('Content-Disposition: attachment; filename="' . $filename .'"');
	
	//tra ve du lieu khi filename duoc chay
	header('Content-Type: application/vnd.openxmlformatsofficedocument .spreadsheetml] . sheet');
//	exit;
	//tra ve kich thuoc file
	header('Content-Length: ' . filesize($filename));
//	exit;
	//dinh dang kieu truyen file
	header('Content-Transfer-Encoding: binary');
//	exit;
	//kiem soat bo nho cache
	header('Cache-Control: must-revalidate');
//	exit;
	header('Pragma: no-cache');
//	exit;
	//doc file
	readfile($filename);
	
//	header("Location: thongKeSV.php");
	return;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xuat file</title>
	<link rel="stylesheet" href="">
</head>
<!--
<body>
	<form method="post">
		<button name="btnExport" type="submit">Xuat file</button>
	</form>
</body>
-->
</html>
