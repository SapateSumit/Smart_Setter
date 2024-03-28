<?php 
	  
 session_start();

  $userlogin=$_SESSION["username"];
$URCID; // update required table name

	  $dbh = new PDO("mysql:host=localhost;dbname=smart_setter", "root", "");
	 
	  
	  ?>
	  
	 
<!DOCTYPE html>  
 <html>  
 <style>
table, th, td {
  border: 0.75px solid black;
}
input[type=text] {
  border: 2px solid black;
  width: 100%;
}
div {
  
  background-color: #f2f2f2;

}
</style>
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
           <title>Show PDF Section</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
  <a  href="\project2019-2020\AdminPanel\MENU\adminmenu_1.php">DashBoard</a>
  <a  href="\project2019-2020\adminmenu\ADDQUESTION1.php">Add Questions</a>
  <a  href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a  href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a  href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a  href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  class="active" href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a  href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  
  
</div>


 <?php
   echo 'Hi, ' . $_SESSION["username"];
    $connect = mysqli_connect("localhost", "root", "", "smart_setter");  
         $arr=array();
         $QUERY="SELECT * FROM coursetable";
         $result =mysqli_query($connect, $QUERY);
         while($DataRows =mysqli_fetch_assoc($result))
         {
           array_push($arr,$DataRows["CourseCode"]);
         }

?>
   
      
<br>
           <div >  
                <h3 align="center">Display Curriculum</h3>  
                <br />  
				<center>
                <form method="post" enctype="multipart/form-data">  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					 <select id="course" name="course" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
       <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>
		 

            <?php } ?>   
     </select>
	  <button class="btn btn-info" name="btn"> Show </button>
	<!--				<select id="course" name="course" required>
					<option value="" disabled selected hidden>Select Course</option>
					<option value="IT501E">IT501E</option>
					  <option value="CM404E">CM404E</option>
					  <option value="IT303E">IT303E</option>
					  <option value="IT504E">IT504E</option>
					</select>
					 <button class="btn btn-info" name="btn"> Show </button>
        -->             
                </form> 
</center>				
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		    <h4 align="center">
			 <?php
		   
		    if(isset($_POST["btn"]))  
 {  

		$course=$_POST['course'];
		$stat= $dbh->prepare("select * from files_curriculum where course like ('$course%')");
		$stat->bindParam(1,$course);
		$stat->execute();
		
			while($row = $stat->fetch()){
			echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']." - ".$row['course']."</a><br/>
			<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='500' height='200'/></li>";
		   }
 }
			
			
			?>
			</h4>
		   <!---=------------------------------------------------------------->
		   
		   
		   <br>
	
           <div >  
                <h3 align="center">Display Sample Paper</h3>  
                <br />  
				<center>
                <form method="post" enctype="multipart/form-data">  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					<select id="course" name="course" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
       <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>
		 

            <?php } ?>   
     </select>
	  <button class="btn btn-info" name="btn_paper"> Show </button>
	<!--				<select id="course" name="course" required>
					<option value="" disabled selected hidden>Select Course</option>
					<option value="IT501E">IT501E</option>
					  <option value="CM404E">CM404E</option>
					  <option value="IT303E">IT303E</option>
					  <option value="IT504E">IT504E</option>
					</select>
					 <button class="btn btn-info" name="btn"> Show </button>
        -->             
                </form> 
</center>				
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		    <h4 align="center">
			 <?php
		   
		    if(isset($_POST["btn_paper"]))  
 {  

		$course=$_POST['course'];
		$stat= $dbh->prepare("select * from files_samplepaper where course like ('$course%')");
		$stat->bindParam(1,$course);
		$stat->execute();
		
			while($row = $stat->fetch()){
			echo "<li><a target='_blank' href='view1.php?id=".$row['id']."'>".$row['name']." - ".$row['course']."</a><br/>
			<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='500' height='200'/></li>";
		   }
 }
			
			
			?>
			</h4>
         
		<!---=------------------------------------------------------------->

           
      </body>  
 </html>