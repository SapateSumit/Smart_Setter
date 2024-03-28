<?php
$con=mysqli_connect('localhost' , 'root', '', 'smart_setter');
session_start();
  if (!isset($_SESSION['username'])) {
    header('location:INDEX_filler.php');
  }
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  background-color:#3F7EFF;
  color: white;
}
</style>
     <!--js file refernce 

<link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
 <link rel="stylesheet" href="\project2019-2020\PRO\PRO\w3.css">

</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="\project2019-2020\adminmenu\changepass.php" class="w3-bar-item w3-button" >&#9731; Change Password </a>
  <a href="\project2019-2020\adminmenu\logout.php" class="w3-bar-item w3-button">&#9211; Logout </a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
 
     
<script>

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
     
<div class="topnav">
  <a class="active" href="#home">DashBoard</a>
  <a href="\project2019-2020\adminmenu\ADDQUESTION1.php">Add Questions</a>
  <a href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
  <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  

</div>

<div style="padding-left:16px">
  <h1>PROFILE</h1>

  <?php


echo 'Hi, ' . $_SESSION["username"];
//session_destroy();
?>
  <p></p>
</div>

</body>
</html>