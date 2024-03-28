<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
// Starting session
session_start();
if (!isset($_SESSION['username'])) {
    header('location:INDEX_filler.php');
  }
//echo 'Hi, ' . $_SESSION["username"];
$userLogin=$_SESSION["username"];
$link = mysqli_connect("localhost", "root", "", "smart_setter");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 if(isset($_POST["Submit"]))
 {
 
// Escape user inputs for security
//$course_name = mysqli_real_escape_string($link, $_REQUEST['Course']);
$question = mysqli_real_escape_string($link, $_REQUEST['QUESTION_FIELD']);
$unit = mysqli_real_escape_string($link, $_REQUEST['UNIT']);
$Difficulty_Level = mysqli_real_escape_string($link, $_REQUEST['Level']);
$Marks_Alloted = mysqli_real_escape_string($link, $_REQUEST['marks']);
$Semester = mysqli_real_escape_string($link, $_REQUEST['semester']);
$Course_Code = mysqli_real_escape_string($link, $_REQUEST['C_code']);
//$_FILES = mysqli_real_escape_string($link, $_REQUEST['image']);
$sql="";
$bit=$unit.$Difficulty_Level.$Marks_Alloted;
   
    if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
    {
        $sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`,`Flag`) VALUES ('$bit', '$question', '$userLogin', '$Semester',1)";
    }
    else
    { 
          
           $image = addslashes($_FILES['image']['tmp_name']);
           $name = addslashes($_FILES['image']['name']);
           $image = file_get_contents($image);
           $image = base64_encode($image);
           
        // change this qury to get your own result
      
        $sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`,`IMAGE`,`NAME`,`Flag`) VALUES ('$bit', '$question', '$userLogin', '$Semester','$image','$name',1)";
     
    }


// Attempt insert query execution
//$sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`,`IMAGE`) VALUES ('$bit', '$question', '$userLogin', '$Semester','$image')";

if(mysqli_query($link, $sql)){
       echo "<script>
           alert('Your question is Inserted succesfully');
           window.location.href='ADDQUESTION1.php';
           </script>";

} 
else{
    echo "<script>
           alert('Your question is not  Inserted succesfully');
            window.location.href='ADDQUESTION1.php';
           </script>". mysqli_error($link);
}
 //   $sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`) VALUES ('$bit', '$question', '$userLogin', '$Semester')";
// Close connection

mysqli_close($link);
}
?>
<!-- END OF PHP CODE -->	
<!ADD QUESTION MODULE>
<html>
<script type="text/javascript">
      function refreshPage(){
        
          location.reload();
              
      }
    </script>

<script>  
function myFunction() {
  var x = document.getElementById("myTextarea").required;
  document.getElementById("demo").innerHTML = x;
}
</script>

