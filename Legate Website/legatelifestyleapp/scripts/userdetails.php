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
$username = $_POST["Username"];
$res;
$sqlcheck = "SELECT * FROM tbl_users WHERE mobilenumber='$username' OR email='$username'";
$rescheck = $conn->query($sqlcheck);
if($rescheck->num_rows > 0){
	while($r = $rescheck->fetch_assoc()){
		$res = $r["name"].",".$r["mobilenumber"].",".$r["email"].",".$r["profilelink"]; 
	}
	echo "success,",$res;
}else{
	echo "Failed";
}



?>