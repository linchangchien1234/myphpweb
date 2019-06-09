<?php 

	//匯入連線資料庫php檔
	include('conn/conn.php');
	
	//$rootname = "Guset";

	// 初始設定空值
	$rootname = $rootpassword = $rootpass = '';
	// 設定錯誤時,陣列更換內容
	$error = array('rootName' => '','rootPassword' => '');

	if(isset($_POST['submit'])){		
		// 判斷username是否為空值
		if(empty($_POST['rootName']) || empty($_POST['rootPassword'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['rootName'] = "A userName is required <br />";
			$error['rootPassword'] = "A password is required <br />";
		}else{
			// 設定username變數
			$rootname = $_POST['rootName'];
			// 設定password變數
			$rootpassword = $_POST['rootPassword'];
			// 判斷username驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$rootname)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['rootName'] = "email must be a valid address <br />";

			}
			// 判斷password驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$rootpassword)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['rootPassword'] = "password must be a valid address <br />";
			}


			//sql指令字串
			//$sql = "SELECT rootName,rootPassword FROM website_root WHERE rootName = '$rootname'";	
			//sql指令字串
			$sql = "SELECT website_root.rootName,website_root.rootPassword,webtobox.*,who_says.* FROM webtobox left join website_root on webtobox.rootNamefk = website_root.rootName left join who_says on webtobox.rootPassfk = who_says.id WHERE rootName = '$rootname'";

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


			
			
			//echo $_SESSION['name'];

			session_start();
			//判斷使用者是否登入正確
			/*if($test1['rootName'] === $rootname && $test1['rootPassword'] === $rootpassword){	
				if($test1['rootName']){
					$_SESSION['rootname'] = $test1['rootName'];
				}else{
					$_SESSION['rootname'] = "沒權限";
				}
				//$rootname = $test1['rootName'];				
				header('Location: rootdelbox.php');			
			}else{
				$error['rootName'] = "user password is error! <br />";
				$error['rootPassword'] = "user password is error! <br />";
			}*/

			//session_start();
			//判斷使用者是否登入正確
			if($test1['rootName'] === $rootname && $test1['rootPassword'] === $rootpassword){
				if((($test1['rootName'] == 'root') && ($test1['rootPassfk'] == 4)) || (($test1['rootName'] == 'boxboss') && ($test1['rootPassfk'] == 3))){
					$rootname = $test1['rootName'];
					$rootpass = $test1['rootPass'];
					$_SESSION['rootname'] = $test1['rootName'];
					$_SESSION['rootpass'] = $test1['rootPass'];
					header('Location: rootmenu.php');
						
				}
					
				/*if($test1['rootName']){
					//$_SESSION['rootname'] = $test1['rootName'];
				}else{
					//$_SESSION['rootname'] = "沒權限";
				}*/
					
				//$rootPassword = $test1['rootPassword'];				
				//header('Location: rootdelbox.php');			
			}else{
				
				$error['rootName'] = "user password is error! <br />";
				$error['rootPassword'] = "user password is error! <br />";
			}
		}
	}
?>