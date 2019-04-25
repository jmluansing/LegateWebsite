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
$handphone = "";
$hp = "";
$salesperson = $_GET["salesperson"];
$purchaseorder = $_GET["purchaseorders"];
$totalamt = "";
$sql = "SELECT * FROM  tbl_pocustomer WHERE new_po = '$purchaseorder'";$resgetsql = $conn->query($sql);
while($rr = $resgetsql->fetch_assoc()){
	$handphone = $rr["hp"];
	$totalamt = $rr["outstanding"];

}
$sqlupate = "UPDATE tbl_pocustomer SET status = 'paid' WHERE new_po = '$purchaseorder'"; 
if ($conn->query($sqlupate) === TRUE) {
}
$sql1  = "SELECT * FROM tbl_salespersoninfo WHERE Name = '$salesperson'"; $resgetsql1 = $conn->query($sql1);
while($rr1 = $resgetsql1->fetch_assoc()){
	$hp = $rr1["HP"];
}
echo '<script> var xmlHttp = new XMLHttpRequest();
                                        xmlHttp.open( "GET", "https://www.commzgate.net/gateway/SendMsg?ID=89650002&Password=akosiJM30&Mobile='.$hp.'&Type=A&Message=Customer has send a online deposit payment with handphone of '.$handphone.' and purchase order '.$purchaseorder.' with total amount of '.$totalamt.'", false ); // false for synchronous request
                                        xmlHttp.send(); alert("Thank you For Choosing Legate"); window.location = "https://www.legate.com.sg";
</script>';


?>