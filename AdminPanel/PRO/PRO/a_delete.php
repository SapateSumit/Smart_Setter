<?php

 require_once("DBPHP/DB.php");

 // storging id of row that i want to change header super global method
 $SearchQueryID = $_GET["USERNAME"];

 // actual row no and actual table name using substring
  $UpdateCID  = "log_table";
  



  global $link; // that file varible for connection
  $sql; // sql varible for quries;

  $sql = "DELETE FROM ".$UpdateCID." WHERE USERNAME='$SearchQueryID'";

  $stmt = $link->prepare($sql);

  $Excute = $stmt->execute();

  if($Excute)
  {
          //  excute succesfully done thank you
           echo "<script>
           alert('Your user deleted succesfully');
           window.location.href='a_update.php';
           </script>";


  }else
  {
           echo '<script type="text/JavaScript">
            alert("Unable to Delete");
            </script>';
  }

?>
