<?php header("Access-Control-Allow-Origin: *"); ?>
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

$unitno = $_GET["pounitno"];
$postalcode = $_GET["postalcode"];

	$sqlgetinfo = "SELECT * FROM tbl_bpcustomers WHERE postal_code = '$postalcode' AND unit_no = '$unitno' "; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){
	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag,"purchase_order"=>$rr["purchase_order"],"customer_name"=>$rr["customer_name"],"hand_phone"=>$rr["hand_phone"],"address"=>$rr["address"],"unit_no"=>$rr["unit_no"],"postal_code"=>$rr["postal_code"],"sales_person"=>$rr["sales_person"],"companyname"=>$rr["companyname"],"deposite_amt"=>$rr["deposite_amt"],"buildingtype"=>$rr["buildingtype"],"buildingname"=>$rr["buildingname"]);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}	




?>