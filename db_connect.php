<?php  

// $sname = "localhost";
// $uname = "root";
// $password = "";

// $db_name = "tester_db";

// $conn = mysql_connect($sname, $uname, $password, $db_name);

$conn = new mysqli("localhost","root","","tester_db");

if (!$conn) {
	echo "Connection Failed!!!!!!";
}