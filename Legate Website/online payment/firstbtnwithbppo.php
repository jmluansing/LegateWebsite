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
$oldpo = $_GET["oldpo"];
$pocustname = $_GET["pocustname"];
$pohp = $_GET["pohp"];
$poaddress = $_GET["poaddress"];
$pounitno = $_GET["pounitno"];
$popostalcode = $_GET["popostalcode"];
$pocompanyname = $_GET["pocompanyname"];
$posalesperson = $_GET["posalesperson"];
$posdepositamt  = $_GET["posdepositamt"];
$subtotal = $_GET["subtotal"];
$gst  = $_GET["gst"];
$total = $_GET["total"];
$outstand = $_GET["outstand"];
$paymentterms = $_GET["paymentterms"];
$installmentterms = $_GET["installmentterms"];
$bpbuiltingtype = $_GET["bpbuiltingtype"];
$buildingname = $_GET["buildingname"];
$pobill = $_GET["pobill"];
$otp = rand(100,99999);
$status = "otp send";
$arr = array();
$flag;
$datetoday = date("d-m-Y");
$purchase_order = $bppoidentifier.$bppo6digits;
$sqlinsert = "INSERT INTO tbl_pocustomer (bp_po,new_po,customername,hp,address,unitno,postalcode,companyname,salesperson,depositamt,subtotal,gst,total,outstanding,paymentterms,installmentterms,billpermonth,otp,status,buildingtype,buildingname) VALUES('$oldpo','$purchase_order','$pocustname','$pohp','$poaddress','$pounitno','$popostalcode','$pocompanyname','$posalesperson','$posdepositamt','$subtotal','$gst','$total','$outstand','$paymentterms','$installmentterms','$pobill','$otp','$status','$bpbuiltingtype','$buildingname') ";
if ($conn->query($sqlinsert) === TRUE) {
	$sqlgetinfo = "SELECT * FROM tbl_pocustomer WHERE new_po = '$purchase_order' AND bp_po = '$oldpo' AND unitno = '$pounitno' AND  postalcode = '$popostalcode'"; $resgetinfo = $conn->query($sqlgetinfo);
if($resgetinfo->num_rows > 0 ){
	while($rr = $resgetinfo->fetch_assoc()){
		$flag = 1;
	  	$arr = array("flag"=>$flag,"hand_phone"=>$rr["hp"],"otp"=>$rr["otp"],"purchase_order"=>$rr["new_po"]);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
}else{
	$flag = 0;
  	$arr = array("flag"=>$flag);
  		echo $_GET['callback'].'('.json_encode($arr).')';
	
}	
}else{
echo ";asdsad";
}



?>