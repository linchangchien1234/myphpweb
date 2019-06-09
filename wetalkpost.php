<?php
	 
	include('conn/conn.php');
	
	$id = $_GET['id'];	
	//sql指令字串
		
	//sql指令字串
	$sql = "SELECT * FROM webtobox WHERE  id = '$id'";

	//執行sql指令並檢查是否正確,正確回傳true 
	$result = mysqli_query($conn,$sql);
	/*print_r($result);*/

	//將資料轉成陣列
	$test1 = mysqli_fetch_all($result);

	//釋放記憶體
	mysqli_free_result($result);
	
	//print_r($test1);	

	for ($i=0; $i <  count($test1); $i++) { 
		for ($j=0; $j < 1 ; $j++) {
			$test2  = $test1[$i][1];
		}
	}
	//session_start();
	if (isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
		//$text = 1;
	}else{
		$name = "Guset";
		//$text = 0;		
	}

	include('header2_1.php');
?>

		<!-- WeTalk -->
		<div class="container">
			<div class="col-lg-3"></div>
			<div class="col-lg-6" id="navHotBreadcrumb">
				<ul class="breadcrumb">
					<li><a href="./wetalk.php">Tyrannosaurus</a></li>
					<li><?php echo $test2; ?></li>
				</ul>
			</div>
			<div class="col-lg-3"></div>
			<div class="col-lg-12" id="allHotContent">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
							<?php for ($i=0; $i < count($test1) ; $i++) { ?>
								<?php echo '<div class="content">'; ?>
								<?php for ($j=0; $j < 1; $j++) { ?>
									<?php if (isset($test1[$i][$j])) { ?>
										<?php echo "<h1>".$test1[$i][1]."</h1><hr>"; ?>
										<?php echo "<p>".$test1[$i][2]."</p><hr>"; ?>
										<?php echo "<p>".$test1[$i][3]."</p><hr>"; ?>
									<?php } ?>
								<?php } ?>
								<?php echo '<div id="respong">'.$test1[$i][4].'</div>'; ?>
								<?php echo '<input type="text" name="respond" id="respond">
											<button id="submit" class="btn btn-primary">回復</button>'; 
								?>
								<?php echo "</div>"; ?>


								<!-- ajax單一刷新respong的值 -->
								<script>
									 $(document).ready(function() {
		    							var com = <?php  echo $test1[0][0]; ?>;
									    $("#submit").click(function() {
									    	var valueText = $('#respond').val();
									    	//alert(valueText);
									    	$('#respong').load("respondpost.php", {
												value: com,
												value2: valueText
											});
									    });
									  });
								</script>
							<?php } ?>
					<div class="content">
						<div class="">
							<a href="wetalk.php">
								back
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- WeTalk End -->
		
<?php 
	include('footer.php');
?>
		
