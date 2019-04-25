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
$password = $_POST["NewPassword"];
$email =  $_POST["Email"];
$sqlupdate = "UPDATE tbl_users SET password='$password' WHERE email='$email'";
if($conn->query($sqlupdate) === TRUE ){
	echo "Success";
}else{
	echo "Failed";
}




?>