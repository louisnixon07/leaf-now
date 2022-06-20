<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "login"	;
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "connection Ok";
}
else
{
	echo "connection failed".mysqli_connect_error();
}
?>