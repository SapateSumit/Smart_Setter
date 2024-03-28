<?php
$connect = mysqli_connect("localhost", "root", "", "smart_setter");  
?>
<?php 
	  
 session_start();

  $userlogin=$_SESSION["username"];
$URCID; // update required table name

	  $dbh = new PDO("mysql:host=localhost;dbname=smart_setter", "root", "");
	  if(isset($_POST["btn"]))  
 {  
	$course=$_POST['course'];
	$name = $_FILES["myfile"]["name"];  
	$type = $_FILES["myfile"]["type"];  
	$data = file_get_contents($_FILES["myfile"]["tmp_name"]);    
	$stmt = $dbh->prepare("insert into files_curriculum values('',?,?,?,?)");
		echo "<script>alert('Insert Done Success!!!!!')</script>";
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->bindParam(4,$course);
	$stmt->execute();
 }
	  
	  ?>
	  
	  <?php
	  
	   if(isset($_POST["btn_paper"]))  
 {  
	$course=$_POST['course'];
	$name = $_FILES["myfile"]["name"];  
	$type = $_FILES["myfile"]["type"];  
	$data = file_get_contents($_FILES["myfile"]["tmp_name"]);    
	$stmt = $dbh->prepare("insert into files_samplepaper values('',?,?,?,?)");
		echo "<script>alert('Insert Done Success!!!!!')</script>";
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->bindParam(4,$course);
	$stmt->execute();
 }
 
 if(isset($_POST["BitMapping"]))  
 {  
   // $bits=$_POST["Q1_1"].$_POST["Q1_2"].$_POST["Q1_3"].$_POST["Q1_4"].$_POST["Q1_5"].$_POST["Q1_6"].$_POST["Q1_7"].$_POST["Q2_1"].$_POST["Q2_2"].$_POST["Q2_3"].$_POST["Q2_4"].$_POST["Q2_5"].$_POST["Q3_1"].$_POST["Q3_2"].$_POST["Q3_3"].$_POST["Q3_4"].$_POST["Q3_5"].$_POST["Q4_1"].$_POST["Q4_2"].$_POST["Q4_3"].$_POST["Q4_4"].$_POST["Q4_5"].$_POST["Q5_1"].$_POST["Q5_2"].$_POST["Q5_3"].$_POST["Q6_1"].$_POST["Q6_2"].$_POST["Q6_3"];
    $bits=$_POST['tech'];
    $bits=array_change_key_case($bits,CASE_UPPER);
    $C=$_POST["C"];
    $chk="";  

   foreach($bits as $chk1)  
   {  
      $chk .= $chk1.",";  
   }

   $query="UPDATE coursetable  SET `BIT`='$chk' where CourseCode='$C'"; 
    if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert(" Bits Inserted Successfully")</script>';  
      }
      else
      {

        echo "no"; 
      }
     //print_r($bits); 


 }
	  
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
           <title>Insert Section</title>  
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
  <a class="active" href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
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
   
      <div >  
                <h3 align="center">Insert Curriculum</h3>  
                <br />  
				<center>
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="myfile"/>  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					 <select id="course" name="course" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
       <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>
		 

            <?php } ?>   
     </select>
					 <button class="btn btn-info" name="btn"> Upload </button>
                     
                </form>  
				</center>
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		   <!---=------------------------------------------------------------->
		   
		   
      <div >  
                <h3 align="center">Insert Sample Paper</h3>  
                <br />  
				<center>
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="myfile"/>  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					 <select id="course" name="course" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
       <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>
		 

            <?php } ?>   
     </select>
					 <button class="btn btn-info" name="btn_paper"> Upload </button>
                     
                </form>  
				</center>
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		   
         
		<!---=------------------------------------------------------------->

           <?php
		   $connect = mysqli_connect("localhost", "root", "", "smart_setter");  
         $arr=array();
         $QUERY="SELECT * FROM coursetable";
         $result =mysqli_query($connect, $QUERY);
         while($DataRows =mysqli_fetch_assoc($result))
         {
           array_push($arr,$DataRows["CourseCode"]);
         }



      ?> 

           <form method="post" enctype="multipart/form-data">
     
<h3 align="center"><b>Insert Course Bits</h3></b>  <center>
 <br />
 
 <label for="UNIT" align="center"><b>Course Code<font color="red">*</font></b></label>
 <select name="C" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   
     </select></center>
     <br />

<table style="width:50%" align="center">
  <tr>
    <th>Q.No</th>
    <th>Bit 1</th> 
    <th>Bit 2</th> 
    <th>Bit 3</th>
    <th>Bit 4</th> 
    <th>Bit 5</th> 
    <th>Bit 6</th> 
    <th>option</th>
  </tr>
    <tr>
    <th>01</th>
    <th><input  type=text  size=3 name='tech[]'  maxlength=3  onkeyup="this.value = this.value.toUpperCase();" required ></th>
    <th><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></th>
    <th><input maxlength=3 type=text size=3  name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></th>
    <th><input maxlength=3 type=text size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></th>
    <th><input maxlength=3  type=text size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></th>
    <th><input maxlength=3  type=text size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></th>
    <td>5/7</td>
     <tr>
    <td></td>
    <td><input  type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
     <td></td>
      <td></td>
    </tr>
      
  
   <tr>
    <td>02</td>
    <td><input name='tech[]' type=text maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text name='tech[]'maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 name='tech[]' size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input  type=text maxlength=3 size=3  name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input  type=text maxlength=3 size=3  name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    
    <td>3/5</td>
  </tr>
  <tr>
    <td>03</td>
    <td><input  type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    
    <td>3/5</td>
  </tr>
  <tr>
    <td>04</td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input type=text maxlength=3 size=3 name='tech[]' onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    
    <td>3/5</td>
  </tr>
  
  
  
   <tr>
    <td>05</td>
    <td><input name='tech[]' type=text maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input  name='tech[]' type=text maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input name='tech[]' type=text maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td>2/3</td>
  </tr>
  
  
   <tr>
    <td>06</td>
    <td><input name='tech[]' type=text maxlength=3 size=3  onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td><input name='tech[]' type=text maxlength=3 size=3  onkeyup="this.value = this.value.toUpperCase();"required></td>
    <td><input name='tech[]' type=text maxlength=3 size=3 onkeyup="this.value = this.value.toUpperCase();" required></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td>2/3</td>
  </tr>
</table>
<center>
  <br>
<input type="submit"   name="BitMapping" id="BitMapping" value="Insert" class="btn btn-info" />  

</center>
</form>
      </body>  
 </html>