<?php

 // required file
 require_once("DBPHP/DB.php");

 session_start();

  $userlogin=$_SESSION["username"];
$URCID; // update required table name

  if(isset($_POST["ADD"]))
  {
    // if the user click on this button
    if(!empty($_POST["CC"]) && !empty($_POST["CN"]))
    {

        global $ConnectionDB; // that file varible for connection
        $sql; // sql varible for quries;

      // if the text area is not empty then process further
        $TempCC = $_POST["CC"]; // storing crouse code
        $TemoCN = $_POST["CN"]; // storing crouse name

        $TempCC = strtolower($TempCC); // lowercase formatting for windows xampp

        // course name is not in lowercase it is case sensitive

        $sql = "INSERT INTO coursetable(CourseName,CourseCode) VALUES( '$TemoCN','$TempCC')";
         $Excute = mysqli_query($ConnectionDB, $sql); 
       
       // $stmt = $ConnectionDB->prepare($sql);

       // $stmt->bindValue(':dcc',$TempCC);
       // $stmt->bindValue(':dcn',$TemoCN);

        //$Excute = $stmt->execute();
          //echo "hello";
        if($Excute)
        {

           // excuted quary succesfully
           $sql1 = "CREATE TABLE `$TempCC` (ID INT(25) AUTO_INCREMENT PRIMARY KEY NOT NULL,
           BIT VARCHAR(5) NOT NULL,
           QUESTIONS VARCHAR(255) NOT NULL,
           TIME_DATE timestamp NOT NULL,
           IMAGE blob NOT NULL, NAME VARCHAR(50) NOT NULL,
           USERNAME VARCHAR(50) NOT NULL,
           SEM INT(20),Flag INT(20) NOT NULL)"; // SQL Q.
          
              $Excute2 = mysqli_query($ConnectionDB, $sql1); 
           //$stmt = $ConnectionDB->prepare($sql); // eastablished connection

          //$Excute2 = $stmt->execute();

            if($Excute2)
           {
             // successfull
             echo '<script type="text/JavaScript">
              alert("Your Course Code and Course Name is Created succesfully");
              </script>';

           }

        }
        else
        {
            // unsucccessfull
            echo '<script type="text/JavaScript">
            alert("Your Course Code is already exist or other errors");
            </script>';
        }



  
    }
    else
    {
       // field is empty
       // confirmation for submittion
        echo '<script type="text/JavaScript">
         alert("Please note that all the fields are necessary to submit");
         </script>';


    }

  }


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

	<title>Dashboard</title>
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
  <a class="active" href="\project2019-2020\AdminPanel\addcourse\dashboard.php">Add Course</a>
  <a href="\project2019-2020\AdminPanel\addsamplepdf\samplepdf.php">Add Curriculum/Sample Paper/Bits</a>
  <a  href="\project2019-2020\AdminPanel\addsamplepdf\showpdf.php">Show PDF</a>
  <a href="\project2019-2020\generate_question_paper_module\generatepaper.php">Generate Question Paper</a>
 <!--  <a href="\project2019-2020\logout\logout_change.php">Logout/Change Password</a>  -->
  
  
</div>


 <?php
   echo 'Hi, ' . $_SESSION["username"];
?>
   
   <!-- novel js script solution by dtbaker -->
   <script>

      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
  </script>
  <!-- end of prevention of refreshing page event -->


  <!-- admin section -->
  <h2 class="h2tex">Admin Section</h2>
  <hr>
  <!-- end of admin section -->


   <!-- start of add crouse code -->
  <div class="AdminAdd">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

      <div class="form-group">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Course Code</label>
          <textarea name="CC" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          <small id="emailHelp" class="form-text text-muted">Note : Enter new Course Code</small>
        </div>
      </div>


            <div class="form-group">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Course Name</label>
                <textarea name="CN" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                <small id="emailHelp" class="form-text text-muted">Note : Enter new Course name for given Course Code it is case sensitive</small>
              </div>
            </div>


      <br>
      <button type="submit" name="ADD" class="btn btn-primary fidbtn">Submit</button>
      </div>
    </form>





  </div>







   <!-- end of add crouse code -->

  </body>

</html>
