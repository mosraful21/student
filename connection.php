<?php
	$host = 'localhost';
	$dbName = 'student';
	$userName = 'root';
	$pwd = '';
    
$dbCon = mysqli_connect($host, $userName, $pwd, $dbName);

if($dbCon){
    echo "Done";
}
else{
    echo "Error";
}
?>