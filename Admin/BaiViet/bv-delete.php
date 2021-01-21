<?php
	include("config.php");

	//$userObj = mysqli_query($conn, "SELECT * FROM `user` ");
	
	if(isset($_POST['data'])){
		echo 'Xóa thành công';
		$dataArr = $_POST['data'];
		$sql = 'DELETE FROM tbl_baiviet WHERE mabv=?';
			$stmt = mysqli_stmt_init($conn);
			mysqli_stmt_prepare($stmt, $sql);
		foreach($dataArr as $id){
			mysqli_stmt_bind_param($stmt, "i",$id );
			mysqli_stmt_execute($stmt);
			mysqli_stmt_get_result($stmt);
		}
	
	}