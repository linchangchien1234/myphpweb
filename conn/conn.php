<?php

	//資料庫連線
	//1.byethost
	//$conn = mysqli_connect('sql301.bytehost.com','b7_23963827','gdlook1234','b7_23963827_mydins1');

	//2.school
	//$conn = mysqli_connect('localhost','test','test','mydins');

	//3.home
	$conn = mysqli_connect('localhost','test1','test1','mydis1');

	mysqli_query($conn,"set names utf8");

	//檢查資料庫是否連線正確
	if(!$conn){
		echo "Connection error: ".mysqli_connect_error();
	}
?>