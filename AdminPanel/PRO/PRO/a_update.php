<?php
//ini_set( "display_errors", 0); 
require_once("DBPHP/DB.php");
 session_start();

  $userlogin=$_SESSION["username"];
$URCID; // update required table name
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
  
  
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
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="\project2019-2020\PRO\PRO\w3.css">

	<title>Update</title>
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
  <a  href="\project2019-2020\AdminPanel\MENU\adminmenu_1.php">DashBoard</a>
  <a  href="\project2019-2020\adminmenu\ADDQUESTION1.php">Add Questions</a>
  <a  href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a  href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a class="active" href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  
  
</div>
   <?php
   echo 'Hi, ' . $_SESSION["username"];
?>

   <center><h2 class="h2tex">Update Section</h2></center>
 <hr>

 <div class="container UShowPanel">
   <br>
   <table class="table table-hover" >
     <thead>
       <tr>
         <th>ID</th>
         <th>Username</th>
         <!--<th>Password</th>-->
         <!-- <th>Chapter</th> -->
         <!--<th>Marks</th> -->
         <th>Designation</th>
           <th>Alloted Course</th>
         <th>Update</th>
         <th>Delete</th>

       </tr>
    </thead>
<!-- php code here -->
<?php
   $sql_u = "SELECT * FROM log_table";
 $res_u = mysqli_query($link, $sql_u);

   $Counter = 0; //counter for display row number as per user prefernce

  while($DataRows= mysqli_fetch_assoc($res_u))
  {     //echo "hiiiiiiii";
        $USERNAME = $DataRows["USERNAME"];
        
        $PASSWORD=$DataRows["PASSWORD"];
      
        $DESIGNATION=$DataRows["DESIGNATION"];
            $ALLOTED_COURSE=strtoupper($DataRows["ALLOTED_COURSE"]);

        $Counter++;
    
  
 ?>
     <tbody>
       <tr>
         <td><?php echo $Counter; ?></td>
         <td><?php echo $USERNAME; ?></td>
         <!-- <td><?php echo $PASSWORD; ?></td> -->
         <td><?php echo $DESIGNATION; ?></td>
          <td><?php echo $ALLOTED_COURSE; ?></td>
         <!-- this is link button-->
         <td><a href="a_change.php?USERNAME=<?php echo $USERNAME;?>" class="btn btn-warning" role="button">Change</a></td>
         
         <td><a href="a_delete.php?USERNAME=<?php echo $USERNAME; ?>" class="btn btn-danger" role="button">Delete</a></td>
       </tr>
     </tbody>

<?php } ?>

   </table>
 </div>


<!-- end of php code with html new techinieque-->

?>






    </body>

</html>
 