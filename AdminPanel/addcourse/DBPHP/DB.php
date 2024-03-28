<?php
$ConnectionDB = mysqli_connect("localhost", "root", "", "smart_setter");

// Check connection
if($ConnectionDB === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>