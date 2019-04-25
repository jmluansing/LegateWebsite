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

$bppoidentifier = $_GET["bppoidentifier"];
$bppo6digits = $_GET["bppo6digits"];
$pootp = $_GET["pootp"];
$installmentval = $_GET["poinstallmentterms"];
$purchase_order = $bppoidentifier.$bppo6digits;
$salesperson = $_GET["salesperson"];
$saleshp = "";
$sqlgetSalesHp = "SELECT * FROM tbl_salespersoninfo WHERE Name='$salesperson'";  $resgetsaleshp = $conn->query($sqlgetSalesHp);

while($rr1 = $resgetsaleshp->fetch_assoc()){
	$saleshp = $rr1["HP"];
}
$sqlgetinfo = "SELECT * FROM tbl_pocustomer WHERE new_po = '$purchase_order' AND otp = '$pootp'"; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){

	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag,"companyname"=>$rr["companyname"],"otp"=>$rr["otp"],"saleshp"=>$saleshp,"salesorderno"=>$purchase_order);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}	

?>