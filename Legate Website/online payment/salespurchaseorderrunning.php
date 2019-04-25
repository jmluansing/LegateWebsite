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

<br>
<?php 
if(!isset($_SESSION["login"])){

?>

<div class="container ">
  <h2>Login Form</h2>
  <form action="checkloginfrm.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default" id="loginbtn" name="loginbtn">Submit</button>
  </form>
</div>
<?php 
}else{
?>
<div class="container" id="tblofRunning">                                                                                      
  <div class="table-responsive">
  <label for="sales1">Select Sales Person:</label>
  	<form action="checksalesperson.php" method="POST">
      <select class="form-control" id="sales1" name="sales1">
        <?php 
        	$sqlsales = "SELECT * FROM tbl_salespersoninfo"; $ressales = $conn->query($sqlsales);
        	while($row = $ressales->fetch_assoc()){
        		echo "<option value='".$row["Name"]."'>".$row["Name"]."</option>";
        	}
        ?>
      </select>
      <br>   
      <input type="submit" value="Submit" class="btn btn-default">
  </form>
  <?php 
  if(!isset($_SESSION["salesperson"])){

  }else{
  ?>
  <h4>Sales Person: <?php echo $_SESSION["salesperson"];?></h4>
     <?php 
     	$cancelpoarr  = array(0);
     	$poletters;$min;$max;$latestout; $sp = $_SESSION["salesperson"];
     	$id;
     	$sql1 = "SELECT * FROM tblposerieschecker WHERE salespersonname = '$sp'"; $ressql = $conn->query($sql1);
     	 while($row = $ressql->fetch_assoc()) {
     	 	$id = $row["id"]; $poletters = $row["pochar"]; $min = $row["min"]; $max = $row["max"]; $latestout = $row["latestoutseries"];
     	 }
     	$sql2  = "SELECT * FROM tblcancelseriespo WHERE salesperson = '$sp'"; $ressql2 = $conn->query($sql2);
     	while($row1 =$ressql2->fetch_assoc()){
     		array_push($cancelpoarr, $row1["seriesno"]);
     	}
     	if($poletters == "" && isset($_SESSION["salesperson"])){
     		echo"<script> alert('Empty P.O. Series Please Add'); window.location = 'https://www.legate.com.sg/online%20payment/addrunningposales.php'; </script>";
       	}else{
			echo '<table class="table"><thead><tr><th>Purchase Order No.</th><th>Status</th><th>Action</th></tr></thead><tbody>';
	     	for($x = $min; $x <= $max; $x++){
	     		echo "<tr>";
	     		if(array_search($x,$cancelpoarr)){ }else{ echo "<td>".$poletters.$x."</td>"; }
	     		echo"<td>On Sales Person</td>";
	     		echo "<td><form action='cancelationfrm.php' method='POST'> <input type='hidden' name='idd' id='idd' value=".$x."> <input type='hidden' name='po' id='po' value=".$poletters."> <input type='submit' value='Cancel'></form> </td>";
	     		echo "</tr>";
	     	}
     }
     ?>
    </tbody>
  </table>
  <?php } ?>
  </div>
</div>

<?php }?>

</body>
</html>
