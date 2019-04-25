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
$customername = $_GET["customername"];
$hp = $_GET["hp"];
$address = $_GET["address"];
$unitno = $_GET["unitno"];
$postalcode = $_GET["postalcode"];
$salesperson = $_GET["salesperson"];
$depositamt  = $_GET["depositamt"];
$otp = rand(100,99999);
$status = "otp send";
$arr = array();
$flag;
$companyname = "";
$datetoday = date("d-m-Y");
if($bpyespoidentifier == "LE/A"){
$companyname = "LEGATE ENTERPRISE";
}else if($bpyespoidentifier == "LG"){
$companyname = "LEGATE";
}else if($bpyespoidentifier == "LS"){
$companyname = "LEGATE LIFE STYLE ";
}else{
$companyname = "ERROR";
}
$purchase_order = $bpyespoidentifier.$bpdeposit6digits;
$sqlinsert = "INSERT INTO tbl_bpcustomers (purchase_order,bulk_purchase_date,customer_name,hand_phone,address,unit_no,postal_code,sales_person,companyname,deposite_amt,status,otp) VALUES('$purchase_order','$datetoday','$customername','$hp','$address','$unitno','$postalcode','$salesperson','$companyname','$depositamt','$status','$otp') ";
if ($conn->query($sqlinsert) === TRUE) {
	$sqlgetinfo = "SELECT * FROM tbl_bpcustomers WHERE purchase_order = '$purchase_order' AND postal_code = '$postalcode' AND unit_no = '$unitno' "; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){
	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag,"hand_phone"=>$rr["hand_phone"],"otp"=>$rr["otp"]);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}	
}else{

}



?>