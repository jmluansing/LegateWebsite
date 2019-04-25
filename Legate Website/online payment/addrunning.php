<?php header("Access-Control-Allow-Origin: *"); session_start(); ?>
<?php
$servername = "localhost";
$username = "legatecom_userdbpaypal";
$password = "akosiJM30";
$dbname = "legatecom_dbpaypal";
$testjmflag = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);
}
?>
<?php 

$sales1 = $_POST["sales1"];
$pochar = $_POST["pochar"];
$company = "";
if($pochar == "LE/A"){
$company = "Legate Enterprise";
}else if($pochar == "LG"){
$company = "Legate";
}else{
$company = "Legate lifestyle";
}
$min = $_POST["minnumber"];
$max = $_POST["maxnumber"];
$addedby = $_POST["addedby"];
$addeddate = date("d-m-Y");
$status = "active";

$sqlinsert  = "INSERT INTO tblposerieschecker (salespersonname,companyname,pochar,min,max,status,addedby,dateadded) VALUES ('$sales1','$company','$pochar','$min','$max','$status','$addedby','$addeddate')";

if ($conn->query($sqlinsert) === TRUE) {
	echo "<script> alert('Added Successfully'); window.location='https://www.legate.com.sg/online%20payment/addrunningposales.php';</script>";
}else{
	echo "<script> alert('Opps There is something wrong on sever please contact Legate and look for JM'); window.location='https://www.legate.com.sg/online%20payment/addrunningposales.php';</script>";
}
?>