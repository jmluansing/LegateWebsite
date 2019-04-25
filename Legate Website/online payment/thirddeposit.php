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
$unit = $_GET["unit"];
$postalcode = $_GET["postalcode"];
$installmentterms = $_GET["installmentterms"];
$billpermonth = $_GET["billpermonth"];
$paymenttermsselect = $_GET["paymenttermsselect"];
$purchase_order = $bpyespoidentifier.$bpdeposit6digits;
$sql = "UPDATE tbl_bpcustomers SET payment_type	='$paymenttermsselect',installment_terms='$installmentterms', installment_bill_per_month='$billpermonth' WHERE purchase_order='$purchase_order' AND unit_no='$unit' AND postal_code='$postalcode'";

if($conn->query($sql) === TRUE) {
	 	$arr = array("flag"=>"True");
	  		echo $_GET['callback'].'('.json_encode($arr).')';

}else{
$arr = array("flag"=>"False");
	  		echo $_GET['callback'].'('.json_encode($arr).')';
}

/*$sqlgetinfo = "SELECT * FROM tbl_bpcustomers WHERE purchase_order = '$purchase_order' AND unit_no = '$unit' AND postal_code = '$postalcode'"; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){
	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}*/	




?>