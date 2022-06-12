<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$db="myformdb";
$Name=$_POST["Name"];
$NickName=$_POST["NickName"];
$PhoneNo=$_POST["PhoneNo"];
$Gender=$_POST["Gender"];
$Age=$_POST["age"];
$Birth_Date=$_POST["Birth_Date"];
$Feedback=$_POST["Feedback"];

	
	$DB_HOST = "localhost"; 
    $DB_DBNAME = "myformdb"; 
    $DB_USER = "root"; 
    $DB_PWD = ""; 
	
	// 1. Create a database connection
$connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PWD,$DB_DBNAME);
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,$DB_DBNAME);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
	
$sql = "INSERT INTO myform (Name,NickName, PhoneNo,Gender,Birth_Date,Feedback) VALUES ('$Name','$NickName','$PhoneNo','$Gender','$Birth_Date','$Feedback')";

mysqli_query($connection, $sql);

mysqli_close($connection);


?>

</body>
</html>

<html>
<head><title>Thank You!</title></head>
<body>
	<h1>Your Response has been recorded</h1>
<img src="icegif-413.gif" align="center" width="80%"  alt=""/>
</body>
</html>