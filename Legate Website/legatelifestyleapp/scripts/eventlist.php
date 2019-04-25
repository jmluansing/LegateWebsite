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
$datetoday = date("Y-m-d");
$res;
$ddatess = "";
$sqlcheckevent = "SELECT * FROM tbl_rsvp_event_list WHERE enddate >='$datetoday' AND eventstatus ='active'";
$rescheckevent = $conn->query($sqlcheckevent);
if($rescheckevent->num_rows > 0 ){
	
	while ($r  = $rescheckevent->fetch_assoc()){
		$Variable1 = strtotime($r["startdate"]); 
		$Variable2 = strtotime($r["enddate"]); 
		for ($currentDate = $Variable1; $currentDate <= $Variable2;  
		$currentDate += (86400)) { 
			$ddatess = date("d F Y",$currentDate);
			$res .= $r["event_image"].",".$r["eventname"].",".$r["event_desc"].",".$r["event_venue"].",".$ddatess.",".$r["time"]."!";

		}
		//$ttime .= $r["time"]."//";
		//$datess = substr($ddatess, 0, -1) 0;
		//$tiime = substr($ttime,0,-2);
		
	}
	$rers = substr($res,0,-1);

	echo $rers;
	//$exrers = explode("!",$rers);
	//$arr = array();
	//array_push($arr,$exrers);
	//print_r($arr);
}else{
	echo "failed";
}





?>