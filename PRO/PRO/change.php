<!-- php code here-->
<?php

 require_once("DBPHP/DB.php");
 session_start();
 echo 'Hi, ' . $_SESSION["username"];
 $userLogin=$_SESSION["username"];
 // storging id of row that i want to change header super global method
 $SearchQueryID = $_GET["ID"];

 // actual row no and actual table name using substring
 $UpdateCID = substr($SearchQueryID,-6);

 $UpdateRowNo = substr($SearchQueryID,0,-6);


   if(isset($_POST["Submit"]))
   {
        $question = $_POST["QUESTION_FIELD"];
        $unit = $_POST["UNIT"]; 
        $Difficulty_Level = $_POST["Level"];
        $Marks_Alloted = $_POST["marks"];
        $Semester = $_POST["semester"];
        $Course_Code = $_POST["C_code"];

        $bit=$unit.$Difficulty_Level.$Marks_Alloted;

        global $link; // that file varible for connection
        $sql; // sql varible for quries;

        $sql = "UPDATE ".$UpdateCID." SET BIT='$bit', QUESTIONS='$question',USERNAME='$userLogin',SEM='$Semester' WHERE ID='$UpdateRowNo'";

         $stmt = $link->prepare($sql);

         $Excute = $stmt->execute();

          // end of sql injections

         if($Excute)
         {
          //  excute succesfully done thank you
           echo "<script>
           alert('Your question is updated succesfully');
           window.location.href='update.php';
           </script>";


         }
         else
         {
           echo '<script type="text/JavaScript">
            alert("Unable to Upadate");
            </script>';
         }


    }
      else
      {
      // confirmation for submittion
       echo '<script type="text/JavaScript">
        alert("Please note that all the fields are necessary to submit");
        </script>';
      }

?>
<?php

$QuesText="   ";
 $ID="";
 $bit="";
  $IMAGE=" ";
  $Name=" ";
global $link;
//$sql = "SELECT * FROM ".$UpdateCID." WHERE ID='$UpdateRowNo'";
$sql="SELECT * FROM  `$UpdateCID` WHERE ID= '$UpdateRowNo' ";
 $result = mysqli_query($link, $sql);

while($DataRows =mysqli_fetch_assoc($result))
{

  $ID = $DataRows["ID"];
  $Semester = $DataRows["SEM"];
  $QuesText= $DataRows["QUESTIONS"]; 
  $bit=$DataRows["BIT"];
  $IMAGE = $DataRows["IMAGE"];
  $Name=$DataRows["NAME"];
}

  $UNIT=substr($bit,0,1);
  $DIFICULTY_LEVEL=substr($bit,1,1);
  $MARKS=substr($bit,2,3);

?>

<!-- php code end here -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- js file refernce -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <title>UpadateMode</title>
  </head>
  <body>
 
 <script>

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- end of prevention of refreshing page event -->



 <nav class="navbar navbar-dark bg-dark navbar-expand-lg shadow-sm">
  <!-- Navbar content -->

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="dashboard.php" style="margin-left: 295px;">Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Fiding.php" style="margin-left: 60px;">Finding <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Generator.php" style="margin-left: 60px;">Generate</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="update.php" style="margin-left: 60px;">Update</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="showquestion.php" style="margin-left: 60px;">About Us</a>
      </li>
    </ul>



</nav>


 <h1><CENTER>Update Questions Module</h3>

<div>
  <form  method="POST">
   
       <?php       
//**$str="";
//**  echo "hello";
$user=$_SESSION["username"];

//**echo "annlipgour";
 $sql = "SELECT * FROM `log_table`  WHERE `USERNAME` = '$user'";
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
      {
      //echo "helo";5
        echo "";
      } 
    }

?>
   <label for="UNIT"><b>Course Code<font color="red">*</font></b></label>
 <select name="C_code">
     
       <option value="<?php echo $UpdateCID;?>" selected> <?php echo $UpdateCID;?>

          </option>
   
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   

  <br><br>
   </select>
    <br><br>

     <label for="question"><b>Enter the Question <font color="red">*</font></b></label><br> <br>  <textarea
