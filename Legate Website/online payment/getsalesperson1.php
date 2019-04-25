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
$sql = "SELECT * FROM tblposerieschecker WHERE '$bppo6digits' BETWEEN min AND max  AND pochar= '$bppoidentifier' AND latestoutseries < '$bppo6digits' ";$resql = $conn->query($sql);
if($resql->num_rows > 0 ){
	 while($row = $resql->fetch_assoc()) {
		$arr = array("spname"=>$row["salespersonname"]);
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	}
    
}else{
	$arr = array("spname"=>"Error");
	  		echo $_GET['callback'].'('.json_encode($arr).')';
	

}

?>