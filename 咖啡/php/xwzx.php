<?php
	$con=mysqli_connect("127.0.0.1","root","","coffee",3306);
	mysqli_query($con,"SET NAMES UTF8");
	$sql="SELECT * FROM xwzx ORDER BY id DESC LIMIT 5";
	$rs=mysqli_query($con,$sql);
	$arr=[];
	while(($row=mysqli_fetch_row($rs))!=null){
		Array_push($arr,$row);
	}
	echo (JSON_encode($arr));
?>