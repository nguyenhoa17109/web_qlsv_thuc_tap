<?php
//include("config.php");
$conn = mysqli_connect("localhost", "root", "", "test");
if( isset($_POST['mabv'])){
	
   
    $mabv = $_POST['mabv'];
    
    $sql = "UPDATE tbl_baiviet SET trangthai = 1 WHERE mabv=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i",  $mabv );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
   
 //  if(mysqli_num_rows($result) > 0)
      //  {
             $output ="";
             $select_query = "SELECT * FROM tbl_baiviet WHERE madn IS NOT NULL AND trangthai = 0";
             $result = mysqli_query($conn, $select_query);
             $output .= '
              <table class="table table-bordered">
      <tr>
		<th><input type ="checkbox"'.' id="checkall"></th>
<!--       <th >Ma doanh nghiep</th>  -->
<!--	   <th >Ma nguoi dung</th>-->
		  <th>Tên công việc</th>
		  <th>Ngày đăng</th>
		  <th>Ngày áp dụng</th>
		  <th>Số lượng</th>
		  
		  <th>Chức năng</th>
      </tr>

             ';
             while($row = mysqli_fetch_array($result))
             {
                        $temp = $row["mabv"];
                    $output .= '<tr id ='.(string)$temp.'>';
                    $output .= '<td><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" name="ma[]" ></td>';
                    $output .= "<td data-target='tencv'>". $row['tencv']."</td>";

                    $output .= '<td data-target="ngaydang">'.$row['ngaydang'].'</td>';
                    $output .= '<td data-target="ngayapdung">'.$row['ngayapdung'].'</td>';
                    $output .= '<td data-target="soluong">'.$row['soluong'].'</td>';

                    $output .= '<td><a data-role="update" data-id="'.(string)$temp.'">update</a></td>';

            $output .= '</tr>';
         }
         $output .= '</table>';
        
            
            echo $output;
  //      }
}