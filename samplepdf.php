<?php  
session_start();
ini_set( "display_errors", 0);
 $connect = mysqli_connect("localhost", "root", "", "smart_setter");  
 if(isset($_POST["insertcurriculum"]))  
 {   $cc=$_POST["C_code"];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     //$query = "INSERT INTO course(PDF) VALUES ('$file')"; 
      $query="UPDATE coursetable  SET CurriculumPDF='$file' where CourseCode='$cc'"; 
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Curriculum Inserted Successfully ")</script>';  
      }  
 }  
 if(isset($_POST["insertsample"]))  
 {  $ccc=$_POST["C_code1"];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     //$query = "INSERT INTO course(PDF) VALUES ('$file')"; 
      $query="UPDATE coursetable  SET SamplePDF='$file' where CourseCode='$ccc'"; 
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Sample Paper Inserted Successfully")</script>';  
      }  
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
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;
}
</style>
      <head>  
           <title>Insert Section</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        
      <?php
         $arr=array();
         $QUERY="SELECT * FROM coursetable";
         $result =mysqli_query($connect, $QUERY);
         while($DataRows =mysqli_fetch_assoc($result))
         {
           array_push($arr,$DataRows["CourseCode"]);
         }



      ?>  <form method="post" enctype="multipart/form-data"> 
           <br /><br />  
           <div class="container" style="width:1000px;"> 
               
                <h3 align="center"><b>Insert Curriculum PDF</b></h3>  
                <br />
                 <center>  <label for="UNIT"><b>Course Code<font color="red">*</font></b></label>
 <select name="C_code" required>
<option value="" disabled selected hidden>Choose a Course Code</option>
   
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>"> <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   
     </select>
  <br>     
                <br /> 
                 
                     <input type="file" name="image" id="image" required  />  
                     <br />  
                     <input type="submit" name="insertcurriculum" id="insertcurriculum" value="Insert" class="btn btn-info" /> </center>
                    
                </form> 




                <form method="post" enctype="multipart/form-data">  
                <br /> 

                <h3 align="center"><b>Insert Sample Paper PDF </b></h3>  
                <br /> <center>
                 <label for="UNIT">Course Code<font color="red">*</font></label>
 <select name="C_code1" required>
<option value="" required  disabled selected hidden >Choose a Course Code</option>
   
      <?php  for($i=0;$i<count($arr);$i++){ ?>
         <option value="<?php echo $arr[$i];?>" required > <?php echo $arr[$i];?>
     
          </option>

            <?php } ?>   
     </select>
  <br><br>
                
                     <input type="file"  name="image" id="image" required  />  
                     <br />  
                     <input type="submit"   name="insertsample" id="insertsample" value="Insert" class="btn btn-info" />  </center>
                </form> 
                <br />  
                
         


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