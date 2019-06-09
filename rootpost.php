<?php 
	
	include('header4.php');
	//匯入連線資料庫php檔
	include('conn/conn.php');
	//session_start();
	if (isset($_SESSION['rootname']) || isset($_SESSION['rootpass'])) {
		//$name = $_SESSION['name'];
		
		$rootName = $_SESSION['rootname'];
		$rootPass = $_SESSION['rootpass'];
		//sql指令字串
		$sqll = "SELECT id FROM who_says WHERE rootPass = '$rootPass'";

		//執行sql指令並檢查是否正確,正確回傳true 
		$result = mysqli_query($conn,$sqll);

		/*print_r($result);*/

		//將資料轉成陣列
		$test1 = mysqli_fetch_assoc($result);
		//釋放記憶體
		mysqli_free_result($result);
		foreach ($test1 as $key => $value) {
			$test2 = $value;
		}
		//print_r($test2);
		
		$text = 1;
	}else{
		$rootName = "Guset";
		$text = 0;
	}
	

	// 初始設定空值
	$postarea = $postheader = $postcontent = '';

	// 設定錯誤時,陣列更換內容
	$error = array('postArea' => '','postHeader' => '','postContent' => '');

	if(isset($_POST['submit'])){		
		// 判斷postArea是否為空值
		if(empty($_POST['postArea'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['postArea'] = "A area is required <br />";
			
		}else{
			// 設定rootsearch變數
			$postarea = $_POST['postArea'];
			if(!preg_match('/^[0-9\s]+$/',$postarea)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['postArea'] = "area must be a valid address <br />";
			}
		}
		// 判斷postHeader是否為空值
		if(empty($_POST['postHeader'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['postHeader'] = "A header is required <br />";				
		}else{
			// 設定rootsearch變數
			$postheader = $_POST['postHeader'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$postheader)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['postHeader'] = "header must be a valid address <br />";
			}
		}	
		// 判斷postContent是否為空值
		if(empty($_POST['postContent'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示			
			$error['postContent'] = "A content is required <br />";	
		}else{
			// 設定rootsearch變數			
			$postcontent = $_POST['postContent'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$postcontent)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['postContent'] = "content must be a valid address <br />";
			}
		}
		
		if(array_filter($error)){
			//有錯誤執行
		}else{
			//將使用者輸入的username值存取至變數$usname
			$postarea = mysqli_real_escape_string($conn, $_POST['postArea']);
			//將使用者輸入的username值存取至變數$usname
			$postheader = mysqli_real_escape_string($conn, $_POST['postHeader']);
			//將使用者輸入的username值存取至變數$usname
			$postcontent = mysqli_real_escape_string($conn, $_POST['postContent']);

			//sql指令字串
			//$sql = "SELECT message_box.*,message_box_area.* FROM message_box_area left join message_box on message_box_area.id = message_box.area   WHERE ares = '$rootsearch'";
			//$sql = "INSERT INTO message_box (area,header,content) VALUES ('$boxarea','$boxheader','$boxcontent')";
			//INSERT INTO `message_box` (`id`, `area`, `header`, `content`, `writeTime`) VALUES (NULL, '4', 'test', 'This is a test', CURRENT_TIMESTAMP);
			$sql = "INSERT INTO webtobox (post,postcontent,rootNamefk,rootPassfk,areafk) VALUES ('$postheader','$postcontent','$rootName','$test2','$postarea')";

			if(mysqli_query($conn,$sql)){
				//導航至datebase.php
				header('Location: rootmenu.php');

			}else{
				//顯示錯誤訊息
				echo "query error: ".mysqli_error($conn);

			}
			//關閉資料庫
			mysqli_close($conn);
		}
		
	}	
	
?>

<?php 
	
	//include('dinspost.php');
?>

		<!-- root-->
		<div class="container" id="rootPost">
			<h3>
				<label>管理帳號:</label>
				<span><?php echo $rootName; ?></span>
				<label>權限:</label>
				<span><?php echo $rootPass; ?></span>
			</h3>
			<h1>管理系統</h1>
			
			<form action="rootpost.php" method="POST">
				<p>
					<label>版區 :</label>
					<select name="postArea" id="postArea">
						<option value="1">Tyrannosaurus</option>
						<option value="2">Velociraptor</option>
						<option value="3">Triceratops</option>
						<option value="4">Stegosaurus</option>
						<option value="5">Brachiosaurus</option>
						<option value="6">Mosasaurus</option>
					</select>										
				</p>
				<p>
					<label>公告標題 :</label>
					<input type="text" name="postHeader">
					<div class="error"><?php echo $error['postHeader'];  ?></div>
				</p>
				<p>
					<label>公告內容 :</label>
					<textarea name="postContent"></textarea>
					<div class="error"><?php echo $error['postContent'];  ?></div>
				</p>
				<input type="submit" name="submit" value="submit" class="btn btn-info">
				<input type="reset" value="reset" class="btn btn-warning">
				<a class="btn btn-primary" href="rootmenu.php">back</a>
			</form>
			
		</div>
		<!-- root end-->

<?php 	
	include('footer.php');
?>