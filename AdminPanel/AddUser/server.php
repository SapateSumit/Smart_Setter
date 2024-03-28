   <?php


session_start();

//initializing Variables

$query='';

//$error=array();
//connect to database

$db=mysqli_connect('localhost','root','','smart_setter');

if(!$db)
	echo "failed";
else
	echo "connected successfully";

  if (isset($_POST['register'])){
//Register users
$PPermission=mysqli_real_escape_string($db,$_POST['Permission']);
$Username=mysqli_real_escape_string($db,$_POST['USERNAME']);
$password=mysqli_real_escape_string($db,$_POST['psw']);
$repeat_password=mysqli_real_escape_string($db,$_POST['psw-repeat']);
$checkbox1=$_POST['techno']; 
$chk="";  

foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

//form Validation

if(empty($Username)){array_push($error,"Username is mandatory");}

if(empty($password)){array_push($error,"password is mandatory");}
if(empty($repeat_password)){array_push($error," Repeat password is mandatory");}
if(empty($PPermission)){array_push($error,"Permission is mandatory");}

//check database for existing user with same Username
$sql_u = "SELECT * FROM log_table WHERE USERNAME='$Username'";
 $res_u = mysqli_query($db, $sql_u);

   if (mysqli_num_rows($res_u) > 0) 
   {
        echo"<script>alert('Username already exist');
        window.location.href='registration.php';
        </script>";
   }

   elseif ($password != $repeat_password) {
      
       echo "<script>alert('repeat password does not match.');
        window.location.href='registration.php';
        </script>";
      }

   else
   {
      $password = password_hash($password, PASSWORD_DEFAULT);//this will encrypt the password
    $query="INSERT INTO `log_table` (`USERNAME`, `PASSWORD`, `DESIGNATION`, `ALLOTED_COURSE`) VALUES ('$Username', '$password', '$PPermission','$chk')";
    mysqli_query($db,$query);
    $_SESSION['Username']=$Username;
    echo "<script type='text/JavaScript'>
            alert(' User Registered Successfully');
  
            window.location.href='registration.php';
            </script>";

    //header('location: registration.php');


   }
}







?>