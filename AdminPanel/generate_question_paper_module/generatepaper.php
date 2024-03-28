<?php 
session_start();
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Generate Paper</title>
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
   <form action="Generate_Paper_Index.php" method="POST">
	<h1><CENTER>Question Paper Generation Module</h1>
<center>
 <br><br>
 <br><br><br>
<br><br><br><br>
      <label for="UNIT">Course Name</label>
      <select id="Course" name="Course"  required>
      <option value="" disabled selected hidden>Choose a Course Name</option>
      <option value="Advance Java">Advance Java</option>
     
      </select>
  
  <label for="c_code">Course Code</label>
    <input type="text" id="c_code" name="C_code" required>
    <br><br>
<center><br><br><br><br><br><br><br>
    <input type="submit" value="Submit">
 </form>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<script type="text/javascript">
      function refreshPage(){
        
          location.reload();
              
      }
    </script>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Generator</title>
  </head>

  <body>

    <!-- novel js script solution by dtbaker -->
    <script>

       if ( window.history.replaceState ) {
           window.history.replaceState( null, null,null, window.location.href );
       }
   </script>
   <!-- end of prevention of refreshing page event -->




   

   <!-- generate sectio n txt -->

   <h2 class="h2tex"><center>Generate Section</center></h2>
   <hr>

   <!-- end heading -->

  <div class="GPanel">
    <form  action="\project2019-2020\generate_question_paper_module\Generate_Paper_Index.php" method="post">

     <!-- start of dept selection -->
      <div class="form-group">
      <label for="exampleFormControlSelect1">Department</label>
      <select name="Dept[]" class="form-control" id="exampleFormControlSelect1" multiple required>
      <!--<option value="" disabled selected hidden>Select Branch</option>-->
       <option value="IT">Information Technology</option>
       <option value="AU">Automobile Engineering</option>
       <option value="CM">Computer Engineering</option>
       <option value="ETX">Electronics And Telecommunication</option>
       <option value="EE">Electrical Engineering</option>
       <option value="CE">Civil Engineering</option>
       <option value="TX">Textile Manufacturing</option>
       <option value="PT">Packaging Technology</option>
       <option value="TR">Travel And Tourism</option>
      </select>
       <small id="emailHelp" class="form-text text-muted">Note : Inorder to select multiple Departments press and hold ctrl key and then select the Departments  
       </small>
      </div>

     <!-- end of dept selection -->

      <!-- crosue code available -->
      <div class="form-group">
      <label for="exampleFormControlSelect1"> Course Code</label><br>

       
       <input type="text" name="CID" autocomplete="off" class="form-control" placeholder="Enter the Course Code" required>
      
      </div>
      <!-- end of crouse code -->

      <!-- selected time -->
      <label for="exampleFormControlSelect1">Time</label>
      <select name="ChapterNum" class="form-control" id="exampleFormControlSelect1" required >
          <option value="" disabled selected hidden>Select Time</option>
       <?php
         
         if($_POST["ChapterNum"] == 1)
         {
           echo "
              <option selected>1</option>
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
              <option selected>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              ";

         }
         else if($_POST["ChapterNum"] == 3)
         {
           echo "
              <option selected>1</option>
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
              <option selected>1</option>
              <option>2</option>
              <option>3</option>
              <option selected>4</option>
              <option>5</option>
              <option>6</option>
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

        ?>

      </select>

      <!-- end of selection time -->


     <!-- start of subject name 

     <div class="form-group">
       <div class="form-group">
         <label for="exampleFormControlTextarea1">Subject Name</label>
         <textarea name="SubName" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
         <small id="emailHelp" class="form-text text-muted">Note : Use capital for captical small letter for small use small letter</small>
       </div>
     </div>

      end of subject name -->
  <BR>
  <CENTER>
      <!-- generate button-->
      <input type="Button" value="Reset" class="btn btn-success gidbtn" onclick='refreshPage()'>
      <button type="submit" name="BGD" class="btn btn-success gidbtn">Generate & Download</button>
     <a href="/project2019-2020/AdminPanel/MENU/adminmenu_1.php"> <input  type="button" class="btn btn-success gidbtn" value="Exit"></a>
      <!-- end of gernerate button -->
   </CENTER>
    </form>
  </div>

  </body>

</html>