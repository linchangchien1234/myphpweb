<?php 		
	include('header4.php');
	include('searchbox.php');
	
	//匯入連線資料庫php檔
	include('conn/conn.php');	

	$sql = "SELECT * FROM message_box";
	//執行sql指令並檢查是否正確,正確回傳true 
	$result = mysqli_query($conn,$sql);

	/*print_r($result);*/
	//將資料轉成陣列
	$test1 = mysqli_fetch_all($result);

	//釋放記憶體
	mysqli_free_result($result);

	//print_r($test1);		


	//關閉資料庫
	mysqli_close($conn);

	if (isset($_SESSION['checked'])) {		
		echo $_SESSION['checked'];
	}

?>

		<!-- root-->
		<div class="container" id="rootDel">
			<h3>
				<label>管理帳號:</label>
				<span><?php echo $rootName; ?></span>
				<label>權限:</label>
				<span><?php echo $rootPass; ?></span>
			</h3>
			<h1>管理系統</h1>
			<form action="rootdelbox.php" method="POST">
				<p>
					<label>版區 :</label>
					<select name="search" id="search">
						<option value="1">Tyrannosaurus</option>
						<option value="2">Velociraptor</option>
						<option value="3">Triceratops</option>
						<option value="4">Stegosaurus</option>
						<option value="5">Brachiosaurus</option>
						<option value="6">Mosasaurus</option>
					</select>
				</p>
				<input type="submit" name="submitsearch" value="search" class="btn btn-primary">

				<table>
					<?php if (isset($_SESSION['search'])) { ?>
						<?php $test1 = $_SESSION['search']; ?>
						<?php for ($i=0; $i < count($test1); $i++) { ?>
							<?php echo "<tr>"; ?>
							<?php echo '<td><input type="checkbox" name="delcheck[]" value="'.$test1[$i][0].'"></td>'; ?>
				 			<?php for ($j=0; $j < count($test1[0]); $j++) { ?>
		 						<?php echo "<td>".$test1[$i][$j]."</td>"; ?>
				 			<?php } ?>
							<?php echo "</tr>"; ?>
						<?php } ?>
					<?php } else { ?>
						<?php for ($i=0; $i < count($test1); $i++) { ?>
							<?php echo "<tr>"; ?>
							<?php echo '<td><input type="checkbox" name="delcheck[]" value="'.$test1[$i][0].'"></td>'; ?>
				 			<?php for ($j=0; $j < count($test1[0]); $j++) { ?>
		 						<?php echo "<td>".$test1[$i][$j]."</td>"; ?>
				 			<?php } ?>
							<?php echo "</tr>"; ?>
						<?php } ?>
					<?php } ?>
				</table>
				<input type="submit" name="submitDel" value="del" class="btn btn-danger"> 
				<input type="submit" name="submitback" value="back" class="btn btn-warning">
			</form>			
		</div>
		<!-- root end-->

<?php 
	include('footer.php');
?>
