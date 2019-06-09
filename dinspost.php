<?php 
	

	//匯入連線資料庫php檔
	include('conn/conn.php');

	// 初始設定空值
	$postarea = $postheader = $postcontent = '';

	// 設定錯誤時,陣列更換內容
	$error = array('area' => '','header' => '','content' => '');

	if(isset($_POST['submit'])){		
		// 判斷postArea是否為空值
		if(empty($_POST['postArea'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['area'] = "A area is required <br />";
			
		}else{
			// 設定rootsearch變數
			$postarea = $_POST['postArea'];
			if(!preg_match('/^[0-9\s]+$/',$postarea)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['area'] = "area must be a valid address <br />";
			}
		}
		// 判斷postHeader是否為空值
		if(empty($_POST['postHeader'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['header'] = "A header is required <br />";				
		}else{
			// 設定rootsearch變數
			$postheader = $_POST['postHeader'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$postheader)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['header'] = "header must be a valid address <br />";
			}
		}	
		// 判斷postContent是否為空值
		if(empty($_POST['postContent'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示			
			$error['content'] = "A content is required <br />";	
		}else{
			// 設定rootsearch變數			
			$postcontent = $_POST['postContent'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$postcontent)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['content'] = "content must be a valid address <br />";
			}
		}

		//sql指令字串
		//$sql = "SELECT message_box.*,message_box_area.* FROM message_box_area left join message_box on message_box_area.id = message_box.area   WHERE ares = '$rootsearch'";
		$sql = "INSERT INTO webtobox (areafk,post,postconent) VALUES ('$postarea','$postheader','$postcontent')";
		//執行sql指令並檢查是否正確,正確回傳true 
		$result = mysqli_query($conn,$sql);

		/*print_r($result);*/

		//將資料轉成陣列
		$test1 = mysqli_fetch_all($result);

		//釋放記憶體
		mysqli_free_result($result);

		//關閉資料庫
		//mysqli_close($conn);

		print_r($test1);
		//session_start();
		//$_SESSION['search'] = $test1;
		//print_r($_SESSION['search']);

		header('Location: rootpost.php');
		
	}	

	//關閉資料庫
	mysqli_close($conn);
	
?>