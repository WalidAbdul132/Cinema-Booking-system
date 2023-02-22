<?php
$servername="localhost";
$username="root";
$password="";
$database="cinema";
$conn = new mysqli($servername,$username,$password, $database);
if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}

//    or
//die("Not connected to the server".mysql_error());
//mysql_select_db($database)
//or die("No database selected".mysql_error());
?>