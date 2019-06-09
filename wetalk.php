<?php 
	include('conn/conn.php');

	//sql指令字串
	$sql = "SELECT id,header,writeTime FROM message_box WHERE area = 1";
	$sql1 = "SELECT id,post,postTime FROM webtobox WHERE areafk = 1";
	//執行sql指令並檢查是否正確,正確回傳true 
	$result = mysqli_query($conn,$sql);
	$result1 = mysqli_query($conn,$sql1);
	/*print_r($result);*/

	//將資料轉成陣列
	$test1 = mysqli_fetch_all($result);
	$test2 = mysqli_fetch_all($result1);
	//釋放記憶體
	mysqli_free_result($result);
	mysqli_free_result($result1);
	//關閉資料庫
	mysqli_close($conn);	

	//print_r($test1);


?>


<?php
	//session_start();
	if (isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
		$text = 1;
	}else{
		$name = "Guset";
		$text = 0;
	}
	include('header2_1.php');
?>

		<!-- WeTalk -->
		<div class="container">
			<div class="col-lg-12 hot" id="navHot">
				<div class="container-fluid">
					<nav class="nav">
						<ul class="nav nav-tabs">
								<li class="active"><a href="./wetalk.php">Tyrannosaurus</a></li>
								<li><a href="./wetalk2.php">Velociraptor</a></li>
								<li><a href="./wetalk3.php">Triceratops</a></li>
								<li><a href="./wetalk4.php">Stegosaurus</a></li>
								<li><a href="./wetalk5.php">Brachiosaurus</a></li>
								<li><a href="./wetalk6.php">Mosasaurus</a></li>
							</ul>
					</nav>
				</div>
			</div>

			<input type="hidden" id="valuepass" name="valuepass">

			<div class="col-lg-12 hot" id="allHot">
				<div>
					<table class="table table-striped table-hover table-responsive">
						<thead><th>公告</th></thead>
						<tbody>
							<?php for ($i=0; $i < count($test2) ; $i++) { ?>
									<?php echo "<tr>"; ?>
									<?php for ($j=0; $j < 1 ; $j++) { ?>
										<?php if($name != 'Guset'){ ?>
										 <?php echo '<th><a href="./wetalkpost.php?&id='.$test2[$i][0].'" id="'.$i.'">'.$test2[$i][1].'</a></th>'; ?>  
										<?php echo "<th>".$test2[$i][2]."</th>"; ?>
										<?php } else { ?>
											<?php echo '<th><a href="./index.php">'.$test1[$i][1].'</a></th>'; ?>
											<?php echo "<th>".$test2[$i][2]."</th>"; ?>
										<?php } ?>
									<?php } ?>
									<?php echo "</tr>"; ?>
								<?php } ?>
						</tbody>

					</table>
					<table class="table table-striped table-hover table-responsive ">

						<caption id="caption"></caption>
						<thead>
								<th>文章</th>
								<th>時間</th>
						</thead>
						<tbody>
								  <?php for ($i=0; $i < count($test1) ; $i++) { ?>
									<?php echo "<tr>"; ?>
									<?php for ($j=0; $j < 1 ; $j++) { ?>
										<?php if($name != 'Guset'){ ?>
											<?php echo '<th><a href="./wetalkcontent.php?&id='.$test1[$i][0].'" id="'.$i.'">'.$test1[$i][1].'</a></th>'; ?>
											<?php echo "<th>".$test1[$i][2]."</th>"; ?>
										<?php } else { ?>
											<?php echo '<th><a href="./index.php">'.$test1[$i][1].'</a></th>'; ?>
											<?php echo "<th>".$test1[$i][2]."</th>"; ?>
										<?php } ?>
									<?php } ?>
									<?php echo "</tr>"; ?>
								<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- WeTalk End -->

<?php
	include('footer.php');
?>

