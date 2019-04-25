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
$email = $_POST["Email"];

$sqlcheck = "SELECT * FROM tbl_users WHERE email='$email'";
$rescheck = $conn->query($sqlcheck);
if($rescheck->num_rows > 0 ){
	$code = generateRandomString(8);
	$sqlupdate = "UPDATE tbl_users set forgotpasswordcode='$code' WHERE email='$email'";
		if($conn->query($sqlupdate) === TRUE ){
		$to = $email;
		$subject = "Legate LifeStyle App";

		$message = "Legate LifeStyle App"."<br><br>"."Your Code: ".$code;

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		mail($to,$subject,$message,$headers);
			echo "Success";
		}else{
			echo "DB ERROR";
		}
}else{
	echo "DO";
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>
