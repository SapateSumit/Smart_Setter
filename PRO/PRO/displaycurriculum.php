<?php

$code=$_POST['C_code'];
$path="curriculum/";
$code=strtolower($code);
$code.=".pdf";
$file=$path.$code;
$filename=$code;

header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $filename . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Read the file 
@readfile($file); 



?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Paper</title>
</head>
<body>

</body>
</html>