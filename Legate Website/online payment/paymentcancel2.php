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
$sql = "UPDATE tbl_pocustomer SET status='canceled by customer' WHERE new_po='$purchaseorder'";
if ($conn->query($sql) === TRUE) {
echo '<script>  alert("You cancel the payment"); window.location = "https://www.legate.com.sg";
</script>';
}
?>