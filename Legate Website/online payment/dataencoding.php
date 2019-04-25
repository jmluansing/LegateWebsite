<?php session_start();?>

	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<body>
	<div class="container ">
  <h2>Data Encoding Form</h2>
  <form action="dataencoded.php" method="POST">
    <input type="hidden" name="dataencoder" id="dataencoder" value="Joven">
    <div class="form-group">
      <label for="SalesOrder">SalesOrder:</label>
      <li><select  class="form-control" id="outbppoidentifier" name="outbppoidentifier" onchange="outbppoidentifierch()"><option value="LE/A">LE/A</option><option value="LG">LG</option><option value="LS">LS</option></select></li><li>
      <input type="number" class="form-control" id="SalesOrder" name="SalesOrder" placeholder="Enter Sales Order Number" required>
    </div>
    <div class="form-group">
      <label for="SalesPerson">Sales Person:</label>
      <input type="text" class="form-control" id="SalesPerson" name="SalesPerson" placeholder="Enter Sales Person" required>
    </div>
    <div class="form-group">
      <label for="CustomerN-ame">Customer Name:</label>
      <input type="text" class="form-control" id="CustomerName" name="CustomerName" placeholder="Enter Customer Name" required>
    </div>
    <div class="form-group">
    	<label for="Handphone">Customer Handphone:</label>
    	<input type="text" class="form-control" id="CustomerHanphone" name="CustomerHanphone" placeholder="Enter Customer Handphone" required>
    </div>
    <div class="form-group" id="frmbuildingname" name="frmbuildingname" style="display: none;">
    	<label for="BuildingName">Building Name:</label>
    	<input type="text"  class="form-control" name="BuildingName" id="BuildingName" placeholder="Enter Building Name">
    </div>
    <div class="form-group">
    	<label for="Address">Address:</label>
    	<input type="text"  class="form-control" name="Address" id="Address" required placeholder="Enter Address">
    </div>
    <div class="form-group">
    	<label for="UnitNo">Unit No:</label>
    	<input type="text"  class="form-control" name="UnitNo" id="UnitNo" placeholder="Enter Unit No: " required>
    </div>
    <div class="form-group">
    	<label for="PostalCode">Postal Code:</label>
    	<input type="text" class="form-control" name="PostalCode" id="PostalCode" placeholder="Enter Postal Code:" required>
    </div>
    <div class="form-group">
        <label for="hcompany" id="company" name="company">Company:</label>
        <input type="hidden" class="form-control" name="hcompany" id="hcompany">
    </div>
    <div class="form-group">
    	<label for="Subtotal">Subtotal:</label>
    	<input type="number" class="form-control" name="Subtotal" id="Subtotal" placeholder="Enter Subtotal" required onchange="outbppoidentifierch()">
    </div>
    <div class="form-group">
    	<label for="GST" id="GST" name="GST">GST:</label>
    	<input type="hidden" class="form-control" name="hGST" id="hGST" >
    </div>
    <div class="form-group">
    	<label for="total">Total:</label>
        <input type="number" class="form-control" name="total" id="total" placeholder="Enter Total Amount">
    </div>
    <div class="form-group">
        <label for="payment">Payment:</label>
        <input type="number" class="form-control" name="payment" id="payment" placeholder="Enter Payment Amount" onchange="paymentout()" required>
    </div>
        <div class="form-group">
        <label for="outstanding">Outstanding:</label>
        <input type="number" class="form-control" name="outstanding" id="outstanding" placeholder="Enter Outstanding Amount">
    </div>
    <button type="submit" class="btn btn-default" id="loginbtn" name="loginbtn">Submit</button>
  </form>
</div>
</body>
<script type="text/javascript">
    function outbppoidentifierch(){
        var identifier  = $("#outbppoidentifier").val();
        var subtoal = $("#Subtotal").val();
        var total; var gst;
        if(identifier =="LE/A"){
          $("#company").html("Company: LEGATE ENTERPRISE");
          $("#hcompany").val("LEGATE ENTERPRISE");
          total = subtoal * 1.07;
          $("#total").val(total);
          gst = subtoal * 0.07;
          $("#GST").html("GST:"+gst.toFixed(2));
          $("#hGST").val(gst.toFixed(2));
        }else if(identifier == "LG"){
            $("#company").html("Company: LEGATE ");
          $("#hcompany").val("LEGATE");
          total = subtoal * 1.07;
          $("#total").val(total);
          gst = subtoal * 0.07;
          $("#GST").html("GST:"+gst.toFixed(2));
          $("#hGST").val(gst.toFixed(2));
        }else{
        $("#company").html("Company: LEGATE LIFESTYLE");
          $("#hcompany").val("LEGATE LIFESTYLE");
          total = subtoal;
          $("#total").val(total);
          $("#GST").html("GST: 0 ");
          $("#hGST").val(0);
        }
    }
    function paymentout(){
         var total  = $("#total").val();
        var payment = $("#payment").val();
        outstanding = total - payment;
        $("#outstanding").val(outstanding);
    }

</script>
</html>