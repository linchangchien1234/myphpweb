<?php 
	include('conn/conn.php');

	//sql指令字串
	$sql = "SELECT userName,userPassword FROM member WHERE username = '$usname'";

	//執行sql指令並檢查是否正確,正確回傳true 
	$result = mysqli_query($conn,$sql);
	/*print_r($result);*/

	//將資料轉成陣列
	$test1 = mysqli_fetch_assoc($result);

	//釋放記憶體
	mysqli_free_result($result);

	//關閉資料庫
	mysqli_close($conn);

	//print_r($test1);

	
?>