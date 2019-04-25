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
$bppo6digits = $_GET['bppo6digits'];
$bppoidentifier = $_GET['bppoidentifier'];
$po = $bppoidentifier.$bppo6digits;
$outp = 0;
$sql1 = "SELECT * FROM tbl_pocustomer WHERE new_po ='$po' AND outstanding = '$outp'"; $ressql1 = $conn->query($sql1);
if($ressql1->num_rows > 0 ){
		$arr = array("spname"=>"Error1");
	  		echo $_GET['callback'].'('.json_encode($arr).')';
}else{

	$sql2 = "SELECT * FROM tbl_pocustomer WHERE new_po='$po' AND outstanding > '$outp'"; $ressql2 = $conn->query($sql2);
	if($ressql2->num_rows > 0 ){
		while($row2 = $ressql2->fetch_assoc()){
			$arr = array("spname"=>"gotflag","spname1"=>$row2["salesperson"],"cname"=>$row2["customername"],"hp"=>$row2["hp"],"btype"=>$row2["buildingtype"],"bname"=>$row2["buildingname"],"address"=>$row2["address"],"unitno"=>$row2["unitno"],"postalcode"=>$row2["postalcode"],"companyname"=>$row2["companyname"],"subtotal"=>$row2["subtotal"],"gst"=>$row2["gst"],"total"=>$row2["total"],"outstanding"=>$row2["outstanding"],"payment"=>$row2["payment"],"lastpaymentdate"=>$row2["datestartofpayment"],"lastpayment"=>$row2["payment"],"paymentterms"=>$row2["paymentterms"],"outstanding"=>$row2["outstanding"]);
		}
		echo $_GET['callback'].'('.json_encode($arr).')';
	}else{
		$sql = "SELECT * FROM tblposerieschecker WHERE '$bppo6digits' BETWEEN min and max  AND pochar= '$bppoidentifier' ";$resql = $conn->query($sql);
		if($resql->num_rows > 0 ){
			while($row = $resql->fetch_assoc()) {
				$arr = array("spname"=>$row["salespersonname"]);
			}
			echo $_GET['callback'].'('.json_encode($arr).')';   
		}else{
			$arr = array("spname"=>"Error");
			echo $_GET['callback'].'('.json_encode($arr).')';
		}
	}


}

?>