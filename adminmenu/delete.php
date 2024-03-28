

<?php
ini_set( "display_errors", 0);
 require_once("DBPHP/DB.php");

 // storging id of row that i want to change header super global method
 $SearchQueryID = $_GET["ID"];

 // actual row no and actual table name using substring
  $UpdateCID  = substr($SearchQueryID,-6);
  
 $UpdateRowNo = substr($SearchQueryID,0,-6);




  global $link; // that file varible for connection
  $sql; // sql varible for quries;

  $sql = "DELETE FROM ".$UpdateCID." WHERE ID='$UpdateRowNo'";

  $stmt = $link->prepare($sql);

  $Excute = $stmt->execute();

  // auto increment after deletion of any table row
  $sql = "ALTER TABLE ".$UpdateCID." AUTO_INCREMENT = ".($UpdateRowNo + 1);

  $stmt = $link->prepare($sql);

  $Excute = $stmt->execute();

  if($Excute)
  {
          //  excute succesfully done thank you
           echo "<script>
           alert('Your question deleted succesfully');

           window.location.href='javascript:history.go(-1)';
          window.onload = function () {window.location.reload()}
           </script>";


  }else
  {
           echo '<script type="text/JavaScript">
            alert("Unable to Delete");
            </script>';
  }

?>
