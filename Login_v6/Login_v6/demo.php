<!DOCTYPE html>
<html>
<head>
	<title>PHP demo</title>
</head>
<body>

	
	<?php

		$con = mysqli_connect("localhost" , "root", "", "smart_setter");

		if(!$con)
		{
			echo "<script>alert('Connection Fails!!!!!!')</script>";
			exit();
		}
		else{
			echo "<script>alert('Connection Done!!!!!!')</script>";
		}

		$username = $_POST['username'];
		$Password = $_POST['pass'];



		$dbr =sprintf("select * from log_table where username='$username' AND password='$Password' LIMIT 1");
		//$query=sprintf("select designation from log_table username='$username' AND password='$Password' LIMIT 1");
		$result = mysqli_query($con,$dbr);
		$res = mysqli_fetch_array($result);
		if($res > 0)
		{
			echo "<script>alert('Login Success!!!!!!')</script>";
			header("Location: http://localhost/project2019-2020/generatequestionpapemodule/generatepaper.html");
		}
		else{
			echo "<script>alert('Login Fails!!!!!!')</script>";
			exit();
		}
		


	?>




</body>
</html>