<?php 

	session_start();
    $_SESSION=array();
	session_destroy();
   
	header('location: \project2019-2020\Login_v6\Login_v6\index.html');


 ?>