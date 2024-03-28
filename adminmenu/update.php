
<?php
ini_set( "display_errors", 0); 
require_once("DBPHP/DB.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('location:INDEX_filler.php');
  }
$userlogin=$_SESSION["username"];
$URCID; // update required table name


//**$str="";
//**  echo "hello";
//$user="annlipgour";
//**echo "annlipgour";
 $sql = "SELECT * FROM `log_table`  WHERE `USERNAME` = '$userlogin'";
  // mysql_select_db('test_db');
//** echo "H1annlipgour";
   $retval = mysqli_query($link,$sql) or  die("hello".mysqli_connect_error());
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
 ?>

 

<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <head>
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
  <a class="active" href="\project2019-2020\adminmenu\update.php">Show/Update/Delete Questions</a>
  <a href="\project2019-2020\AdminPanel\AddUser\registration.php">Add User</a>
  <a href="\project2019-2020\AdminPanel\PRO\PRO\a_update.php">Edit User</a>
  <a href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  

</div>

    
          <?php       
//$str="aaaaaa,bbbbbb,cccccc,dddddd,eeeeee,ffffff";
//**   echo " H3Iannlipgour"."<br>";
  //** echo $str."<br>";

$connect = mysqli_connect("localhost", "root", "", "smart_setter");  
         $arr=array();
echo 'Welcome , ' . $_SESSION["username"];
//  ** echo $str;
//**echo "\n";
$i=0;
$st=0;
$ed=6;
$j=0;
$arr=array();

 //**echo strlen($str)."\n";
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

 <!-- end of header -->

<!-- start of heading section -->

<h1><CENTER>Update Section</h3>
 <hr>
 <style type="text/css">
  
</style>

<!-- end of heading seciton text -->

<!-- start of selected crouse -->

<div class="UpdateFormCC" style="width:400px;">
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Available Course Code</label>
    <select name="CID" class="form-control" id="exampleFormControlSelect1" required>
     <option value="" disabled selected hidden>Choose a Course Code</option>
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>     

    </select>
    
    <label for="exampleFormControlSelect1">Select Chapter</label>
    <select name="ChapterNum" class="form-control" id="exampleFormControlSelect1" required>
      <option value="" disabled selected hidden>Choose a Chapter</option>
      <option value="All">All</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
	  
    <center>
     <?php
/*
       if($_POST["ChapterNum"] == 1)
       {
         echo "
            <option selected >1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            ";

       }else if($_POST["ChapterNum"] == 2)
       {
         echo "
            <option>1</option>
            <option selected >2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            ";

       }
       else if($_POST["ChapterNum"] == 3)
       {
         echo "
            <option >1</option>
            <option>2</option>
            <option selected>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            ";
       }
       else if($_POST["ChapterNum"] == 4)
       {
         echo "
            <option >1</option>
            <option>2</option>
            <option>3</option>
            <option selected>4</option>
            <option>5</option>
            <option>6</option>
            ";
       }
       else if($_POST["ChapterNum"] == 5)
       {
         echo "
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option selected>5</option>
            <option>6</option>
            ";
       }
       else if($_POST["ChapterNum"] == 6)
       {
         echo "
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option selected>6</option>
            ";
       }else
       {
         echo "
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            ";
       }
*/
      ?>

    </select>
    <br>
      <button type="submit" name="Submit" class="btn btn-primary fidbtn">Search</button>
    </div>
  </form>
</div>
<!-- end of selected crouse -->



<!-- select of chapter wise-->



<!-- end of selection chapter wise -->




 <div class="container UShowPanel">
   <br>
   <table class="table table-hover" >
     <thead>
       <tr>
         <th>ID</th>
         <th>Questions</th>
         <th>Diagram</th>
         <!-- <th>Chapter</th> -->
         <!--<th>Marks</th> -->
         <th>Bit</th>
         <th>Update</th>
         <th>Delete</th>

       </tr>
    </thead>
	<br>
	<center>
<!-- php code here -->
<?php
   $CID="";
   $ChapterNum="";
  $CID = mysqli_real_escape_string($link, $_REQUEST['CID']);

   echo 'Course Code:'.$CID.'<br>';
  $st = mysqli_real_escape_string($link, $_REQUEST['ChapterNum']);
  echo 'Chapter:'.$st.'<br>';
  //**$CID = $_POST["CID"];
  //**$st=$_POST["ChapterNum"];
  //**$sql = "SELECT * FROM ".$CID;
 
 if($st==1)
  {
  $query = "SELECT  * FROM `$CID` WHERE BIT LIKE '1%'ORDER BY BIT ASC"; 
    //echo "HIII";
  } 
  elseif ($st==2) {
     $query = "SELECT  * FROM `$CID`  WHERE  BIT LIKE '2%'ORDER BY BIT ASC"; 
  }
  elseif ($st==3) {
     $query = "SELECT  * FROM `$CID`  WHERE  
    BIT LIKE '3%' ORDER BY BIT ASC"; 
  }
  elseif ($st==4) {
     $query = "SELECT  * FROM `$CID`  WHERE  
    BIT LIKE '4%'ORDER BY BIT ASC"; 
  }
  elseif ($st==5) {
     $query = "SELECT  * FROM `$CID`  WHERE 
    BIT LIKE '5%'ORDER BY BIT ASC"; 
  }
  elseif($st==6) {
     $query = "SELECT  * FROM `$CID`  WHERE  
    BIT LIKE '6%'ORDER BY 'BIT' ASC"; 
  }
  else
  {
    $query = "SELECT  * FROM `$CID` ORDER BY 'BIT' ASC"; 
  }
  $result = mysqli_query($link, $query); 
  $URCID = $CID;

  //**$stmt = $link->query($sql);
   //echo "hello";
  $Counter = 0; //counter for display row number as per user prefernce

  while($DataRows= mysqli_fetch_assoc($result))
  {     //echo "hiiiiiiii";
        $ID = $DataRows["ID"];
        $QuesText; // actuall text which we aregooing to display
        $BIT=$DataRows["BIT"];
        //**$Chapter = $DataRows["Chapter"];// fetechingn chapter name
        $QUESTIONS=$DataRows["QUESTIONS"];
       
        $Counter++;
        // any varible can have ques if it not empty then it is question
        // cheacking here whether it is empty or not if
        // then assign this value to QuesText varible then display

        if(!empty($QUESTIONS))
        {
           // it means that it is not empty then assigne the value

          $QuesText = $QUESTIONS;

        }
       /* if(!empty($M2))
        {
           // it means that it is not empty then assigne the value

          $QuesText = $M2;

        }else if(!empty($M4)){

          $QuesText = $M4;

        }
        else if(!empty($M6))
        {
          $QuesText = $M6;
        }*/

        $IMAGE  = $DataRows["NAME"];
        //$Marks  = $DataRows["MARK"];

 ?>
     <tbody>
       <tr>
         <td><?php echo $Counter; ?></td>
         <td><?php echo $QuesText; ?></td>
         <td><?php echo $IMAGE; ?></td>
         <td><?php echo $BIT; ?></td>
         <!-- this is link button-->
         <td><a href="change.php?ID=<?php echo $ID; ?>?tt=<?php echo $CID; ?>" class="btn btn-warning" role="button">Change</a></td>
         <td><a href="delete.php?ID=<?php echo $ID; ?>?tt=<?php echo $CID; ?>" class="btn btn-danger" role="button">Delete</a></td>
       </tr>
     </tbody>

<?php } ?>

   </table>
 </div>


<!-- end of php code with html new techinieque-->

  </body>

</html>