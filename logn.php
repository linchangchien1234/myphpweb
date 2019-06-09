<?php 

	//匯入連線資料庫php檔
	include('conn/conn.php');

	$name = "Guset";

	// 初始設定空值
	$usname = $password = $email = $sex = $likes = '';
	// 設定錯誤時,陣列更換內容
	$error = array('usName' => '','password' => '','email' => '','sex' => '','likes' => '' );

	if(isset($_POST['submit'])){		
		// 判斷username是否為空值
		if(empty($_POST['usName']) || empty($_POST['password'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['usName'] = "A userName is required <br />";
			$error['password'] = "A password is required <br />";
		}else{
			// 設定username變數
			$usname = $_POST['usName'];
			// 設定password變數
			$password = $_POST['password'];
			// 判斷username驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$usname)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['usName'] = "email must be a valid address <br />";

			}
			// 判斷password驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$password)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['password'] = "password must be a valid address <br />";
			}

			//sql指令字串
			$sql = "SELECT userName,userPassword FROM member WHERE userName = '$usname'";

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

			session_start();
			//判斷使用者是否登入正確
			if($test1['userName'] === $usname && $test1['userPassword'] === $password){
				
				//$name = $test1['username'];
				$_SESSION['name'] = $test1['userName'];
				header('Location: lognsucess.php');			
			}else{
				$error['usName'] = "user password is error! <br />";
				$error['password'] = "user password is error! <br />";
			}
		}
	}

	
	
	

	
?>