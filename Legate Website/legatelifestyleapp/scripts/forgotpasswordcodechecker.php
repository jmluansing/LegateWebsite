<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
$servername = "localhost";
$username = "legatecom_lsuser";
$password = "akosiJM30";
$dbname = "legatecom_lifestyleapp";
$testjmflag = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);
}
?>
<?php 
$email  = $_POST["Email"];
$code = $_POST["Code"];

$sqlcheck = "SELECT * FROM tbl_users WHERE email = '$email' AND forgotpasswordcode='$code'";
$rescheck = $conn->query($sqlcheck);
if($rescheck->num_rows > 0){
	echo "Success";
}else{
	echo "Failed";
}

?>