id="w3mission" rows="6" cols="180" name="QUESTION_FIELD" > <?php echo $QuesText; ?></textarea>
   
    <br><br>
       <label for="question" ><b>Insert Image</b></label>
       <br>
   
         <?php if ($Name!='') {
                 
                     $DisImg=$IMAGE;
  
      echo '<img height="300" width="300"  src="data:image;base64,'.$DisImg.'"><br>OLD IMAGE<br>';

                   }?>
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
    <br>NEW IMAGE<br>

    <br>
    <br>
    <label for="UNIT"><b>Unit No</b><font color="red">*</font></label>
    <select id="UNIT" name="UNIT" required>
       <?php

  // select defult value php code


      if($UNIT == 1)
      {

        echo "
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        ";

      }else if($UNIT == 2){

        echo "
        <option>1</option>
        <option selected>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        ";

      }
      else if($UNIT == 3){

        echo "
        <option>1</option>
        <option>2</option>
        <option selected>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        ";

      }
      else if($UNIT == 4){
        echo "
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option selected>4</option>
        <option>5</option>
        <option>6</option>
        ";
      }
      else if($UNIT == 5){
        echo "
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option selected>5</option>
        <option>6</option>
        ";
      }
      else if($UNIT

       == 6){
        echo "
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option selected>6</option>
        ";
      }


     ?>

    </select>
<br>


<br>
    <label for="Level">Difficulty Level<font color="red">*</font></label> <br>
    <select id="Level" name="Level" required>
      <option value="" disabled selected hidden>Choose a Level</option>
     <?php
      if($DIFICULTY_LEVEL=='R')
      {
      echo"
      <option value='R'selected>Remember</option>
      <option value='U'>Understanding</option>
      <option value='A'>Application</option>";
      }
      else if($DIFICULTY_LEVEL=='U')
      {echo "
      <option value='R' >Remember</option>
      <option value='U' selected>Understanding</option>
      <option value='A'>Application</option>";
      }
       else
      {echo "
      <option value='R' >Remember</option>
      <option value='U' >Understanding</option>
      <option value='A' selected>Application</option>";
      }
       ?>
    </select>
   
 
    <br><br>
    <label for="Marks" ><b>Marks Alloted<font color="red">*</font></b></label><br> 
     <select id="marks" name="marks" required>
      <option value="" disabled selected hidden>Choose a Marks</option>
     <?php
      if($MARKS=='2')
      {
      echo"
      <option value='2'selected>2</option>
      <option value='4'>4</option>
      <option value='6'>6</option>";
      }
      else if($MARKS=='4')
      {echo "
      <option value='2' >2</option>
      <option value='4' selected>4</option>
      <option value='6'>6</option>";
      }
       else
      {echo "
      <option value='2' >2</option>
      <option value='4' >4</option>
      <option value='6' selected>6</option>";
      }
       ?>
    </select>
 
    
  <br><br>
 
    <label for="semester" ><b>Semester</b></label><br>
    <input type="number" id="semester" name="semester" value=<?php echo $Semester  ;?>>
    <br><br>

   
   
      <!-- <label for="UNIT"><b>Course Name<font color="red">*</font></b></label>
      <select id="Course" name="Course" required>
      
       <option value="" disabled selected hidden>Choose a Course Name</option>
      <option value="Advance Java">Advance Java</option>
    
      </select> -->
  
<script type="text/javascript">
      function refreshPage(){
        
          location.reload();
              
      }
    </script>
  <CENTER>
  <input type="Button" value="Cancel" class="btn btn-primary fidbtn" onclick='refreshPage()'>
 <button type="submit" name="Submit" class="btn btn-primary fidbtn">Update</button>
   <a href="/project2019-2020/PRO/PRO/update.php"><input class="btn btn-primary fidbtn"  type="button" value="Exit"></a>
  
</div>

<!-- question filed-->

<div class="form-group">
  <div class="form-group">

    <small id="emailHelp" class="form-text text-muted">Note : One question at a time</small>
  </div>
</div>

<!-- end of question filed -->




</form>
<!-- end of submit buttom vvutton-->
  </body>
</html>