<?php

session_start();

$db=mysqli_connect('localhost','root','','smart_setter');

if(!$db)
  echo "failed";


$sql_u = "SELECT * FROM coursetable";
 $res_u = mysqli_query($db, $sql_u);

?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
      function refreshPage(){
        
          location.reload();
              
      }
    </script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
 

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 


/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


}


</style>


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
<link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="\project2019-2020\PRO\PRO\w3.css">
    <!-- js file refernce -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
  <a  href="\project2019-2020\AdminPanel\MENU\adminmenu_1.php">DashBoard</a>
  <a  href="\project2019-2020\adminmenu\ADDQUESTION1.php">Add Questions</a>
  <a  href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a class="active" href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  

</div>

 

<form action="server.php" style="border:1px solid #ccc" method="post">
<?php
   echo 'Hi, ' . $_SESSION["username"];
?>
<center>
<h1>Add User</h1>
	<hr>
	 <p>Please fill in this form to create an account.</p>
	</center>
  <div class="container">

    
   


    <label for="USERNAME"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="USERNAME" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>


    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <br>

      <label for="psw-repeat"><b>Permission Selection</b></label>  <br><br>
    <input type="radio" id="admin" name="Permission" value="admin">
     <label for="admin">Admin</label>
      <br> <input type="radio" id="filler" name="Permission" value="filler">
         <label for="filler">Filler</label>       
    <br><br><br>
        <label for="psw-repeat"><b>Courses Alloted</b></label><br><br>
        
            <?php
 
            while($data = mysqli_fetch_array($res_u)) { ?>
             <label class="container">
             
            <input type='checkbox' value="<?php echo $data['CourseCode'];?>" name='techno[]'> 
             <?php echo strtoupper($data['CourseName']).'-('.strtoupper($data['CourseCode']).')'; ?>
            <span class="checkmark"></span>
             </label>
            <?php }

            ?>
<!-- <label class="container">Advance Java(IT501E)
  <input type='checkbox'  value="it501e" name='techno[]'>
  <span class="checkmark"></span>
</label>
<label class="container">Linux Programming(IT403E)
  <input type="checkbox" value="it403e" name="techno[]">
  <span class="checkmark"></span>
</label>
<label class="container">Data Mining And Warehousing(IT504E)
  <input type="checkbox" value="it504e" name="techno[]">
  <span class="checkmark"></span>
</label>
<label class="container">Internetworking With TCP/IP(IT407E)
  <input type="checkbox" value="it407e" name="techno[]">
  <span class="checkmark"></span>
</label>-->
    <br>
    <br>

    

    <div class="clearfix">
     <center> <button type="button" class="button" onclick='refreshPage()'>Reset</button>
      <button type="submit" class="button button2" name="register">Sign Up</button>
   <a href="/project2019-2020/AdminPanel/MENU/adminmenu_1.php">   <button type="button" class="button button3" >Exit</button></center></a>
    </div>
  </div>
</form>

</body>
</html>

