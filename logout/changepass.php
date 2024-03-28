<?php 
	session_start();
	$con = mysqli_connect('localhost' , 'root', '', 'smart_setter');

	if (!isset($_SESSION['username'])) {
		header('location:index.html');
	}

	if (isset($_POST['change'])) {
		$user=$_SESSION['username'];
		$oldpass=$_POST['oldpass'];
		$newpass=$_POST['newpass'];
		$Retype=$_POST['Retype'];
		$query="select PASSWORD from log_table where USERNAME='$user' LIMIT 1";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		if (password_verify($oldpass,$row['PASSWORD'])) {  
			if ($newpass==$Retype) {
				
		$newpass = password_hash($newpass, PASSWORD_DEFAULT);//this will encrypt the password

			$query="update log_table set PASSWORD='$newpass' WHERE USERNAME='$user' ";
				$result=mysqli_query($con,$query);
				 echo "<script> alert('PASSWORD UPDATED SUCCESSFULLY'); 

						window.location.href='logout_change.php';</script>";
                            //session_destroy();

				
			}
			else
			{
				echo "<script>
						alert('Proper Retype Password');
						window.location.href='changepass.php';
				</script>";
			}
		}
		else
		{
			echo "<script>
						alert('old password is not correct');
						window.location.href='changepass.php';
				</script>";
		}
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>changePASS</title>
</head>
<link rel="stylesheet" href="CSS/style.css">
  <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     js file refernce 
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
<body>

<script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function myFunction2() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function myFunction3() {
  var x = document.getElementById("myInput3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

	<form action="changepass.php" method="post">
		
		<label>Old Password:</label>
		<input type="password" name="oldpass" id="myInput1" ><br>
                 <input type="checkbox" onclick="myFunction1()">Show Password<br>
<br><br>
		<label>New Password:</label>
		<input type="password" name="newpass" id="myInput2"><br>
                <input type="checkbox" onclick="myFunction2()">Show Password<br>
<br><br>
		<label>Retype new Password</label>
		<input type="password" name="Retype" id="myInput3"><br>
                <input type="checkbox" onclick="myFunction3()">Show Password<br>
<br><br>
		<button type="Submit" name="change">Change</button><br><br>
        <a href="/project2019-2020/logout/logout_change.php"><input type="button" value="Exit"></a>
	</form>
	

</body>
</html>