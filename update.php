<?php 
    $con=mysqli_connect('localhost' , 'root', '', 'smart_setter');

    //check wheather user is login or not
    session_start();
  if (!isset($_SESSION['username'])) {
    header('location:INDEX_filler.php');
  }
  //END of check for login

    $imagename;
    $QID;
    $CID;
    $unit;
    if (isset($_POST['CID'])&&isset($_POST['ChapterNum'])) {
        $CID=$_POST['CID'];
        $unit=$_POST['ChapterNum'];
    }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update</title>
  </head>

  <body>

    <script>

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg shadow-sm navbar-center">
     <!-- Navbar content -->

       <ul class="navbar-nav mr-auto">

         <li class="nav-item">
           <a class="nav-link" href="dashboard.php" style="margin-left: 295px;">Dashboard</a>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="Fiding.php" style="margin-left: 60px;">Fiding</span></a>
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

 <!-- end of header -->

<!-- start of heading section -->
 <h2 class="h2tex">Update Section</h2>
 <h4>Hi <?php
    echo $_SESSION['username'];
  ?></h4>

  <hr>
<!-- end of heading seciton text -->

<!-- start of selected crouse -->
<div class="UpdateFormCC">
  <form method="post" action="update.php">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Available Course Code</label>
    <select name="CID" class="form-control" id="exampleFormControlSelect1">
    <?php

    $dbr="select * from filler_log where username='".$_SESSION['username']."' LIMIT 1";
    $cresult=mysqli_query($con,$dbr);
    if($cresult)
    {
      while ($crow=mysqli_fetch_array($cresult))
      {
          $optionsArr=explode(",",$crow['ALLOTED_COURSE']);
          foreach ($optionsArr as $row)
          {
            $row=strtoupper($row);
            if (isset($_POST['CID']))
            {
                if ($_POST['CID']==$row)
                {
                    ?>

                        <option value="<?php echo $row; ?>" selected> <?php echo $row; ?></option>

                    <?php
                }
                else
                {
                    ?>

                        <option value="<?php echo $row; ?>"> <?php echo $row; ?></option>

                    <?php
                }
            }
            else
            {
                  ?>

                      <option value="<?php echo $row; ?>"> <?php echo $row; ?></option>

                  <?php
            }
          }
      }
    }

    /*switch ($CID) {
      case 'IT403E':
            echo "<option value='Select Course Code'>Select Course Code</option>
                  <option value='IT403E' selected>IT403E</option>";
        break;
      
      default:
            echo "<option value='Select Course Code'>Select Course Code</option>
                  <option value='IT403E'>IT403E</option>";
        break;
    }*/

    ?>
    </select>

    <label for="exampleFormControlSelect1">Select Chapter</label>
    <select name="ChapterNum" class="form-control" id="exampleFormControlSelect1">

      <?php

    switch ($unit) {
      case '1':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1' selected>1</option> 
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>";
        break;

      case '2':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2' selected>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>";
        break;

      case '3':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2'>2</option>
                  <option value='3' selected>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>";
        break;

      case '4':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4' selected>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>";
        break;

      case '5':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5' selected>5</option>
                  <option value='6'>6</option>";
        break;

      case '6':
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6' selected>6</option>";
        break;
      
      default:
            echo "<option value='Select Unit'>Select Unit</option>
                  <option value='1'>1</option> 
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>";
        break;
    }

    ?>


    </select>


    <br>
    <button type="submit" name="submit" class="btn btn-primary fidbtn">Search</button>
    </div>
  </form>
</div>
</br>
</br>
</br>
</br>


 <div>
   <br>
   <table class="table table-hover" >
     <thead>
       <tr>
         <th>ID</th>
         <th>BIT</th>
         <th>Question</th>
         <th>Diagram</th>
         <th>Update</th>
         <th>Delete</th>


       </tr>
       <?php 
          if(isset($_POST['submit'])) 
          {
                 $CID=$_POST['CID'];
                 $CID=strtolower($CID);
                 echo $CID;
                  $unit=$_POST['ChapterNum'];
                      $query="select * from ".$CID." where BIT like '".$unit."%'";
                      $result=mysqli_query($con,$query);
                      if ($result)
                      {
         
                          while ($row=mysqli_fetch_array($result)) {
                              $imagename=$row['IMAGE'];
                              $QID=$row['ID'];   
        ?>
                <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['BIT']; ?></td>
                <td><?php echo $row['QUESTION']; ?></td>
                <td>

                  <?php 
                    if($row['IMAGE'])
                    {
                  ?>
                  <img src="<?php echo "images/".$row['IMAGE']; ?>" width="150" height="150">
                  <?php
                    }
                    else{
                      echo "No Image";
                    }
                  ?>
                </td>                
                <td> <form action="change.php?code=<?php echo $CID; ?>&id=<?php echo $QID; ?>" method="POST">
                <button class="btn btn-primary"><a><img src="images/edit.png">Edit</a></button> </form></td>
                <td>
                  <form action="delete.php?code=<?php echo $CID; ?>&id=<?php echo $QID; ?>" method="POST">
                <button class="btn btn-warning"><a><img src="images/delete.png">Delete</a></button> </form>
                </td>
                  </form>

                </td>
                </tr>
        <?php 
            }    
          }
          else
            {
                 echo "<script>
                      alert('Such Data Not Found');
                      </script>";
            }
        }
       ?>

     </tbody>

   </table>
 </div>


  </body>

</html>
