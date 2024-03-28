<?php

session_start();

//$user=
//initializing Variables

//$DESIGNATION="";
$row="";
$msg=array();
//connect to database

$db=mysqli_connect('localhost','root','','smart_setter');

/*if(!$db)
	echo "failed";
else
	echo "connected successfully";
*/
//Register users

$username=mysqli_real_escape_string($db,$_POST['username']);
$_SESSION['username']=$username;

//$email=mysqli_real_escape_string($db,$_POST['email']);

$pass=mysqli_real_escape_string($db,$_POST['pass']);

//to prevent from mysql injection
$username=stripcslashes($username);
$pass=stripcslashes($pass);
//$pass=md5($pass);

//form Validation
if(empty($username)){array_push($error,"username is mandatory");}
//if(empty($email)){array_push($error,"email is mandatory");}

if(empty($pass)){array_push($error,"password is mandatory");}

//check database for existing user with same email
/*$user_check_query="SELECT * FROM log_table WHERE  USERNAME='$username' LIMIT 1";
$result=mysqli_query($db,$user_check_query);
$user=mysql_fetch_assoc($result);

if(user)
{

if(user['email']==$email){array_push($error,"email already exist");}

}

//Register the error if no error

if(count($error)==0){


	 $password=md5($password);//this will encrypt the password
	 $query="INSERT INTO `users` (`id`, `email`, `password`) VALUES ('$id', '$email', '$password')";
	 mysqli_query($db,$query);
	 $_SESSION['email']=$email;
	 $_SESSION['SUCCESS']="YOU ARE NOW LOGGED IN ";
	 header('location: index.php');
}
*/
//query the database 
$result=mysqli_query($db,"select * from `log_table` where USERNAME='$username'")
          or die("failed to query database".mysql_error());
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


//header("location: menu.php");

//$row['PASSWORD']==$pass
//password_verify($pass,$row['PASSWORD'])
if($row['USERNAME']==$username)
{

	if(password_verify($pass,$row['PASSWORD']))
        {
        if($row['DESIGNATION']=='filler')
        {
          header("location: \project2019-2020\menu\menu_1.php");

         }
        else
        {
          header("location: \project2019-2020\AdminPanel\MENU\adminmenu_1.php");
  	    }
            
     }  

    else
     {
	   $message = " incorrect password";
  echo "<script type='text/javascript'>alert('$message');
  window.location.href='\index.html';
  </script>";
     }
}
else
{
	//echo "Username or Password incorrect";
    $message = "Username and/or Password incorrect.";
  echo "<script type='text/javascript'>alert('$message');
  window.location.href='\index.html';
  </script>";
}




/*if(row)
{

/*if(row['DESIGNATION']=="filler")
	{array_push($error,"incorrect password");}

else
	{array_push($error,"incorrect password");}

}*/





?>