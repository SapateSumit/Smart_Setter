<?php 
	session_start();
	$db=mysqli_connect('localhost','root','','smart_setter');

if(!$db)
  echo "failed";
else
  //echo "connected successfully";

	if (!isset($_SESSION['username'])) {
		header('location: \project2019-2020\Login_v6\Login_v6\index.html');
	}

	$user=$_SESSION["username"];

 $sql = "SELECT * FROM `log_table`  WHERE `USERNAME` = '$user'";

   $retval = mysqli_query($db,$sql) or  die("hello".mysqli_connect_error());
      $row = mysqli_fetch_row($retval);
       $str_desig=$row[2];
 ?>




<!--
<html>
<head>
	<title>logout_change</title>
</head>
<link rel="stylesheet" href="CSS/style.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  js file refernce 
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<body>

	<div>
		<button> 
			<a href="logout.php" class="button button3">Logout</a>
		</button>
	</div>
	<div>
		<button>
			<a href="changepass.php" class="button button2">Change Password</a>
		</button>
	</div>
		<div> -->
	<?php
/*	
  if($str_desig=="admin")
  {
   */ ?>

 <!-- <a href="/project2019-2020/AdminPanel/MENU/adminmenu_1.php" class="button button4" ><input  type="button" value="Exit"></a>-->
  
   <?php 
 /*}
  else
  {*/
  ?>
  <!--<a href="/project2019-2020/menu/menu_1.php" class="button button4"><input  type="button" value="Exit"></a>-->
  
<?php
  /*}*/
?>
	<!--	 </div>
	

</body>
</html>
-->

<!DOCTYPE html>
<html>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<head>
<link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	  <link rel="stylesheet" href="\project2019-2020\PRO\PRO\w3.css">

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a  href="\project2019-2020\menu\menu_1.php">DashBoards</a>
  <a  href="\project2019-2020\AddQUESTION\ADDQUESTION1.php">Add Questions</a>
  <a  href="\project2019-2020\PRO\PRO\update.php">Delete/Show/Update Questions</a>
  <a  href="\project2019-2020\PRO\PRO\curriculum.php">Curriculum</a>
  <a  href="\project2019-2020\PRO\PRO\samplepaper.php">Sample Paper</a>
  <a class="active" href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>
</div>

<?php       
echo 'See You , ' . $_SESSION["username"];

?>
<center>
 <h1>Logout</h1>
	<hr>
<a href="logout.php" ><button  class="button button4">Logout</button></a>
<a href="changepass.php" ><button class="button button4">Change Password</button>


	
	
</center>

</body>
</html>
