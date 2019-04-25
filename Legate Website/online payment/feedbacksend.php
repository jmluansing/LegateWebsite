<?php header("Access-Control-Allow-Origin: *"); ?>
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
$cname = $_GET['cname'];
$feedback = $_GET['feedback'];
$sqlinsert = "INSERT INTO tbl_feedback (customername,feedbackmessage) VALUES('$cname','$feedback') ";
	if ($conn->query($sqlinsert) === TRUE) {
		$arr = array("res"=>"S");	
		}else{

		}
		echo $_GET['callback'].'('.json_encode($arr).')';

?>