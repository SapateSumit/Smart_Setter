<?php 
session_start();
$time_1=$_POST["ChapterNum"];
$Course_Code =strtolower($_POST["CID"]);
$branch=$_POST["Dept"];
$chk="";
foreach($branch as $chk1)  
   {  
      $chk .= $chk1."/";  
   }  
    $_SESSION['D']=$chk;
     $_SESSION['T']=$time_1;
if($Course_Code=="it501e"){
     header("location: \project2019-2020\generate_question_paper_module\Gen\it501e.php");
}
else 
{   
	 //echo $chk;
           echo "<script type='text/JavaScript'>
            alert(' Paper cannot be  generated');
  
            window.location.href='generatepaper.php';
            </script>";

}
?>