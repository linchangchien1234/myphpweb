<?php 	
	include('logn.php');
	include('header3.php');
?>
		<!-- lognIn-->
		<div class="container">
			<div id="login">
				<form action="lognin.php" method="POST" id="lognFrom">
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
						<input type="text" name="usName">
						<div class="error"><?php echo $error['usName']; ?></div>
					</div>
					<div class="textBox">
						<label>Password:</label>
						<input type="password" name="password">
						<div class="error"><?php echo $error['password']; ?></div>
					</div>
					<p class="lognBtn">
						<input type="submit" name="submit" value="Logn In" class="btn btn-primary">
						<a href="creat.php" class="btn btn-primary">New</a>
					</p>
				</form>
			</div>
		</div>
		<!-- lognIn end-->

<?php 
	include('footer.php');
?>