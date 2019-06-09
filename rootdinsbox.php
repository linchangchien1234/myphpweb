<?php

	//匯入連線資料庫php檔
	include('conn/conn.php');

	// 初始設定空值
	$boxarea = $boxheader = $boxcontent = '';

	// 設定錯誤時,陣列更換內容
	$error = array('boxArea' => '','boxHeader' => '','boxContent' => '');

	if(isset($_POST['submit'])){

		// 判斷postArea是否為空值
		if(empty($_POST['boxArea'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['boxArea'] = "A area is required <br />";

		}else{
			// 設定rootsearch變數
			$boxarea = $_POST['boxArea'];
			if(!preg_match('/^[0-9\s]+$/',$boxarea)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['boxArea'] = "area must be a valid address <br />";
			}
		}
		// 判斷postHeader是否為空值
		if(empty($_POST['boxHeader'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['boxHeader'] = "A header is required <br />";				
		}else{
			// 設定rootsearch變數
			$boxheader = $_POST['boxHeader'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$boxheader)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['boxHeader'] = "header must be a valid address <br />";
			}
		}
		//echo $error['boxHeader'];
		echo "string";
		// 判斷postContent是否為空值
		if(empty($_POST['boxContent'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['boxContent'] = "A content is required <br />";
		}else{
			// 設定rootsearch變數
			$boxcontent = $_POST['boxContent'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$boxcontent)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['boxContent'] = "content must be a valid address <br />";
			}
		}

		if(array_filter($error)){
			//有錯誤執行
		}else{
			//將使用者輸入的username值存取至變數$usname
			$boxarea = mysqli_real_escape_string($conn, $_POST['boxArea']);
			//將使用者輸入的username值存取至變數$usname
			$boxheader = mysqli_real_escape_string($conn, $_POST['boxHeader']);
			//將使用者輸入的username值存取至變數$usname
			$boxcontent = mysqli_real_escape_string($conn, $_POST['boxContent']);

			//sql指令字串
			//$sql = "SELECT message_box.*,message_box_area.* FROM message_box_area left join message_box on message_box_area.id = message_box.area   WHERE ares = '$rootsearch'";
			$sql = "INSERT INTO message_box (area,header,content) VALUES ('$boxarea','$boxheader','$boxcontent')";
			//INSERT INTO `message_box` (`id`, `area`, `header`, `content`, `writeTime`) VALUES (NULL, '4', 'test', 'This is a test', CURRENT_TIMESTAMP);

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
	include('header4.php');
	//include('dinsbox.php');
?>

		<!-- root-->
		<div class="container" id="root">
			<h3>
				<label>管理帳號:</label>
				<span><?php echo $rootName; ?></span>
				<label>權限:</label>
				<span><?php echo $rootPass; ?></span>
			</h3>
			<h1>管理系統</h1>

			<form action="rootdinsbox.php" method="POST">
				<p>
					<label>版區 :</label>
					<select name="boxArea" id="boxArea">
						<option value="1">Tyrannosaurus</option>
						<option value="2">Velociraptor</option>
						<option value="3">Triceratops</option>
						<option value="4">Stegosaurus</option>
						<option value="5">Brachiosaurus</option>
						<option value="6">Mosasaurus</option>
					</select>					
				</p>

				<p>
					<label>標題 :</label>
					<input type="text" name="boxHeader">
					<div class="error"><?php echo $error['boxHeader'];  ?></div>
				</p>

				<p>
					<label>內容 :</label>
					<textarea name="boxContent"></textarea>
					<div class="error"><?php echo $error['boxContent'];  ?></div>

				</p>
				<input type="submit" name="submit" value="submit" class="btn btn-danger">
				<input type="reset" value="reset" class="btn btn-primary">
				<a class="btn btn-warning" href="rootmenu.php">back</a>
			</form>

		</div>
		<!-- root end-->

<?php
	include('footer.php');
?>