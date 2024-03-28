

<!-- php code here-->
<?php

 require_once("DBPHP/DB.php");
 session_start();
 echo 'Hi, ' . $_SESSION["username"];
 $userLogin=$_SESSION["username"];


//for html dynamic checkbox from data base

 $sql_u = "SELECT * FROM coursetable";
 $res_u = mysqli_query($link, $sql_u);

 // storging id of row that i want to change header super global method
 $SearchQueryID = $_GET["USERNAME"];

 // actual row no and actual table name using substring
  $UpdateCID  = "log_table";

   $sql="SELECT * FROM  `$UpdateCID` WHERE USERNAME= '$SearchQueryID' ";
 $result = mysqli_query($link, $sql);
$password123;
while($DataRows =mysqli_fetch_assoc($result))
{
 
  $password123 = $DataRows["PASSWORD"];
  
}

  if(isset($_POST["register12"]))
   {
        $username = $_POST["USERNAME"];
        $password = $_POST["psw"]; 
        $permission = $_POST["Permission"];
        $Course_Alloted = $_POST["techno"];
        $chk="";  

foreach($Course_Alloted as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  


       
        global $link; // that file varible for connection
        $sql; // sql varible for quries;
        if($password=="")
        {  
         
         $sql = "UPDATE ".$UpdateCID." SET USERNAME='$username',DESIGNATION='$permission',ALLOTED_COURSE='$chk' WHERE USERNAME='$SearchQueryID'";
         }
         else
         {
          $password = password_hash($password, PASSWORD_DEFAULT);//this will encrypt the password

           $sql = "UPDATE ".$UpdateCID." SET USERNAME='$username', PASSWORD='$password',DESIGNATION='$permission',ALLOTED_COURSE='$chk' WHERE USERNAME='$SearchQueryID'";
          
         }
         $stmt = $link->prepare($sql);

         $Excute = $stmt->execute();

          // end of sql injections

         if($Excute)
         {
          //  excute succesfully done thank you
           echo "<script>
           alert('Your user is updated succesfully');
           window.location.href='a_update.php';
           </script>";


         }
         else
         {
           echo '<script type="text/JavaScript">
            alert("Unable to Update user");
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

$username="   ";
 $password123="";
 $permission="";
  $Course_Alloted=" ";
global $link;
//$sql = "SELECT * FROM ".$UpdateCID." WHERE ID='$UpdateRowNo'";
$sql="SELECT * FROM  `$UpdateCID` WHERE USERNAME= '$SearchQueryID' ";
 $result = mysqli_query($link, $sql);

while($DataRows =mysqli_fetch_assoc($result))
{
  $username = $DataRows["USERNAME"];
  $password123 = $DataRows["PASSWORD"];
  $permission=$DataRows["DESIGNATION"];
  $Course_Alloted = $DataRows["ALLOTED_COURSE"];
}


?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
      function refreshPage(){
        
          location.reload();
              
      }
    </script>
    <script type="text/javascript" language="javascript">// <![CDATA[
function checkAll(formname, checktoggle)
{
  var checkboxes = new Array(); 
  checkboxes = document[formname].getElementsByTagName('input');
 
  for (var i=0; i<checkboxes.length; i++)  {
    if (checkboxes[i].type == 'checkbox')   {
      checkboxes[i].checked = checktoggle;
    }
  }
}
// ]]></script>
    
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
<body>

<form  style="border:1px solid #ccc" method="post" name="form3">
  <div class="container">

    <h1>Add User</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="USERNAME"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="USERNAME" value="<?php echo $username;?>" required readonly>

    <label for="psw"><b>Change Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" >
  

      <label for="psw-repeat"><b>Permission Selection</b></label>  <br><br>
      <?php

        if($permission=="admin")
        {
        	
    echo" <input type='radio' id='filler' name='Permission' value='filler'>
         <label for='filler'>Filler</label> <br> 
    <input type='radio' id='admin' name='Permission' value='admin' checked>
     <label for='admin'>Admin</label>"
    ; 
       }   
            else
        {
        	echo"
    <input type= 'radio' id='admin' name='Permission' value='admin>
     <label for='admin'>Admin</label>
      <br> <input type='radio' id='filler' name='Permission' value='filler' checked>
         <label for='filler'>Filler</label>";  
         } ?>  
           
    <br><br><br>
 

        <label for="psw-repeat"><b>Courses Alloted</b></label><br><br>
       
            <?php
   
               $i=0;
$st=0;
$ed=6;
$j=0;
$ind=0;
$arr=array();
 //**echo strlen($str)."\n";
 if($Course_Alloted!=null)
    {    
  while($ed<=strlen($Course_Alloted))
        { 
          $ind++;
           $str2 =substr($Course_Alloted,$st,6);
            $sql = 'SELECT * FROM `coursetable`'; // sql string
 
           $result = mysqli_query($link, $sql);


     // linear search for cname for cid
      while ($row = mysqli_fetch_assoc($result)) 
      {  
          // checking if the cc id exist or not
         
         if($row["CourseCode"] == $str2)
         {     
          // $two[] = $row["CourseName"]; // storing names in secound array as per ccid
             echo $ind."] ".strtoupper($str2)." - ".strtoupper($row["CourseName"])."<br>";// printing that crouse name for that cc id   
         }


      }
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

//print_r($arr);
 
 
 // NULL array to store cc names 
/* $two  = array();
 

 // fetching cc names from cc id 
  for ($i=0; $i < count($arr) ; $i++)
  {   
     
     $sql = 'SELECT * FROM `coursetable`'; // sql string
 
     $result = mysqli_query($link, $sql);


     // linear search for cname for cid
      while ($row = mysqli_fetch_assoc($result)) 
      {  
          // checking if the cc id exist or not
         
         if($row["CourseCode"] == $arr[$i])
         {     
           $two[] = $row["CourseName"]; // storing names in secound array as per ccid
             echo $row["CourseName"]; // printing that crouse name for that cc id   
         }


      }

  }
  

  echo "<br>";
  print_r($two)."hello";
  


*/
 //print_r($arr);
//$find="";
  //$arr12=array('TCP/IP','amit');
  //print_r($arr12);

   /*  for($i=0;$i<=count($arr);$i++)
     {
        //echo "hello";
        echo "<br>".$arr[$i]."<br>";
        $uu=$arr[$i];

        //$sql12="SELECT * FROM  `coursetable` WHERE CourseCode='$uu' ";
        $fetchlist=mysqli_query($link, "select * from coursetable where CourseCode=$uu");

         while($row=mysqli_fetch_assoc($fetchlist)){
                    $Q1_1=$row['CourseName']; 
         //*** echo '1.1'.$row['QUESTIONS']; 
                    echo "hi";
    
      }*/
          //$amit=$result[""];      
        /*  while($row = mysqli_fetch_assoc($result)){ 
         
                echo "<br>" . $row["CourseName"] . "<br>"; 
                
        } */
        //$row = mysqli_fetch_row($result);
       //$oo=$row[1];
       //echo $oo; 

     //}
     //echo $amit;
  //$find='TCP/IP';
   // echo in_array("TCP/IP", $arr12);
      /*while($data = mysqli_fetch_assoc($res_u))
      {
             $find=$data["CourseName"];
             echo $find;

        if(in_array($find, $arr12))
        {  
          echo "success";
        }

      } */

      //echo "----------------------------------------- ";
      echo "<br>";
      ?>
       <a onclick="javascript:checkAll('form3', true);" href="javascript:void();">Select all &nbsp;&nbsp;&nbsp;</a>
        <a onclick="javascript:checkAll('form3', false);" href="javascript:void();">Unselect all</a><br>

     <?php
     echo "<br>";
      while($data = mysqli_fetch_assoc($res_u)) 
            {   
                       //echo $data['CourseCode'];
                       $abc=$data["CourseCode"];
            	        // print_r($arrr);    
                       //echo gettype($arrr);
                       //echo $abc;
                       //echo gettype($abc);



                    if(in_array($abc,$arr))
                    { 
              	      
                    
                    ?>

                      <label class="container">
             
                      <input type='checkbox' value="<?php echo $data['CourseCode'];?>" name='techno[]'checked> 
                     <?php echo strtoupper($data['CourseName']).'-('.strtoupper($data['CourseCode']).')'; ?>
                     <span class="checkmark"></span>
                     </label>
                  

                    <?php 
                   }
                 else 
                 {  

                    ?>
                     <label class="container">
             
                     <input type='checkbox' value="<?php echo $data['CourseCode'];?>" name='techno[]'>  
                      <?php echo strtoupper($data['CourseName']).'-('.strtoupper($data['CourseCode']).')'; ?>
                      <span class="checkmark"></span>
                     </label>
                    <?php 

                 }

        }
                

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

    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <center> <button type="button" class="button" onclick='refreshPage()'>Reset</button>

      <button type="submit" class="button button2" name="register12">UPDATE</button>

   <a href="/project2019-2020/AdminPanel/PRO/PRO/a_update.php">   <button type="button" class="button button3" >Exit</button></center></a>
    </div>
  </div>
</form>

</body>
</html>
