
<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
// Starting session
session_start();

//echo 'Hi, ' . $_SESSION["username"];
$userLogin=$_SESSION["username"];
$link = mysqli_connect("localhost", "root", "", "smart_setter");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 else 
 	{ echo 'connection done';}
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
    /*
    if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
    {
       /*echo "<script>
           alert('Upload a file please !!');
            window.history.back();
           </script>";
     */
     //      echo "unable";
   // }
   // else
   // { 
          $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
          // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 

           /*$image = addslashes($_FILES['image']['tmp_name']);
           $name = addslashes($_FILES['image']['name']);
           $image = file_get_contents($image);
           $image = base64_encode($image);
           */
        // change this qury to get your own result
        if($file!=NULL)
        {
        $sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`,`IMAGE`) VALUES ('$bit', '$question', '$userLogin', '$Semester','$file')";
      }
   // }


// Attempt insert query execution
//$sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`,`IMAGE`) VALUES ('$bit', '$question', '$userLogin', '$Semester','$image')";

if(mysqli_query($link, $sql)){
       echo "<script>
           alert('Your question is Inserted succesfully');
           window.location.href='ADDQUESTION1.php';
           </script>";

} /*else{
    echo "<script>
           alert('Your question is not  Inserted succesfully');
            window.location.href='ADDQUESTION1.php';
           </script>". mysqli_error($link);
}*/
 //   $sql = "INSERT INTO `$Course_Code` (`BIT`,`QUESTIONS`,`USERNAME`,`SEM`) VALUES ('$bit', '$question', '$userLogin', '$Semester')";
// Close connection

mysqli_close($link);
}
?>
