<?php 
	

	//匯入連線資料庫php檔
	include('conn/conn.php');

	// 初始設定空值
	//$checkindex = 0;
	$rootname = '';
	// 設定錯誤時,陣列更換內容
	$error = array('search' => '');

	$rootdel = 0;

	$search = array('header' => '','content' => '');
	/*if(isset($_POST['submitDel'])){	
		//echo "string";
		$rootdel = $_POST['delcheck'];
		//echo $rootdel;	
		//mysqli_query($conn,"DELETE FROM message_box WHERE id=9");
		foreach ($rootdel as $del) {			
		 	mysqli_query($conn,"DELETE FROM member WHERE userName=".$del);
		}	
	}*/

	if(isset($_POST['submitsearch'])){		
		// 判斷rootsearch是否為空值
		if(empty($_POST['search'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['search'] = "A userName is required <br />";		
		}else{
			// 設定rootsearch變數
			$rootname = $_POST['search'];
			
			/*if(!preg_match('/^[a-zA-Z\s]+$/',$rootsearch)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['search'] = "email must be a valid address <br />";

			}*/
			
			//sql指令字串
			//$sql = "SELECT message_box.*,message_box_area.* FROM message_box_area left join message_box on message_box_area.id = message_box.area   WHERE ares = '$rootsearch'";
			$sql = "SELECT * FROM member WHERE userName = '$rootname'";
			//執行sql指令並檢查是否正確,正確回傳true 
			$result = mysqli_query($conn,$sql);

			/*print_r($result);*/

			//將資料轉成陣列
			$test1 = mysqli_fetch_all($result);

			//釋放記憶體
			mysqli_free_result($result);


			//print_r($test1);
			//session_start();
			$_SESSION['username'] = $test1;
			//print_r($_SESSION['search']);

			header('Location: rootdeluser.php');
		}
	}	
	if(isset($_POST['submitback'])){
		unset($_SESSION['username']);
		header('Location: rootmenu.php');
	}


	//關閉資料庫
	mysqli_close($conn);
	
?>