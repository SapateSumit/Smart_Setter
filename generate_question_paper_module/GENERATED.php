
<?php
$con=mysqli_connect('localhost' , 'root', '', 'smart_setter');

//$CID=$_POST['CID'];
$CID =strtolower($_POST["CID"]);
$NO='a';
$branch=$_POST["Dept"];
$time_1=$_POST["ChapterNum"];
$chk="";
foreach($branch as $chk1)  
   {  
      $chk .= $chk1."/";  
   }  
    $_SESSION['D']=$chk;
   // $_SESSION['T']=$time_1;
$cquery="select * from coursetable where CourseCode='".$CID."'";
$cresult=mysqli_query($con,$cquery);
$crow=mysqli_fetch_array($cresult);
$code=strtoupper($crow['CourseName']);
$Year = date("Y"); // auto year may be according to system time
$EvenOrODD;
if(fmod($Year,2) == 0)
{
   // even
   $EvenOrODD = "EVEN";

}else
{
  // odd
  $EvenOrODD = "ODD";
}
?>

<!DOCTYPE html>
<html>

<head>

	<title>Generate</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


	
  <div id="tab">
	

  <h2 style=text-align:center;text-transform:uppercase;margin-bottom:0;>
    government polytechnic, sadar, nagpur
    </h2>

    <h4 style=text-align:center;margin-top:3px;margin-bottom:6px;>
    (An Autonomous Institute of Government of Maharashtra)
    </h4>

    <h3 style=text-align:center;text-transform:uppercase;letter-spacing:5px;margin-top:0;>
      term examination
    </h3>
     <h3 style=text-align:right;margin-bottom:0;position:relative;left:-110px;>
         <?php echo $EvenOrODD." ".$Year;?>
    </h3>

    <h3 style=text-align:right;margin-bottom:0;position:relative;left:-110px;>
         
    </h3>

     <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:500px;>Course Code : <?php echo strtoupper($_POST["CID"]);?></h4>
      <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;>Course Name :<?php echo $code ?></h4>
  

    <h4 style=text-align:left;margin-top:3px;margin-bottom:0;>PROGRAMME  : Diploma in <?php echo $_SESSION['D']; ?></h4>
    <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:500px;>MAXIMUM MARK : 70</h4>
    <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;>TIME   : <?php echo $time_1; ?> Hours</h4>

    <hr class="new4">

    
    <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:350px;>Enrollment no :</h4><img src=Gen/Images/EnNo.png  height=30 width=200 align=right>

    <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;><u>instructions :</u></h4>

    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>1) All questions are compulsory.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>2) Illustrate your answers with neat sketches wherever necessary.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>3) Use of Non Programmable Electronic Pocket Calculators is permissible.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>4) Figures to the right indicate full marks.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>5) Assume suitable addtional data if necessary.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>6) Moblie phone & other similar electronic gadgets are strictly prohibited inside examination hall.</h4>


    <hr class="new4">
    <br>

	<table class="table table-hover table-bordered" style=width:100%; >
    <!-- <thead>
       <tr>
 
         <th>BIT</th>
         <th>Question No.</th>
         <th>Question</th>
         <th>Marks</th>

       </tr>
     </thead>-->
     <tbody>

	<?php
   if($code!="")
   {
    $dbr="select * from coursetable where CourseCode='".$CID."'";
    $cresult=mysqli_query($con,$dbr);
    if($cresult)
    {
       $i=1;
      while ($crow=mysqli_fetch_array($cresult))
      {

          $optionsArr=explode(",",$crow['BIT']);
          foreach ($optionsArr as $row)
          {
          		$query="select * from ".$CID." where BIT='".$row."' AND Flag=1 order by rand() LIMIT 1";
          		$result=mysqli_query($con,$query);
              if(mysqli_num_rows ( $result))
              { 
          		while ($ques=mysqli_fetch_array($result))
              { 
                   $QID=$ques['ID'];
                  mysqli_query($con,"UPDATE $CID SET Flag=0 WHERE ID='$QID'");

        
                    if ($i==9 || $i==16 || $i==23 || $i==30 || $i==35)
                    {
                      $i++;
                      $NO='a';
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>
                      <?php
                    }

                    switch ($i)
                    {
                                      case 1:
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.1</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY FIVE </b> </td>
                                                  <td><b>(10)</b></td>
                                                  <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;

                                      case ($i==10):
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.2</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY THREE </b> </td>
                                                  <td><b>(12)</b></td>
                                                   <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;

                                      case ($i==17):
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.3</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY THREE </b> </td>
                                                  <td><b>(12)</b></td>
                                                   <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;

                                      case ($i==24):
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.4</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY THREE </b> </td>
                                                  <td><b>(12)</b></td>
                                                  <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;

                                      case ($i==31):
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.5</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY TWO </b> </td>
                                                  <td><b>(12)</b></td>
                                                   <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;

                                      case ($i==36):
                                                $i++;
                                                ?>
                                                <tr>
                                                  <td><b>Q.6</b></td>
                                                  <td></td>
                                                  <td> <b> Attempt ANY TWO </b> </td>
                                                  <td><b>(12)</b></td>
                                                   <!--<td></td>-->
                                                </tr>
                                                <?php
                                        break;
                    }

                ?>
                <tr>
          				<td><?php echo $ques['BIT']; ?></td>
                  <td><?php echo $NO++.")"; ?></td>
                  <td><?php 
                  if($ques['QUESTIONS']!='')
                    {echo $ques['QUESTIONS'];} 
                    
                      ?>
                  <?php 
                     if ($ques['NAME']!='') {
                 
                     $DisImg =  $ques["IMAGE"];
  
                        echo '<center><img height="300" width="300"  src="data:image;base64,'.$DisImg.'"></center>';

                   }
                  ?>
                  </td>
                  <td></td>
                </tr>

          			<?php
                $i++;
          		}
             }
            else
            {
                  

         echo "<script type='text/JavaScript'>
            alert(' Paper cannot be  generated. ERROR:Insufficient Questions.');
  
            window.location.href='generatepaper.php';
            </script>";
         
                    }

          }

      }
    }
  }
    else 
   {   
   
           echo "<script type='text/JavaScript'>
            alert(' Paper cannot be  generated. ERROR:Course not found.');
  
            window.location.href='generatepaper.php';
            </script>";

  }

    ?>
  </tbody>
</table> 
</div>



<p>
     
     <center><input type="button" value="Create PDF" id="btPrint" class="btn btn-primary fidbtn" onclick="createPDF()" />
	 <a href="/project2019-2020/AdminPanel/MENU/adminmenu_1.php"> <input  type="button" class="btn btn-primary fidbtn" value="Exit"></a>
	 </center>
</p>


</body>



<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        //style = style + "h1" + "h3" + "h2" + "p" + "table {width: 100%;font: 17px Calibri;}";
        //style = style + "h1, h3, h2 {text-align:center;}"; 
        style = style + "table,td {border: 0.5px solid black; border-collapse: collapse;}";
        //style = style + "padding: 2px 3px;text-align: left;}";
        style = style + "hr {border: 1px solid black;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
       // win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close();   // CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
       // PrintDlgA(PrintDlg) = 1;


    }
</script>
</html>