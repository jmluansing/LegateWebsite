<?php header("Access-Control-Allow-Origin: *"); session_start();?>
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
$username  = $_POST["Username"];
$password = $_POST["Pass"];
$sesionusername = "";
$sql = "SELECT * FROM users WHERE email='$username' AND password='$password'"; $resget = $conn->query($sql);
if($resget->num_rows > 0 ){
    while($row = $resget->fetch_assoc()) {
    		$sesionusername = $row["email"];
	}
	$_SESSION["dataencoder"] = $sesionusername;
	echo "<script> window.location.href = 'https://www.legate.com.sg/online%20payment/dataencoding.php'; </script>";
}else{
	echo "<script> Alert('Wrong Username and Password '); window.location.href = 'https://www.legate.com.sg/online%20payment/dataendcondinglogin.php'; </script>";
}
?>