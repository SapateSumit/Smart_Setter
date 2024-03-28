 <?php 
	  
	  $dbh = new PDO("mysql:host=localhost;dbname=smart_setter", "root", "");
	  
	  
	  ?>
<?php 
    $con=mysqli_connect('localhost' , 'root', '', 'smart_setter');

    //check wheather user is login or not
    session_start();
  if (!isset($_SESSION['username'])) {
    header('location:INDEX_filler.php');
  }
  //END of check for login

 ?>

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
    <link rel="stylesheet" href="w3.css">
	<link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>

    <title>Sample Paper</title>
</head>
<style>

input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
    margin-right: 25px;
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


input[type=submit]:hover {
  background-color:#0A0A0A; 
}


</style>
<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="\project2019-2020\logout\changepass.php" class="w3-bar-item w3-button" >&#9731; Change Password </a>
  <a href="\project2019-2020\logout\logout.php" class="w3-bar-item w3-button">&#9211; Logout </a>
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
  <a  href="\project2019-2020\menu\menu_1.php">DashBoards</a>
  <a  href="\project2019-2020\AddQUESTION\ADDQUESTION1.php">Add Questions</a>
  <a  href="\project2019-2020\PRO\PRO\update.php">Delete/Show/Update Questions</a>
  <a  href="\project2019-2020\PRO\PRO\curriculum.php">Curriculum</a>
  <a class="active" href="\project2019-2020\PRO\PRO\samplepaper.php">Sample Paper</a>
  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>
</div>

<?php       
echo 'Welcome , ' . $_SESSION["username"];

?>
<?php       
//**$str="";
//**  echo "hello";
$user=$_SESSION["username"];

//**echo "annlipgour";
 $sql = "SELECT * FROM `log_table`  WHERE `USERNAME` = '$user'";
  // mysql_select_db('test_db');
//** echo "H1annlipgour";
   $retval = mysqli_query($con,$sql) or  die("hello".mysqli_connect_error());
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
 //**echo strlen($str)."\n";
 if($str!=null)
    {    
  while($ed<=strlen($str))
        {
           $str2 =substr($str,$st,6);
            // echo substr($str,$start,$end);
          //** echo "$str2"."\n";
         //  $arry_str[$i]=$str2;
         // echo  "element  ".$arry_str[$i]."\n";
           //**echo $st."<br>";
           //**echo $ed."<br>";
           array_push($arr,$str2);
           $st=$ed+1;
           
           //*echo $start."<br>";
           $ed=$st+6;
           $i=$i+1;
          //join the course in the drop down menu 
        $j=$j+1;
        $str2="";
       }
 
}
else
    {
      if($j==0) 
      {//echo "helo";5
        echo "";
      } 
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
    <center>
    <h1>Show SamplePaper</h1>
	<hr>
<div class="container" style="width:500px;">  
               
                <form method="post" enctype="multipart/form-data">  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					<select name="C_code" required>
<option value="" disabled selected hidden>Choose a Unit</option>
   
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   

  
</select>
					 <button class="btn btn-info" name="btn"> Show </button>
                     
                </form>  
				
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		    <h4 align="center">
		   <ol>
		   
		   <?php
		   
		    if(isset($_POST["btn"]))  
 {  

		$course=$_POST['C_code'];
		$stat= $dbh->prepare("select * from files_samplepaper where course like ('$course%')");
		$stat->bindParam(1,$course);
		$stat->execute();
		
			while($row = $stat->fetch()){
			echo "<li><a target='_blank' href='view1.php?id=".$row['id']."'>".$row['name']." - ".$row['course']."</a><br/>
			<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='500' height='200'/></li>";
		   }
 }
		   
		   
		   ?>
		   </ol>
		   </h4>  
      

</body>
</html>