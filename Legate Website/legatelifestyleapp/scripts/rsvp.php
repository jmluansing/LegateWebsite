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
$Username = $_POST["Username"];
$EventName = $_POST["EventName"];
$Ddate = $_POST["Date"];
$name = "";
$st = "active";
$sqlcheck = "SELECT * FROM tbl_rsvp_customer_list WHERE hp='$Username' AND event_name='$EventName' AND attendDate = '$Ddate'"; 
$rescheck = $conn->query($sqlcheck);

if($rescheck->num_rows > 0 ){

	echo "Exists";

}else{

	$sqlgetusername = "SELECT * FROM tbl_users WHERE mobilenumber='$Username'";
	$resgetusername = $conn->query($sqlgetusername);

	while($r = $resgetusername->fetch_assoc()){

		$name = $r["name"];

	}

	$sqlupdate = "INSERT INTO tbl_rsvp_customer_list (event_name,customername,hp,attendDate,status) VALUES('$EventName','$name','$Username','$Ddate','$st')";

	if($conn->query($sqlupdate) === TRUE ){

		echo "Success";

	}else{

		echo "DB ERROR";
		
	}
}




?>