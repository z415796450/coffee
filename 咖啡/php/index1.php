<?php
	$conn=mysqli_connect("127.0.0.1","root","","coffee",3306);
	mysqli_query($conn,"SET NAMES UTF8");
		$sql="SELECT * FROM product ORDER BY id DESC LIMIT 3";
		$rs=mysqli_query($conn,$sql);
		$arr=[];
		$arrz=[];
		while(($row=mysqli_fetch_row($rs))!=null){
			Array_push($arr,$row);
		};
		Array_push($arrz,$arr);
		$sql="SELECT * FROM people ORDER BY id DESC LIMIT 4";
		$rs=mysqli_query($conn,$sql);
		$arr=[];
		while(($row=mysqli_fetch_row($rs))!=null){
			Array_push($arr,$row);
		};
		Array_push($arrz,$arr);
		echo(JSON_encode($arrz));
	
?>