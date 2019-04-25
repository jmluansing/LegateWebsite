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
$pocustname = $_GET["pocustname"];
$pohp = $_GET["pohp"];
$poaddress = $_GET["poaddress"];
$pounitno = $_GET["pounitno"];
$popostalcode = $_GET["popostalcode"];
$posalesperson = $_GET["posalesperson"];
$posdepositamt  = $_GET["posdepositamt"];
$subtotal = $_GET["total"];
$gst  = $_GET["gst"];
$total = $_GET["subtotal"];
$outstand = $_GET["outstand"];
$otp = rand(100,99999);
$status = "otp send";
$arr = array();
$flag;
$outpaymentterms = $_GET["outpaymentterms"];
if($outpaymentterms == "Installment"){ $outinstall = $_GET["outinstall"]; }else{ $outinstall = 0; }
$outpoperbill = $_GET["outpoperbill"];
$buildingtype = $_GET["builtingtype"];
$buildingname = $_GET["buildingname"];
$companyname = "";
if($bppoidentifier == "LE/A"){
$companyname = "LEGATE ENTERPRISE";
}else if($bppoidentifier == "LG"){
$companyname = "LEGATE";
}else if($bppoidentifier == "LS"){
$companyname = "LEGATE LIFE STYLE ";
}else{
$companyname = "ERROR";
}
$purchase_order = $bppoidentifier.$bppo6digits;
$datestartofpayment = date("Y-m-d");
$dateendofpayment = date("Y-m-d", strtotime("+".$outinstall." month"));
$oldpayment; $newpayment; $oldoutstanding; $newoutstanding;
$sqlcheck = "SELECT * FROM tbl_pocustomer WHERE new_po = '$purchase_order'"; $ressqlcheck = $conn->query($sqlcheck);
if($ressqlcheck->num_rows > 0 ){
	while ($row1 = $ressqlcheck->fetch_assoc()) {
		$oldpayment  = $row1["payment"]; $oldoutstanding = $row1["outstanding"];
	}
	$newpayment = $oldpayment + $outpoperbill;
	$newoutstanding = $oldoutstanding - $outpoperbill;
	$sqlupdate ="UPDATE tbl_pocustomer SET payment = '$newpayment',outstanding = '$newoutstanding' WHERE new_po = '$purchase_order'"; 
	if($conn->query($sqlupdate) == TRUE ){
		$sqlgetinfo0 = "SELECT * FROM tbl_pocustomer WHERE new_po = '$purchase_order' AND unitno = '$pounitno' AND  postalcode = '$popostalcode'";
		$resgetinfo0 = $conn->query($sqlgetinfo0);
	if($resgetinfo0->num_rows > 0 ){
		while($rr0 = $resgetinfo0->fetch_assoc()){
			$flag0 = 1;
		  	$arr = array("flag"=>$flag,"hand_phone"=>$rr0["hp"],"otp"=>$rr0["otp"],"cn"=>$rr0["companyname"]);	
		}
		echo $_GET['callback'].'('.json_encode($arr).')';
	}else{
		$flag = 0;
	  	$arr = array("flag"=>$flag);
	  	echo $_GET['callback'].'('.json_encode($arr).')';
	}	
	}else{

	}
}


?>