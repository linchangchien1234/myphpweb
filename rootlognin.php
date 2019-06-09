<?php 	
	include('rootlogn.php');
	include('header4.php');
?>

		<!-- lognIn-->
		<div class="container">
			<div id="login">				
				<form id="lognFrom" action="rootlognin.php" method="POST">
					<div id="formH">
						<h1>網站後端管理</h1>
					</div>
					<!-- <h3>Dinosaur Mumber</h3> -->
					<div class="textBox">
						<label>RootName:</label>
						<input type="text" name="rootName" value="<?php htmlspecialchars($rootname); ?>">
						<div><?php echo $error['rootName']; ?></div>
					</div>
					<div class="textBox">
						<label>RootPassword:</label>
						<input type="password" name="rootPassword">
						<div><?php echo $error['rootPassword']; ?></div>
					</div>
					<p class="lognBtn">
						<input type="submit" name="submit" value="Logn In" class="btn btn-primary">
						<input type="reset" value="reset" class="btn btn-primary">
					</p>
				</form>
			</div>
		</div>
		<!-- lognIn end-->

<?php 
	include('footer.php');
?>
