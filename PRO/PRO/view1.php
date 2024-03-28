<?php
$dbh = new PDO("mysql:host=localhost;dbname=smart_setter", "root", "");
$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $dbh->prepare("select * from files_curriculum where id=?");
$stat-> bindParam(1,$id);
$stat-> execute();
$row = $stat->fetch();
header('Content-Type:'.$row['mime']);
echo $row['data'];
?>