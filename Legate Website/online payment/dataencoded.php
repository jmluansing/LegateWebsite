<?php header("Access-Control-Allow-Origin: *"); session_start(); ?>
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
date_default_timezone_set("Asia/Singapore");
$identifier = $_POST["outbppoidentifier"];
$SalesOrder = $_POST["SalesOrder"];
$SalesPerson = $_POST["SalesPerson"];
$CustomerName = $_POST["CustomerName"];
$CustomerHanphone = $_POST["CustomerHanphone"];
$BuildingType = $_POST["BuildingType"];
$BuildingName = $_POST["BuildingName"];
$Address = $_POST["Address"];
$UnitNo = $_POST["UnitNo"];
$PostalCode = $_POST["PostalCode"];
$hcompany = $_POST["hcompany"];
$Subtotal = $_POST["Subtotal"];
$hGST = $_POST["hGST"];
$total = $_POST["total"];
$payment = $_POST["payment"];
$outstanding = $_POST["outstanding"];
$po = $identifier.$SalesOrder;
$ddate = date("Y-m-d");
$ttime = date("h:i A ");
$dataencodername  = $_POST["dataencoder"];
$status = "active";
$sql = "INSERT INTO tbl_pocustomer (new_po, customername, hp,address,unitno,postalcode,companyname,salesperson,subtotal,gst,total,outstanding,payment,dataencodername,ddate,ttime) VALUES ('$po','$CustomerName','$CustomerHanphone','$Address','$UnitNo','$PostalCode','$hcompany','$SalesPerson','$Subtotal','$hGST','$total','$outstanding','$payment','$dataencodername','$ddate','$ttime') ";
if ($conn->query($sql) === TRUE) {
echo "<script> alert('Successful'); window.location.href= 'https://www.legate.com.sg/online%20payment/dataencoding.php'; </script>";
}else{
echo "<script> alert('Failed Ask JM');</script>";

echo $hcompany;
}

?>