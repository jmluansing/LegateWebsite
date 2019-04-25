<?php header("Access-Control-Allow-Origin: *"); ?>
<?php date_default_timezone_set("Asia/Singapore");?>
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
$userName = $_POST["Username"];
$userPassword = $_POST["LogInPassword"];

$sqlcheck ="SELECT * FROM tbl_users WHERE email='$userName' OR mobilenumber='$userName' AND password='$userPassword'";
$rescheck = $conn->query($sqlcheck);
if($rescheck->num_rows > 0 ){
	echo "success";
}else{
	echo "failed";
}



?>