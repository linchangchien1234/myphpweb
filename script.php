<?php 
		session_start();
		$name = $_SESSION['name'];
		//$ss = $_SESSION['name1'];
?>

<script>


	alert(<?php echo $name; ?>);

		 
	
</script>