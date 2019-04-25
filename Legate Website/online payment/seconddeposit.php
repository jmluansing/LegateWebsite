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

$bpyespoidentifier = $_GET["bpyespoidentifier"];
$bpdeposit6digits = $_GET["bpdeposit6digits"];
$unitno = $_GET["unitno"];
$postalcode = $_GET["postalcode"];
$bpdepositotp = $_GET["bpdepositotp"];
$arr = array();
$flag;
$purchase_order = $bpyespoidentifier.$bpdeposit6digits;
$sqlgetinfo = "SELECT * FROM tbl_bpcustomers WHERE purchase_order = '$purchase_order' AND postal_code = '$postalcode' AND unit_no = '$unitno' AND otp  = '$bpdepositotp' "; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){
	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag,"otp"=>$rr["otp"],"companyname"=>$rr["companyname"],"purchaseorder"=>$rr["purchase_order"]);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}	


?>