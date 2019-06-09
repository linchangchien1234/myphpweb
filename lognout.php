<?php 	
	session_start();
	if(isset($_GET['lognout'])){
		session_destroy();
		header("location:index.php");
	}
?>