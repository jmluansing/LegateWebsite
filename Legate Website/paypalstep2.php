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
$invoiceno = $_POST["invoiceno"];
$installmentterms = $_POST["installmentterms"];
$customername= "";
$handphone="";
$jobsite="";
$salesperson="";
$subtotal="";
$gst= "";
$total="";
$outstanding="";
$installmentamount = "";
$explodedinstallmentterms = explode(" ",$installmentterms);
$sqlcheck = "SELECT * FROM tbl_accounts WHERE invoiceno='$invoiceno'";$ressqlcheck =$conn->query($sqlcheck);
  if($ressqlcheck->num_rows > 0){
        while($row = $ressqlcheck->fetch_assoc()){
        	$customername = $row["customername"]; $handphone = $row["handphone"]; $jobsite = $row["jobsite"]; $salesperson=$row["salesperson"];
        	$subtotal = $row["subtotal"]; $gst = $row["gst"]; $total = $row["total"]; $outstanding = $row["outstanding"]; 
         }
         if($outstanding == 0){
	$installmentamount = ($total/$explodedinstallmentterms[0]) * 1.05;
}else{
	$installmentamount = ($outstanding/$explodedinstallmentterms[0]) * 1.05;

}
?>
<label>Invoice No.: <?php echo $invoiceno; ?></label>
<br>
<label>Installment Terms:<?php echo $installmentterms;?></label>
<br>
<label>Customer Name: <?php echo $customername;?></label>
<br>
<label>Hanphone: <?php echo $handphone;?></label>
<br>
<label>Jobsite: <?php echo $jobsite;?></label>
<br>
<label>Sales Person: <?php echo $salesperson;?></label>
<br>
<label>Subtotal: <?php echo "S $".$subtotal;?></label>
<br>
<label>GST: <?php echo "S $".$gst;?></label>
<br>
<label>Total: <?php echo "S $".$total;?></label>
<br>
<label>Outstanding: <?php echo "S $".$outstanding;?></label>
<br><br>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="EWAACGVT7PNCN">
<input type="hidden" name="lc" value="SG">
<input type="hidden" name="item_name" value="TEstSUb2">
<input type="hidden" name="item_number" value="436521453612">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="src" value="1">
<input type="hidden" name="a3" value="<?php echo  number_format($installmentamount,2); ?>"><!--Amount per Month-->
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="M">
<input type="hidden" name="currency_code" value="SGD">
<input type="hidden" name="srt" value="<?php echo $explodedinstallmentterms[0]; ?>"><!--counter of how many months it will repeat-->
<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted">
<table>
<tr><td><input type="hidden" name="on0" value="Invoice No."></td></tr><tr><td><input type="hidden" name="os0" maxlength="200" value="<?php echo $invoiceno;?>"></td></tr>
</table>
<input type="image" src="https://legate.com.sg/images/PP.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
<?php 
}else{
echo '<script type="text/javascript">alert("Sorry It seems that your Invoice No is not yet in our system kindly call 62421911 look for JM ");</script>';
}

?>
