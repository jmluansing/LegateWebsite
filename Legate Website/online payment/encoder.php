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
}?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="POST">
Choose Company
<br>
<select id="AA" name="AA" ><option value="LE/A">ENTERPRISE</option><option value="LS">LIFESTYLE</option></select>
<br>
Enter 6 Digits P.O. Number 
<br><input type="text" name="BB" id="BB" value="" onkeypress="javascript:return isNumber(event)" maxlength="6" required><br>
Bulk Purchase Date 
<br><input type="date" name="CC" id="CC" value="" required><br>
Customer Name
<br><input type="text" name="DD" id="DD" value="" required><br>
Handphone Don't Include the +65
<br><input type="text" name="EE" id="EE" value="" onkeypress="javascript:return isNumber(event)" required><br>
Building type
<br>
<select id="FF" name="FF" ><option value="HDB"> HDB </option> <option value="Condo"> Condo </option> <option value="Commercial"> Commercial </option><option value="Landed House">Landed House</option></select>
<br>
Building Name
<br><input type="text" id="GG" name="GG" value="" ><br>
Address
<br><input type="text" id="HH" name="HH" value="" required><br>
Unit No
<br><input type="text" id="II" name="II" value="" required><br>
Postal Code 
<br><input type="text" id="JJ" name="JJ" value="" maxlength="6" onkeypress="javascript:return isNumber(event)" required><br>
Sales Person 
<br><input type="text" id="KK" name="KK" value="" required><br>
Deposit Amount
<br><input type="text" id="LL" name="LL" value="" onkeypress="javascript:return isNumber(event)" required><br>
<input type="submit" name= "OO" id="OO" value="Submit">
</form>
<?php 
if(isset($_POST["OO"])){
$AA = $_POST["AA"];
$BB = $_POST["BB"];
$CC = $_POST["CC"];
$DD = $_POST["DD"];
$EE = $_POST["EE"];
$FF = $_POST["FF"];
$GG = $_POST["GG"];
$HH = $_POST["HH"];
$II = $_POST["II"];
$JJ = $_POST["JJ"];
$KK = $_POST["KK"];
$LL = $_POST["LL"];
$PO = $AA.$BB;
	if($AA  == "LE/A"){
		$CN = "Legate Enterprise";
	}else{
		$CN = "Legate LifeStyle";
	}
$status = "paid";
 $sql = "INSERT INTO tbl_bpcustomers(purchase_order,bulk_purchase_date,customer_name,hand_phone,buildingtype,buildingname,address,unit_no,postal_code,sales_person,companyname,deposite_amt,status) VALUES('$PO','$CC','$DD','$EE','$FF','$GG','$HH','$II','$JJ','$KK','$CN','$LL','$status')";
if ($conn->query($sql) === TRUE) {

}else{
    echo "ERROR";
}

}else{

}
?>
<script type="text/javascript">
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }  
  </script>
</body>
</html>