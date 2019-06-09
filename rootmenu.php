<?php 
	
	include('header4.php');	
?>

		<!-- root-->
		<div id="rootMenu" class="container" >
			<h3>
				<label>管理帳號:</label>
				<span><?php echo $rootName; ?></span>
				<label>權限:</label>
				<span><?php echo $rootPass; ?></span>
			</h3>
			<h1>管理系統</h1>
			<div>
				<a class="btn btn-primary" href="rootpost.php">公告</a>
				<a class="btn btn-warning" href="rootdinsbox.php">新增留言</a>
				<a class="btn btn-danger" href="rootdelbox.php">刪除留言</a>
				<a class="btn btn-warning" href="rootdeluser.php">查詢帳號</a>
			</div>	
		</div>
		<!-- root end-->

<?php 	
	include('footer.php');
?>
