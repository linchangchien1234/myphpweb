<?php
	//include('logn.php');
	include('header3.php');

	session_start();

	include('conn/conn.php');

	$name1 = $_SESSION['name'];


	// 初始設定空值
	$email = '';
	// 設定錯誤時,陣列更換內容
	$error = array('email' => '');

	if(isset($_POST['submit'])){

		// 判斷e-mail是否為空值
		if(empty($_POST['email'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['email'] = "An e-mail is required <br />";

		}else{
			// 設定e-mail變數
			$email = $_POST['email'];
			// 判斷e-mail驗證方法
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['email'] = "email must be a valid address <br />";
			}
		}	

 		if(array_filter($error)){
			//有錯誤執行
		}else{
			//無錯誤執行

			//mysqli_real_escape_string() 避免XXS攻擊的函式(資料庫)
			//將使用者輸入的e-mail值存取至變數$email
			$email = mysqli_real_escape_string($conn, $_POST['email']);	


			//sql新增字串
			$sqlupdate = "UPDATE member SET email = '$email' WHERE userName = '$name1'";



			//mysqli_query(連線,sql); 回傳true false
			//執行sql指令,檢查是否正確
			if(mysqli_query($conn,$sqlupdate)){
				//導航至datebase.php
				//header('Location: lognsucess.php');

			}else{
				//顯示錯誤訊息
				echo "query error: ".mysqli_error($conn);

			}
		}		
 	}
 	$sql = "SELECT userName,email,sex,likes FROM member WHERE userName = '$name1'";

	//執行sql指令並檢查是否正確,正確回傳true 
	$result = mysqli_query($conn,$sql);
 	//將資料轉成陣列
	$test1 = mysqli_fetch_assoc($result);

	//釋放記憶體
	mysqli_free_result($result);

	//關閉資料庫
	mysqli_close($conn);


?>
		<!-- lognIn-->
		<div class="container">
			<div id="login">
				<form action="lognsucess.php" method="POST" id="lognsucess">
					<div id="formH">
						<span>D</span>
						<span>i</span>
						<span>n</span>
						<span>o</span>
						<span>s</span>
						<span>a</span>
						<span>u</span>
						<span>r</span>
					</div>
					<p>
						<label>Username:</label>
						<p><?php echo $test1['userName']; ?></p>
					</p>
					<p>
						<label>E-mail:</label>
						<input type="text" name="email" value="<?php echo htmlspecialchars($test1['email']); ?>">
						<div class="error"><?php echo $error['email'];  ?></div>
					</p>
					<p>
						<label>Sex:</label>
						<p><?php echo $test1['sex']; ?></p>	
					</p>
					<p>
						<label>Likes:</label>
						<p><?php echo $test1['likes']; ?></p>
					</p>
					<p>
						<input type="submit" name="submit" value="change" class="btn btn-primary">
						<input type="reset" value="reset" class="btn btn-primary">
						<a href="index.php" class="btn btn-primary">回首頁</a>
					</p>
				</form>
			</div>
		</div>
		<!-- lognIn end-->

<?php 
	include('footer.php');
?>