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
$sql = "SELECT * FROM tbl_bpcustomers WHERE purchase_order = '$purchaseorder'";$resgetsql = $conn->query($sql);
while($rr = $resgetsql->fetch_assoc()){
	$handphone = $rr["hand_phone"];
	$totalamt = $rr["deposite_amt"];

}
$sqlupate = "UPDATE tbl_bpcustomers SET status = 'paid' WHERE purchase_order = '$purchaseorder'"; 
if ($conn->query($sqlupate) === TRUE) {
}
$sql1  = "SELECT * FROM tbl_salespersoninfo WHERE Name = '$salesperson'"; $resgetsql1 = $conn->query($sql1);
while($rr1 = $resgetsql1->fetch_assoc()){
	$hp = $rr1["HP"];
}
echo '<script>
		var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
											if (this.readyState == 4 && this.status == 200) {
											document.getElementById("demo").innerHTML =
											this.responseText;
											}
											};
											xhttp.open("GET", "https://www.commzgate.net/gateway/SendMsg?ID=89650002&Password=akosiJM30&Mobile='.$hp.'&Type=A&Message=Customer has send a online payment with handphone of '.$handphone.' and purchase order '.$purchaseorder.' with total amount of '.$totalamt.', true);
											xhttp.send();
											alert("Thank you For Choosing Legate"); 
											window.location = "https://www.legate.com.sg";

</script>';


?>