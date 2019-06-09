<?php
	

	//匯入連線資料庫php檔
	include('conn/conn.php');

	// 初始設定空值
	$usname = $password = $email = $sex = $likes = '';
	// 設定錯誤時,陣列更換內容
	$error = array('usName' => '','password' => '','email' => '','sex' => '','likes' => '' );


	// 判斷submit 是否要回傳GET 或 POST
	if(isset($_POST['submit'])){		
		// 判斷username是否為空值
		if(empty($_POST['usName'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['usName'] = "A userName is required <br />";

		}else{
			// 設定username變數
			$usname = $_POST['usName'];
			// 判斷username驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$usname)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['usName'] = "email must be a valid address <br />";

			}
		}

		// 判斷password是否為空值
		if(empty($_POST['password'])){
			// 將未輸入的錯誤訊息存取至陣列,然後在下方呼叫顯示
			$error['password'] = "A password is required <br />";

		}else{
			// 設定password變數
			$password = $_POST['password'];
			// 判斷password驗證方法
			if(!preg_match('/^[a-zA-Z\s]+$/',$password)){
				// 將錯誤訊息存取至陣列,然後在下方呼叫顯示
				$error['password'] = "password must be a valid address <br />";
			}
		}

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
		// 判斷sex是否為空值
 		if(empty($_POST['sex'])){
 			$error['sex'] = "What's you sex <br />";
 		}else{
 			// 設定sex變數
 			$sex = $_POST['sex'];
 		}

 		//設定存取陣列
 		$likes = [];
 		// 判斷likes是否為空值
		if(empty($_POST['likes'])){

 			$error['likes'] = "plz check <br />";
 		}else{
 			//將使用者選取值存入$likes陣列
 			foreach ($_POST['likes'] as $like) { 				
 					$likes[] = $like;	
 			}
 		}


 		//print_r($likes);
 		
 		//將陣列值用,分開
 		$mylikes = implode(",", $likes);
 		

 		//print_r($mylikes);
 		
		
		


		//判斷表單是否有錯誤
		if(array_filter($error)){
			//有錯誤執行
		}else{
			//無錯誤執行

			//mysqli_real_escape_string() 避免XXS攻擊的函式(資料庫)
			//將使用者輸入的username值存取至變數$usname
			$usname = mysqli_real_escape_string($conn, $_POST['usName']);
			//將使用者輸入的password值存取至變數$password
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			//將使用者輸入的e-mail值存取至變數$email
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			//將使用者輸入的sex值存取至變數$email
			$sex = mysqli_real_escape_string($conn, $_POST['sex']);
			//將使用者輸入的likes值存取至變數$email
			$likesAll = mysqli_real_escape_string($conn,$mylikes );


			//sql新增字串
			$sql = "INSERT INTO test1(username,password,email,sex,likes) VALUES ('$usname','$password','$email','$sex','$likesAll')";



			//mysqli_query(連線,sql); 回傳true false
			//執行sql指令,檢查是否正確
			if(mysqli_query($conn,$sql)){
				//導航至datebase.php
				header('Location: lognin.php');

			}else{
				//顯示錯誤訊息
				echo "query error: ".mysqli_error($conn);

			}
		}
		

	}
	

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/creat.css">
     <!-- JS引入 -->
    <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>

    <style>

    	
    </style>
</head>

<body>
	<div class="bodySet" id="bodySet">
		<!-- navbar 導覽區-->
		<header class="row">
				<div class="container-fluid">
					<nav class="navbar navbar-default navMenuAll">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobileNav">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							<a href="" class="navbar-brand navMenuLogo">
									<span>
										Dinosaur
									</span>
							</a>
						</div>
						<div class="collapse navbar-collapse " id="mobileNav">
							<ul class="nav navbar-nav navMenu11">
								<li class="active">
									<a href="index.html">About</a>
								</li>
								<li>
									<a href="wetalk.html">WeTalk</a>
								</li>
								<li class="aa">
									<a href="datashare2.html">Datashare</a>
								</li>
							</ul>

							<ul class="nav navbar-nav navbar-right navMenu12">
								<li>
									<a href="lognin.html">login</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
		<!-- navbar 導覽區 end-->

		<!-- lognIn-->
		<div class="container">
			<div id="login">
				<form action="creat.php" method="POST">
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
						<label>User Name:&nbsp;</label>
						<input type="text" name="usName" value="<?php echo htmlspecialchars($usname); ?>">
						<div class="error"><?php echo $error['usName']; ?></div>
					</p>
					<p>
						<label>Password:&nbsp;&nbsp;</label>
						<input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
						<div class="error"><?php echo $error['password']; ?></div>
					</p>
					<p>
						<label>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
						<div class="error"><?php echo $error['email'];  ?></div>
					</p>
					<p>
						<label>Boy or Girl</label>
						<input type="radio" name="sex" value="boy">
						<span>boy</span>
						<input type="radio" name="sex" value="girl">
						<span>girl</span>
					</p>
					<p>
						<label>What's do yo like?</label>
						<div id="checkBox">
							<div>
								<input type="checkbox" name="likes[]" value="Tyrannosaurus">
								<span>Tyrannosaurus</span>
							</div>
							<div>
								<input type="checkbox" name="likes[]" value="Velociraptor">
								<span>Velociraptor</span>
							</div>
							<div>
								<input type="checkbox" name="likes[]" value="Triceratops">
								<span>Triceratops</span>
							</div>
							<div>
								<input type="checkbox" name="likes[]" value="Stegosaurus">
								<span>Stegosaurus</span>
							</div>
							<div>
								<input type="checkbox" name="likes[]" value="Brachiosaurus">
								<span>Brachiosaurus</span>
							</div>
							<div>
								<input type="checkbox" name="likes[]" value="Mosasaurus">
								<span>Mosasaurus</span>
							</div>
						</div>
					</p>
					<p>
						<input type="submit" value="submit" name="submit">
						<input type="reset" value="reset">
					</p>
				</form>
			</div>
		</div>
		<!-- lognIn end-->

		<!--分隔線-->
		<div class="lineHr">
			<hr>
		</div>
		<!--分隔線 end-->
		<!--footer 頁尾-->
		<footer>
			<div>
				<p>
					dataSouse:
					<span>http://www.google.com</span>
				</p>
				<p>
					dataSouse:
					<span>http://www.google.com</span>
				</p>
			</div>
		</footer>
		<!--footer 頁尾 end-->
	</div>
</body>
</html>
