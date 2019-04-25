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
unset($_SESSION["salesperson"]);
if(!isset($_SESSION["login"])){
echo"<script> alert('Your Session Expired Please Login Again'); window.location = 'https://www.legate.com.sg/online%20payment/salespurchaseorderrunning.php'; </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Legate Online Payment - Purchase Order Running Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>
		<div class="container ">
  <h2>Add Running P.O. Form</h2>
  <form action="addrunning.php" method="POST">
  	  <label for="sales1">Select Sales Person:</label>
    <div class="form-group">
          <select class="form-control" id="sales1" name="sales1">
        <?php 
        	$sqlsales = "SELECT * FROM tbl_salespersoninfo"; $ressales = $conn->query($sqlsales);
        	while($row = $ressales->fetch_assoc()){
        		echo "<option value='".$row["Name"]."'>".$row["Name"]."</option>";
        	}
        ?>
      </select>
    </div>
     <label for="pochar">Choose Company:</label>
    <div class="form-group">
     <select class="form-control" id="pochar" name="pochar">
        <option value="LE/A">LE/A</option>
        <option value="LG">LG</option>
        <option value="LS">LS</option>
      </select>
    </div>
    <div class="form-group">
    	<input type="text" name="minnumber" id="minnumber"  class="form-control" placeholder="First Running of the Series" onkeypress="javascript:return isNumber(event)">
    </div>
    <div class="form-group">
    	<input type="text" name="maxnumber" id="maxnumber"  class="form-control" placeholder="Last Running of the Series" onkeypress="javascript:return isNumber(event)">
    </div>
    <input type="hidden" name="addedby" id="addedby" value="<?php echo $_SESSION["login"];?>">
    <button type="submit" class="btn btn-default" id="loginbtn" name="loginbtn">Submit</button>
  </form>
</div>
	</body>
	  <script type="text/javascript">
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }  
  </script>
</html>