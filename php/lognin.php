<?php 

	//匯入連線資料庫php檔
	include('conn/conn.php');

	$sql = "SELECT username,password FROM test1";

	$result = mysqli_query($conn,$sql);

	$test1 = mysqli_fetch_all($result,MYSQLI_ASSOC);

	mysqli_free_result($result);

	mysqli_close($conn);

	print_r($test1);
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
    <link rel="stylesheet" href="css/lognin.css">

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
									<p>Hello<?php  ?></p>
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
				<form>
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
					<!-- <h3>Dinosaur Mumber</h3> -->
					<div class="textBox">
						<label>UserName:</label>
						<input type="text">
					</div>
					<div class="textBox">
						<label>Password:</label>
						<input type="text">
					</div>
					<p>
						<input type="submit" value="Logn In" class="btn btn-primary">
						<a href="creat.html" class="btn btn-primary">New</a>
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
