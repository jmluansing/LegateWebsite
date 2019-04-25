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
$userName = $_POST["userName"];
$userContact = $_POST["userContact"];
$userEmail = $_POST["userEmail"];
$userPassword = $_POST["userPassword"];
$status = "active";
$exemail = explode("@",$userEmail);

if(checkdnsrr($exemail[1],"MX")){

$sqlcheck = "SELECT * FROM tbl_users WHERE mobilenumber = '$userContact' AND email='$userEmail'"; 
$ressqlcheck = $conn->query($sqlcheck);

	if($ressqlcheck->num_rows > 0 ){

		echo "Exists";

	}else{

		$sqlinsert = "INSERT INTO tbl_users(name,mobilenumber,email,password,status) VALUES('$userName','$userContact','$userEmail','$userPassword','$status')";

		if($conn->query($sqlinsert) === TRUE ){

			echo "Success";

		}else{

			echo "DB ERROR";

		}

	}

}else{

echo "EI";

}


?>