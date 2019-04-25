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
$purchaseorder = $_GET["purchaseorder"];
$sql = "UPDATE tbl_bpcustomers SET status='canceled by customer' WHERE purchase_order='$purchaseorder'";
if ($conn->query($sql) === TRUE) {
echo '<script>  alert("You cancel the payment"); window.location = "https://www.legate.com.sg";
</script>';
echo '<script>


var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
											if (this.readyState == 4 && this.status == 200) {
											document.getElementById("demo").innerHTML =
											this.responseText;
											}
											};
											xhttp.open("GET", "https://www.commzgate.net/gateway/SendMsg?ID=89650002&Password=akosiJM30&Mobile='.$hp.'&Type=A&Message=Customer has cancel a online payment with purchase order '.$purchaseorder.', true);
											xhttp.send();
											alert("You Cancel The Payment "); 
											window.location = "https://www.legate.com.sg";

</script>';
}
?>