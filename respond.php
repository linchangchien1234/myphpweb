<?php

	include('conn/conn.php');

	$id = $_POST['value'];
	$text = $_POST['value2'];

	date_default_timezone_set("Asia/Taipei");

	//sql新增字串
	$sql = 'UPDATE message_box SET respond = "'.$text.'", respondTime="'.date("Y/m/d h:i:s").'" WHERE id = '.$id;


	if (mysqli_query($conn, $sql)) {
	    echo "<p>".$text."</p>";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

?>