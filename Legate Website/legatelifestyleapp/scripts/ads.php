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
$adsimage = "";
$adslink = "";

$sqlgetads = "SELECT * FROM tbl_adsimages WHERE status='active'";
$resgetads = $conn->query($sqlgetads);

if($resgetads->num_rows > 0 ){

	while($r = $resgetads->fetch_assoc()){
		$adsimage .= $r["imagelink"].",";
		$adslink .= $r["adslink"].",";
	}

	$adsimage = substr($adsimage, 0, -1);
	$adslink = substr($adslink,0,-1);
	echo $adsimage."!".$adslink;	

}else{

	echo "No Ads";
	
}



?>