<style>
input[type=text], select {
   
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 25%;
  background-color:#45a049;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button] {
  
  width: 25%;
  background-color:#45a049;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
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


<head>

<title> Add Questions </title>
<head>
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
  <a class="active" href="\project2019-2020\adminmenu\ADDQUESTION1.php">Add Questions</a>
  <a href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  

</div>
  <script>

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  <!-- java script -->     
  <script>
            $('#inputGroupFile02').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
  </script>
  <!-- end of javascript -->
  <?php
// Starting session
//session_start();
echo 'Welcome , ' . $_SESSION["username"];
//session_destroy();
$db=mysqli_connect('localhost','root','','smart_setter');

if(!$db)
  echo "failed";
else
  //echo "connected successfully";

?>

<h1><CENTER>Add Questions (ADMIN)	</h3>
<hr>
<div>
  <form  method="POST" enctype="multipart/form-data">
   
       <?php       
//**$str="";
//**  echo "hello";
$user=$_SESSION["username"];

//**echo "annlipgour";
 $sql = "SELECT * FROM `log_table`  WHERE `USERNAME` = '$user'";
  // mysql_select_db('test_db');
//** echo "H1annlipgour";
   $retval = mysqli_query($db,$sql) or  die("hello".mysqli_connect_error());
  //** echo "annlipgour";
   //if(! $retval ) {
     // die('Could not get data: ' . mysqli_error());
   //}

//**   echo " H2Iannlipgour"."<br>";
  //** print_r($retval);
   $row = mysqli_fetch_row($retval);
           //**echo $row[3];
            //**echo " jiiiiH2Iannlipgour";
         $str=$row[3];     
         $str_desig=$row[2];
//$str="aaaaaa,bbbbbb,cccccc,dddddd,eeeeee,ffffff";
//**   echo " H3Iannlipgour"."<br>";
  //** echo $str."<br>";


//  ** echo $str;
//**echo "\n";
$i=0;
$st=0;
$ed=6;
$j=0;
$arr=array();
 
		   $connect = mysqli_connect("localhost", "root", "", "smart_setter");  
         $arr=array();
         $QUERY="SELECT * FROM coursetable";
         $result =mysqli_query($connect, $QUERY);
         while($DataRows =mysqli_fetch_assoc($result))
         {
           array_push($arr,$DataRows["CourseCode"]);
         }



      
//**print_r($arr);
 
/*$end=6;
$start=0;
 $j=0;
echo " H4Iannlipgour"."<br>";
$arry_str=array();
echo $str;
echo '<br>';
$i=0;
 echo strlen($str)."<br>";
  while($end<=strlen($str))
        {
           
     if($str!=null)
      {

         
           $str2 =substr($str,$start,$end);
            // echo substr($str,$start,$end);
            echo "$str2"."<br>";
           $arry_str[$i]=$str2;
          echo  "element  ".$arry_str[$i]."<br>";
           //**echo $start."<br>";
           $start=$end+1;
           //*echo $start."<br>";
           $end=$start+6;
 
           $i=$i+1;
          //join the course in the drop down menu 
           $j=$j+1;
         }
       

    else
    {
      if($j==0) 
      {//echo "helo";
        echo "no course alloted";
      } 
    }
}
print_r($arry_str);
 echo count($arry_str)."<br>";
*/
?>
   <label for="UNIT"><b>Course Code<font color="red">*</font></b></label>
 <select name="C_code" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
       <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   
     </select>
  <br><br>
   
   <!-- <label for="hi" required><b>Semester</b></label><br>
    <input type="text" id="hi" name="hi" value="Ignore the Box" readonly>
    <br><br>-->


     <label for="question" ><b>Enter the Question <font color="red">*</font></b></label><br> <br>   
<textarea
id="w3mission" rows="6" cols="180" name="QUESTION_FIELD" id="myTextarea" required> </textarea>
   
 
  <br><br>
       <label for="question" ><b>Insert Image</b></label>
       <br>
  <!-- upload form 
  <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile02" accept="image/*"/>
                <label class="custom-file-label" for="inputGroupFile02"></label>
            </div>
            
    </div>-->
            
   <!-- <label>Choose image </label><br>-->
    <input type="file" name="image" placeholder="select image" id="image" onchange="preview(event)" accept="image/*">
    <img id="preimage">
    <script type="text/javascript">
      function preview(event)
      {
        var output=document.getElementById("preimage");
        output.width="300";
        output.height="300";
        output.src=URL.createObjectURL(event.target.files[0]);
      };
    </script>
    <br>
    <label for="UNIT"><b>Unit No</b><font color="red">*</font></label>
    <select id="UNIT" name="UNIT" required>
      <option value="" disabled selected hidden>Choose a Unit</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
<br>


<br>
    <label for="Level">Difficulty Level<font color="red">*</font></label>
    <select id="Level" name="Level" required>
      <option value="" disabled selected hidden>Choose a Level</option>
      <option value="R">Remember</option>
      <option value="U">Understanding</option>
      <option value="A">Application</option>
    </select>
   
 
    <br><br>
    <label for="Marks" ><b>Marks Alloted<font color="red">*</font></b></label><br>  
    <input type="radio" id="two" name="marks" value="2">
  <label for="2">2</label><br>  
  <input type="radio" id="four" name="marks" value="4">
  <label for="4">4</label><br>  
  <input type="radio" id="six" name="marks" value="6">
  <label for="6">6</label><br>  

    
  <br><br>
 
    <label for="semester" ><b>Semester</b></label><br>
    <input type="number" id="semester" name="semester">
    <br><br>

   
   
      <!-- <label for="UNIT"><b>Course Name<font color="red">*</font></b></label>
      <select id="Course" name="Course" required>
      
       <option value="" disabled selected hidden>Choose a Course Name</option>
      <option value="Advance Java">Advance Java</option>
    
      </select> -->
  

  <CENTER>
  <input type="Button" value="Reset" onclick='refreshPage()'>
  <input type="submit" value="Submit" onclick="myFunction()" name="Submit">
  

  <?php
  if($str_desig=="admin")
  {
    ?>

  <a href="/project2019-2020/AdminPanel/MENU/adminmenu_1.php"><input  type="button" value="Exit"></a>
  
   <?php 
 }
  else
  {
  ?>
  <a href="/project2019-2020/menu/menu_1.php"><input  type="button" value="Exit"></a>
  
<?php
  }
?>
 
  </form>
</div>
</body>
</html>
