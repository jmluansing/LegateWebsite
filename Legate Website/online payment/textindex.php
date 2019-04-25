<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Legate Online Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
   .required:before {
    content: " *";
  }
</style>
</head>
<body>

<div class="container">
  <h2>Legate Online Payment</h2>
  <h4 style="display: none;">Are you ?</h4>
  <ul class="nav nav-pills" style="display: none;">
    <li class="active"><a data-toggle="pill" href="#home">New Customer</a></li>
    <li><a data-toggle="pill" href="#menu1" style="display: none;">New Customer</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
       <div class="payment-info"> 
                      <h3> Sales Order Form </h3>
                        <div class="tab-for">       
                          <h5 style="color:red;"> * Please note that once you enter your <b>name</b> and <b>handphone number</b> system will not allow any changes. </h5><br>
                          <h5>Sales Order No. / Purchase Order No.</h5>
                          <br><p><b>Note:  <br> LE/A : Legate Enterprise <br> LG : Legate <br> LS : Legate LifeStyle  </b> </p>
                           <select id="outbppoidentifierSE" style="display: none;" name="outbppoidentifierSE" onchange="outbppoidentifierch()"><option value="LE/A">LE/A</option><option value="LG">LG</option><option value="LS">LS</option></select><div class="required">
								<input type="text" style="margin-bottom: 0px;"  id="outbppo6digits" name="outbppo6digits" placeholder="Enter Sales Order number"  onkeypress="javascript:return isNumber(event)" maxlength="6" onchange="count();"></div><input value="" disabled="disabled"  type="text" name="outbppoidentifier" id="outbppoidentifier" >
                            <script type="text/javascript">
                            function count()
                            {
                            var total=document.getElementById("outbppo6digits").value;
                            total=total.replace(/\s/g, '');
                            var res = total.charAt(0);
                            if(total.length > 5 && res =="1"){
                            document.getElementById("outbppoidentifier").value="LE/A";
                              $("#outcmp").val("LEGATE ENTERPRISE");
                            }else{  
                            if(res == "8" || res == "9" && total.length == 5){
                            document.getElementById("outbppoidentifier").value="LG";
                            $("#outcmp").val("LEGATE");
                            }else if(res == "5" && total.length == 5){
                            document.getElementById("outbppoidentifier").value="LS";
                            $("#outcmp").val("LEGATE LIFE STYLE ");
                            }else{
                              alert("Please Check Your P.O. Number");
                              document.getElementById("outbppo6digits").value = "";
                            //document.getElementById("outbppoidentifier").value="Please Check Your P.O. Number ";
                            }
                            } 
                            }
                            </script>
                          <input type="button" style="display: none;" name="btnChecksp1" id="btnChecksp1" class="btn btn-info" value="Validate the Sales Order" onclick="checksp1()"><br><br>
                              <h5>Sales Person</h5>
                              <input style="display: none;" type="text" disabled="disabled" id="outposalesperson1" name="outposalesperson1">
                                  <select style="display: block;" id="outposalesperson" name="outposalesperson"><option value="">Choose Sales Person</option><option value="Leslie">Leslie Foo</option> <option value="Jennie Goh">Jennie Goh</option><option value="Operation Office">Operation Office</option><option value="Nelson">Nelson</option> <option value="Nickel"> Nickel </option> <option value="Spencer">Spencer</option><option value="Joy">Joy</option><option value="Vann">Vann</option><option value="Cyndi">Cyndi</option><option value="Sammy">Sammy</option><option value="Jessie">Jessie</option><option value="Rachel">Rachel</option><option value="Ricky">Ricky</option><option value="Michelle">Michelle</option><option value="JM">JM</option></select>
                         
                        </div>      
                      <h3 class="pay-title">Customer Information</h3>
                        <div class="tab-for">        
                          <h5>Customer Name</h5>
                            <input type="text" value="" id="outpocustname" name="outpocustname" required="" >
                          <h5>Hand Phone *do not include the (+65)</h5>
                            <input type="text" value="" id="outpohp" name="outpohp" required="" maxlength="8" onkeypress="javascript:return isNumber(event)" >
                          <h5>Building Type</h5>
                            <select id="builtingtype" name="builtingtype" onchange="bpbuildingtype1();" ><option value="HDB"> HDB </option> <option value="Condo"> Condo </option> <option value="Commercial"> Commercial </option><option value="Landed House">Landed House</option></select><br><br>
                          <h5 id="notHDBorLHlbl1" style="display: none;">Building Name</h5>
                            <input type="text" id="notHDBorLH1" name="notHDBorLH1" value="" required="" style="display: none;">
                            <br><br>
                          <h5>Address</h5>                          
                            <input type="text" value="" id="outpoaddress" name="outpoaddress" required="" >
                          <h5>Unit No. Example ( 00-00 )</h5>
                            <input type="text" value="" id="outpounitno" name="outpounitno" required="" >
                          <h5>Postal Code</h5>
                            <input type="text" value="" id="outpopostalcode" name="outpopostalcode" required="" onkeypress="javascript:return isNumber(event)" onchange="checkpostal();" maxlength="6" >
                        </div>  
                        <h3>Other Information</h3>
                          <div class="tab-for">
                       
                          
                            <br><br>
                              <h5 id="lastpaymentDate" style="display: none;">Last Payment Date:</h5>
                              <input type="text" name="lastpaymentDate1" id="lastpaymentDate1" disabled="disabled" style="display: none;">
                            <h5 id="paymentmade" style="display: none;">Last Payment:</h5>
                              <input type="text" name="paymentmade1" id="paymentmade1" disabled="disabled" style="display: none;">
                                <h5 id="paymentterm" style="display: none;">Last Payment Terms:</h5>
                              <input type="text" name="paymentterm1" id="paymentterm1" disabled="disabled" style="display: none;">

                            <h5 id="totalinvoicelbl">Enter Invoice Total </h5>
                              <input type="text" name="outposubtotal" id="outposubtotal" required="" onkeypress="javascript:return isNumber(event)" onchange="outcomputepo()" >
                            <h5 id="GSTss" name="GSTss ">GST</h5>
                              <input type="text" name="outpogst" id="outpogst" disabled="disabled">
                            <h5>Invoice Subtotal</h5>
                              <input type="text" name="outpototal" id="outpototal" disabled="disabled">
                               <input type="text" name="outpooutstanding" id="outpooutstanding" disabled="disabled" style="display: none;">
                             <h5 id="oustandbal" style="display: none;">OutStanding Balance</h5>
                              <input type="text" name="oustandbal1" id="oustandbal1" disabled="disabled" style="display: none;">
                            <h5 id="outpaymenttermslbl" >Payment Terms</h5>
                            <select name="outpamenttermsselect" id="outpamenttermsselect" onchange="outpamenttermsselectch()">
                            	<option value=" ">Choose Payment Terms</option>
                                <option value="Full"> Full Payment</option>
                                <option value="Installment">Installment Payment</option>
                                <option value="Partial">Partial Payment</option>
                            </select><br/><br/>
                             <h5 id="PartialPaymentlbl" style="display: none;">Enter Partial Value</h5>
                              <input type="text" onkeypress="javascript:return isNumber(event)" name="PartialPayment" id="PartialPayment" style="display: none;"  onchange="changepartialval1();">
                            <h5 id="outpoinstallmentlbl" style="display: none;">Installment Terms:</h5>
                            <select name="outpoinstallmentterms" id="outpoinstallmentterms" style="display: none;" onchange="outdepositinstallmentterms()">
                            </select>
                            <h5 id="outpobillpermontlbl" name="outpobillpermontlbl" style="display: none;font-size: 15px;">Bill Per Month</h5>
                            <h5 id="outtotalpartial" name="outtotalpartial" style="display: none;font-size: 15px;">Bill Per Month</h5>
                            <h5 id="outpobilloutstanding" name="outpobilloutstanding" style="display: none;font-size: 15px;">Your OutStanding</h5>
                            <input type="hidden" name="outstandingtotal" id="outstandingtotal">
                              <input type="hidden" name="outpoperbill" id="outpoperbill" style="display: none;">
                              <input type="hidden" name="outcmp" id="outcmp">
                            <h5 id="outposmsotp" style="display: none;">SMS OTP</h5>
                              <input type="text" name="outpootp" id="outpootp" style="display: none;">
                          <div id="outfrmpopaypal" style="display: none;"> 
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" id="cmd1" name="cmd" value="_xclick">
                            <input type="hidden" id="business2" name="business" value="">
                            <input type="hidden" name="lc" value="SG">
                            <input type="hidden" id="item_name2" name="item_name" value="">
                            <input type="hidden" id="item_number2" name="item_number" value="">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="no_shipping" value="1">
                            <input type="hidden" name="rm" value="1">
                            <input type="hidden" id="urlreturn2" name="return" value=""> <!--http://www.example.com/?id=2 use GET function -->
                            <input type="hidden" id="urlreturncancel2" name="cancel_return" value="">
                            <input type="hidden" name="src" value="1">
                            <input type="hidden" id="a32" name="a3" value="1.00">
                            <input type="hidden" id="a321" name="amount" value="1.00">
                            <input type="hidden" name="p3" value="1">
                            <input type="hidden" name="t3" value="M">
                            <input type="hidden" name="currency_code" value="SGD">
                            <input type="hidden" id="srt2" name="srt" value="">
                            <input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted">
                            <table>
                            <tr><td><input type="hidden" name="on0" value="Invoice No."></td></tr><tr><td><input type="hidden" id="os0" name="os0" maxlength="200"></td></tr>
                            <tr><td><input type="hidden" name="on1" value="Sales Order"></td></tr><tr><td><input type="hidden" id="os1" name="os1" maxlength="200"></td></tr>
                            </table>
                            <input type="image" src="https://legate.com.sg/online%20payment/images/paypal-button-Pay-now.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!" id="paypalbtn2">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                            <div class="single-bottom2">
                              <ul>
                                <li>
                                  <input type="checkbox" class="btn btn-success"  id="outbpdepositcheckbox" name="outbpdepositcheckbox" value="">
                                  <label for="outbpdepositcheckbox"><span></span>By checking this box, I agree to the Terms &amp; Conditions &amp; Privacy Policy.</label>
                                </li>
                              </ul>
                            </div>
                          </div>
                        <div class="clear"></div>
                      <br>
                      <input type="button"  class="btn btn-success" value="Submit" id="outpofirstbtn" name="outpofirstbtn" onclick="outpobtnfirst()" >
                      <input type="button"  style="display: none;" class="btn btn-success" name="outposecondbtn" id="outposecondbtn" value="Submit" onclick="outpobtnsecond()">
                      <input type="button" name="outthirdbtn" id="outthirdbtn" value="Confirm" onclick="outbtnthird()" style="display: none;" class="btn btn-success" >
                        <h5><b>Installment Plan Table<b></h5>
                          <h5><b>* Minimum Purchase of $1000.00 SGD </b></h5>
                            <table class="table table-bordered">
                            <thead>
                            <tr>
                            <th>Months</th>
                            <th>Interest</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>1 to 3 Months</td>
                            <td>add 2% total amount</td>
                            </tr>
                            <tr>
                            <td>4 to 6 Months</td>
                            <td>add 5% total amount</td>
                            </tr>
                            <tr>
                            <td>7 to 12 Months</td>
                            <td>add 8% total amount</td>
                                            </tr>
                            <tr>
                            <td>13 to 18 Months</td>
                            <td>add 10% total amount</td>
                            </tr>
                            <tr>
                            <td>19 to 24 Months</td>
                            <td>add 12% total amount</td>
                            </tr>
                            </tbody>
                            </table>
                            <br><br>
                            <br>
                            <br><br>
                
<hr>
                          <h3 class="pay-title">Customer Feedback</h3>
                           <div class="tab-for">       
                          <h5>Customer Name</h5>
                            <input type="text" value="" id="feedbackname" name="feedbackname" required="" >
                          <h5>Feedback</h5>
                            <textarea rows="4" cols="50" style="width: 100%" id="feedbacktxt" name="feedbacktxt"></textarea>
                        <input type="button"  class="btn btn-success" value="Submit" id="feedbackbtn" name="feedbackbtn" onclick="feedback()" >
                        </div>  
                    <script type="text/javascript">

                      function feedback(){
                        var cname = $("#feedbackname").val();
                        var feedback = $("#feedbacktxt").val();
                          if(feedback == "" || cname == ""){
                            alert("Please check your name or your feedback ");
                          }else{
                            $.ajax({  
                              type:"GET",
                              url:"feedbacksend.php",
                              data:{cname:cname,feedback:feedback},
                              dataType: 'jsonp',
                              cache:false,
                              success:function(iinfo){
                                if(iinfo.res = "S"){
                                  alert("Feed Back Submit Successfully Our Developer will Look on to it Thank You");
                                }else{
                                
                                }
                              }
                            });
                          } 	
                      }
                      function checksp1(){
                          var bppoidentifier = $("#outbppoidentifier").val();
                          var bppo6digits = $("#outbppo6digits").val();
                                $.ajax({  
                                      type:"GET",
                                      url:"getsalesperson.php",
                                      data:{bppo6digits:bppo6digits,bppoidentifier:bppoidentifier},
                                      dataType: 'jsonp',
                                      cache:false,
                                      success:function(iinfo){
                                      
                                  if(iinfo.spname == "Error"){
                                    alert("Opps No Salesperson Found on that Sales Order.  Please Check you Sales Order ");
                                  }else if(iinfo.spname =="Error1"){
                                    alert("Opps The Sales Order is Already In use Please Check you Sales Order ");
                                  }else if(iinfo.spname=="gotflag"){

                                    $("#outposalesperson").val(iinfo.spname1);
                                    $("#outpocustname").val(iinfo.cname);
                                    $("#outpohp").val(iinfo.hp);
                                    $("#builtingtype").val(iinfo.btype);
                                    $("#notHDBorLH1").val(iinfo.bname);
                                    $("#outpoaddress").val(iinfo.address);
                                    $("#outpounitno").val(iinfo.unitno);
                                    $("#outpopostalcode").val(iinfo.postalcode);
                                    $("#outpototal").val(iinfo.subtotal);
                                    $("#outpogst").val(iinfo.gst);
                                    $("#outposubtotal").val(iinfo.total);
                                    $('#lastpaymentDate1').val(iinfo.lastpaymentdate);
                                    $('#paymentmade1').val(iinfo.lastpayment);
                                    $('#paymentterm1').val(iinfo.paymentterms);
                                    $('#oustandbal1').val(iinfo.outstanding);

                                    $('#outpofirstbtn').removeAttr('disabled');
                                    $('#totalinvoicelbl').html("Total Invoice");

                                    $('#oustandbal').show();
                                    $('#oustandbal1').show();
                                    $('#paymentterm').show();
                                    $('#paymentterm1').show();
                                    $('#lastpaymentDate').show();
                                    $('#lastpaymentDate1').show();
                                    $('#paymentmade').show();
                                    $('#paymentmade1').show();

                                    outcomputepo();

                                    if(bppoidentifier=="LS"){

                                      $('#GSTss').hide();
                                      $("#outpogst").hide();

                                    }else{

                                    }
                                    if(iinfo.paymentterms == "Installment"){

                                       $("#outpofirstbtn").attr("disabled", "disabled"); 

                                    }else{

                                     $('#outpofirstbtn').removeAttr('disabled');

                                    }
                                  }else{

                                    $("#outposalesperson").val(iinfo.spname);
                                    $('#outpocustname').removeAttr("disabled");
                                    $('#outpohp').removeAttr("disabled");
                                    $('#builtingtype').removeAttr("disabled");
                                    $('#outpoaddress').removeAttr("disabled");
                                    $('#outpounitno').removeAttr("disabled");
                                    $('#outpopostalcode').removeAttr('disabled');
                                    $('#outposubtotal').removeAttr('disabled');
                                    $('#outpofirstbtn').removeAttr('disabled');

                                  }
                                }
                              });
                      }
                      function checkpostal(){

                        var outpopostalcode = $("#outpopostalcode").length;
                        if(outpopostalcode == 6){

                        }else{
                          //alert("Please enter 6 Digit Postal Code");
                        }
                      }
                       function bpbuildingtype1(){

                        var bpbuiltingtype = $("#builtingtype").val();
                        if(bpbuiltingtype == "HDB" || bpbuiltingtype == "Landed House"){

                          $("#notHDBorLH1").hide(); $("#notHDBorLHlbl1").hide();

                        }else{

                          $("#notHDBorLH1").show(); $("#notHDBorLHlbl1").show();

                        }
                      }
                      function outbppoidentifierch(){

                        var outidentifier = $("#outbppoidentifier").val();

                        if(outidentifier == "LE/A"){

                          $("#outcmp").val("LEGATE ENTERPRISE");

                        }else if(outidentifier == "LG"){

                          $("#outcmp").val("LEGATE");

                        }else{

                          $("#outcmp").val("LEGATE LIFE STYLE ");

                        }
                      }

                      function outcomputepo(){
                        $("#outbppoidentifier").attr("disabled","disabled");
                        var subtotal = $("#outposubtotal").val();
                        var outidentifier1 = $("#outbppoidentifier").val();
                        var outt = $("#oustandbal1").val();
                        var outstanding;
                        if(subtotal > 0){
                      if(outidentifier1 == "LS"){  var gst = 0; 
                        $("#outpototal").val(subtotal);      
                        }else{
                         var total = subtotal / 1.07;  $("#outpototal").val(total.toFixed(2));                         
                        var gst =  parseFloat(subtotal) -  parseFloat(total); 
                        }

                        if(outt == ""){
                         outstanding = subtotal; 
                         }else{
                         outstanding = outt; 
                         }
                        $("#outpogst").val(gst.toFixed(2));
                        $("#outpooutstanding").val(outstanding);
                         $("#outpoperbill").val(outstanding);
                        // $("#outpobillpermontlbl").show();
                         $("#a32").val(outstanding);
                          $("#a321").val(outstanding);
                                                      document.getElementById("outpamenttermsselect").value = " ";
							$("#outtotalpartial").hide();
                            $("#outpobilloutstanding").hide();
                            $("#outpobillpermontlbl").hide();
                              $("#outpoinstallmentlbl").hide();
                              $("#outpoinstallmentterms").hide();
                              $("#PartialPaymentlbl").hide();
                          $("#PartialPayment").hide();
                           $("#outpobillpermontlbl").html("Your Total Bill: "+outstanding);
                                        var xy = document.getElementById("outpoinstallmentterms");
                                        var op0 = document.createElement("option");
                                        var op1 = document.createElement("option");
                                        var op2 = document.createElement("option");
                                        var op3 = document.createElement("option");
                                        var op4 = document.createElement("option");
                                        var op5 = document.createElement("option");
                                        var op6 = document.createElement("option");
                                        var op7 = document.createElement("option");
                                        var op8 = document.createElement("option");
                                        var op10 = document.createElement("option");
                                        var op11 = document.createElement("option");
                                        var op12 = document.createElement("option");
                                        var op13 = document.createElement("option");
                                        var op14 = document.createElement("option");
                                        var op15 = document.createElement("option");
                                        var op16 = document.createElement("option");
                                        var op17 = document.createElement("option");
                                        var op18 = document.createElement("option");
                                        var op19 = document.createElement("option");
                                        var op20 = document.createElement("option");
                                        var op21 = document.createElement("option");
                                         if(outstanding >= 1000){
                                          document.getElementById("outpoinstallmentterms").options.length = 0;
                                          op10.text = "2 Months";
                                          op10.value = "2";
                                          xy.add(op10);
                                          op0.text = "3 Months";
                                          op0.value = "3";
                                          xy.add(op0);
                                          op6.text = "4 Months";
                                          op6.value = "4";
                                          xy.add(op6);
                                          op11.text = "5 Months";
                                          op11.value = "5";
                                          xy.add(op11);
                                          op1.text = "6 Months";
                                          op1.value = "6";
                                          xy.add(op1);
                                          op7.text = "7 Months";
                                          op7.value = "7";
                                          xy.add(op7);
                                          op12.text = "8 Months";
                                          op12.value = "8";
                                          xy.add(op12);
                                          op2.text = "12 Months";
                                          op2.value = "12";
                                          xy.add(op2);
                                          op13.text = "11 Months";
                                          op13.value = "11";
                                          xy.add(op13);
                                          op8.text = "13 Months";
                                          op8.value = "13";
                                          xy.add(op8);
                                          op14.text = "14 Months";
                                          op14.value = "14";
                                          xy.add(op14);
                                          op15.text = "15 Months";
                                          op15.value = "15";
                                          xy.add(op15);
                                          op16.text = "16 Months";
                                          op16.value = "16";
                                          xy.add(op16);
                                          op17.text = "17 Months";
                                          op17.value = "17";
                                          xy.add(op17);
                                          op3.text = "18 Months";
                                          op3.value = "18";
                                          xy.add(op3);
                                          op4.text = "19 Months";
                                          op4.value = "19";
                                          xy.add(op4);
                                          op18.text = "20 Months";
                                          op18.value = "20";
                                          xy.add(op18);
                                          op19.text = "21 Months";
                                          op19.value = "21";
                                          xy.add(op19);
                                          op20.text = "22 Months";
                                          op20.value = "22";
                                          xy.add(op20);
                                          op21.text = "23 Months";
                                          op21.value = "23";
                                          xy.add(op21);
                                          op5.text = "24 Months";
                                          op5.value = "24";
                                          xy.add(op5);
                                        }
                        }else{
                          alert("Minimum Amount is 1 SGD ");
                        }
                        
                      }
                      function outpamenttermsselectch(){
                        var outpooutstanding = $("#outpooutstanding").val();
                        var outpoinstallmentterms = $("#outpoinstallmentterms").val();
                        var outpamenttermsselect = $("#outpamenttermsselect").val();
                        var outbppoidentifierch = $("#outbppoidentifierch").val();
                        var outbillperm = 0;
                        var txtTotalInvoice = $("#outposubtotal").val();
                        $("#a32").val(outpooutstanding);
                         $("#a321").val(outpooutstanding);
                         $("#cmd1").val("_xclick");
                        if(outpamenttermsselect == "Full"){
                            $("#cmd1").val("_xclick");
                              $("#PartialPaymentlbl").hide();
                              $("#PartialPayment").hide();
                           $("#a32").val(outpooutstanding);
                            $("#a321").val(outpooutstanding);
                           $("#outpoinstallmentlbl").hide();
                           $("#outpoinstallmentterms").hide();
                           $("#outpaymenttermslbl").show();
                           $("#outpamenttermsselect").show();
                           $("#outpoperbill").val(outpooutstanding);
                           $("#outpobillpermontlbl").show();
                           $("#outpobillpermontlbl").html("Your Total Bill: "+outpooutstanding);
                            $("#paypalbtn2").attr("src","https://legate.com.sg/online%20payment/images/paypal-button-Pay-now.png");
                            $("#outtotalpartial").hide();
                            $("#outpobilloutstanding").hide();
                            document.getElementById("PartialPayment").value = "";
                        }else if(outpamenttermsselect == "Installment"){
                        	if(txtTotalInvoice < 1000 ){
                        	alert("Your Total Invoice Did not meet the required amount (SGD 1,000) for the installment payment");
                        	$("#outtotalpartial").hide();
                            $("#outpobilloutstanding").hide();
                            $("#outpobillpermontlbl").hide();
                            $("#outpoinstallmentlbl").hide();
                            $("#outpoinstallmentterms").hide();
                            $("#PartialPaymentlbl").hide();
                            document.getElementById("outtotalpartial").value = "";
                            document.getElementById("outpobilloutstanding").value = "";
                            document.getElementById("outpobillpermontlbl").value = "";
                            document.getElementById("outpoinstallmentlbl").value = "";
                            document.getElementById("outpoinstallmentterms").value = "";
                            document.getElementById("PartialPaymentlbl").value = "";
                            document.getElementById("a32").value = "";
                            document.getElementById("a321").value = "";
                              document.getElementById('outpamenttermsselect').value=" ";

                          $("#PartialPayment").hide();
                        	}else{
                          $("#cmd1").val("_xclick-subscriptions");
                          $("#outpoinstallmentlbl").show();
                           $("#outpoinstallmentterms").show();
                           outbillperm = (outpooutstanding / 3 ) * 1.05;
                            $("#srt2").val(3);
                           $("#a32").val(outbillperm.toFixed(2));
                           $("#outpoperbill").val(outbillperm.toFixed(2));
                           $("#outpobillpermontlbl").show();
                           $("#outpobillpermontlbl").html("Your Total Bill per Month : "+outbillperm.toFixed(2));
                           $("#PartialPaymentlbl").hide();
                          $("#PartialPayment").hide();
                            $("#paypalbtn2").attr("src","https://www.legate.com.sg/online payment/images/PP.png");
                            document.getElementById("PartialPayment").value = "";
                        }
                        }else if(outpamenttermsselect == "Partial"){
                            $("#cmd1").val("_xclick");
                             var partial =  $("#PartialPayment").val();
                                $("#a32").val(partial);
                            $("#a321").val(partial);
                              $("#PartialPaymentlbl").show();
                              $("#PartialPayment").show();
                              $("#outpobillpermontlbl").hide();
                              $("#outpoinstallmentlbl").hide();
                              $("#outpoinstallmentterms").hide();
                                  $("#paypalbtn2").attr("src","https://legate.com.sg/online%20payment/images/paypal-button-Pay-now.png");
                        }else{
							$("#outtotalpartial").hide();
                            $("#outpobilloutstanding").hide();
                            $("#outpobillpermontlbl").hide();
                              $("#outpoinstallmentlbl").hide();
                              $("#outpoinstallmentterms").hide();
                              $("#PartialPaymentlbl").hide();
                          $("#PartialPayment").hide();
                        }
                      }
                      function changepartialval1(){	
                         var PartialPayment = $("#PartialPayment").val();
                         var outtotal = $("#outposubtotal").val();
                          var outt = $("#oustandbal1").val();
                          if(outt == ""){
                          var outstanding = outtotal - PartialPayment;
                          $("#outpobillpermontlbl").show();
                          $("#outtotalpartial").show();
                          $("#outpobilloutstanding").show();
                          $("#outtotalpartial").html("Your Invoice Total: "+outtotal);
                          $("#outpobillpermontlbl").html("Your Partial Payment: "+PartialPayment);
                          $("#outpobilloutstanding").html("Your Outstanding: "+outstanding);
                          $("#a32").val(PartialPayment);
                           $("#a321").val(PartialPayment);
                          $("#outpoperbill").val(PartialPayment);
                          $("#outstandingtotal").val(outstanding);
                          }else{
                          var outstanding = outt - PartialPayment;
                          $("#outpobillpermontlbl").show();
                          $("#outtotalpartial").show();
                          $("#outpobilloutstanding").show();
                          $("#outtotalpartial").html("Your Past Outstanding Total: "+outt);
                          $("#outpobillpermontlbl").html("Your Partial Payment: "+PartialPayment);
                          $("#outpobilloutstanding").html("Your Outstanding: "+outstanding);
                          $("#a32").val(PartialPayment);
                          $("#a321").val(PartialPayment);
                          $("#outpoperbill").val(PartialPayment);
                          $("#outstandingtotal").val(outstanding);
                          }

                      }
                        function outpobtnfirst(){
                          var bppoidentifier = $("#outbppoidentifier").val();
                          var bppo6digits = $("#outbppo6digits").val();
                          var pocustname = $("#outpocustname").val();
                          var pohp = $("#outpohp").val();
                          var poaddress = $("#outpoaddress").val();
                          var pounitno = $("#outpounitno").val();
                          var popostalcode = $("#outpopostalcode").val();
                          var posalesperson = $("#outposalesperson").val();
                          var subtotal = $("#outposubtotal").val();
                          var gst = $("#outpogst").val();
                          var total = $("#outpototal").val();
                          var outstand = $("#outstandingtotal").val();
                          var outpaymentterms = $("#outpamenttermsselect").val();
                          var outinstall = $("#outpoinstallmentterms").val();
                          var outpoperbill = $("#outpoperbill").val();
                          var outcmp = $("#outcmp").val();
                          var builtingtype = $("#builtingtype").val();
                          var buildingname = $("#notHDBorLH1").val();
                            if(bppo6digits == " " || bppo6digits == "" || bppo6digits == null){
                                alert("Please Enter The P.O. Number");
                                document.getElementById("outbppo6digits").focus();

                            }else{
                              if(posalesperson == "" || posalesperson == " "){
                                 alert("Please Select A Sales Person");
                                document.getElementById("outposalesperson").focus();
                              }else{
                              	if(outpaymentterms == ""|| outpaymentterms == " "){
                              		alert("Please Select Payment Terms");
                              		document.getElementById("out")
                              	}else{
                              		  if ($('input#outbpdepositcheckbox').is(':checked')) {
                               if(bppoidentifier==" " && bppoidentifier == "" && bppoidentifier == null ){
                                alert("Please Fill Choose");
                              }else if(bppo6digits==" " && bppo6digits =="" && bppo6digits == null ){
                                alert("Please Enter 6 digit of your Purchase order no.");
                              }else if(pocustname==" " && pocustname =="" && pocustname == null ){
                                alert("Please Enter Your Name");
                              }else if(pohp==" " && pohp ==" " && pohp ==null){
                                alert("Please Enter Your Hand Phone");
                              }else if(poaddress==" " && poaddress ==" " && poaddress == null){
                                alert("Please Enter Your Address");
                              }else if(pounitno==" " && pounitno==" " && pounitno == null ){
                                alert("Please Enter Your Unit No");
                              }else if(popostalcode==" " && popostalcode ==" " && popostalcode== null){
                                alert("Please Enter Your Postal Code");
                              }else if(posalesperson==" " && posalesperson==" " && posalesperson == null ){
                                alert("Please Choose Sales Person");
                              }else if(subtotal == " " && subtotal == "" && subtotal == null){
                                alert("Please Enter Subtotal");
                              }else{
                                  $.ajax({  
                                    type:"GET",
                                    url:"outfirstbtnwithbppo.php",
                                    data:{bppoidentifier:bppoidentifier,bppo6digits:bppo6digits,pocustname:pocustname,pohp:pohp,poaddress:poaddress,pounitno:pounitno,popostalcode:popostalcode,posalesperson:posalesperson,subtotal:subtotal,gst:gst,total:total,outstand:outstand,outpaymentterms:outpaymentterms,outinstall:outinstall,outpoperbill:outpoperbill,outcmp:outcmp,builtingtype:builtingtype,buildingname:buildingname},
                                    dataType: 'jsonp',
                                    cache:false,
                                    success:function(iinfo){
                                        //$("#customername").val(iinfo.customername);
                                        $("#outbppoidentifier").attr("disabled", "disabled"); 
                                        $("#outbppo6digits").attr("disabled", "disabled"); 
                                        $("#outpocustname").attr("disabled", "disabled"); 
                                        $("#outpohp").attr("disabled", "disabled"); 
                                        $("#outpoaddress").attr("disabled", "disabled"); 
                                        $("#outpounitno").attr("disabled", "disabled"); 
                                        $("#outpopostalcode").attr("disabled", "disabled"); 
                                        $("#outposalesperson").attr("disabled","disabled");
                                        $("#outposdepositamt").attr("disabled","disabled");
                                        $("#outposubtotal").attr("disabled","disabled");
                                        $("#outpogst").attr("disabled","disabled");
                                        $("#outpototal").attr("disabled","disabled");
                                        $("#outpooutstanding").attr("disabled","disabled");
                                        $("#outpamenttermsselect").attr("disabled","disabled");
                                        $("#outpoinstallmentterms").attr("disabled","disabled");
                                        $("#outpoperbill").attr("disabled","disabled");
                                        $(".single-bottom2").hide();
                                        $("#outposmsotp").show();
                                        $("#outpootp").show();
                                        $("#outposecondbtn").show();
                                        $("#outpofirstbtn").hide();
                                        $("#os1").val(bppoidentifier+bppo6digits);
                                        $("#urlreturn2").val("https://www.legate.com.sg/online payment/paymentsuccess1.php?purchaseorders="+bppoidentifier+bppo6digits+"&salesperson="+posalesperson);
                                        $("#urlreturncancel2").val("https://www.legate.com.sg/online payment/paymentcancel1.php?purchaseorder="+bppoidentifier+bppo6digits);
                                        if(iinfo.cn == "LEGATE ENTERPRISE"){
                                          if(outpaymentterms == "Full" || outpaymentterms == "Partial" ){
                                          $("#business2").val("CLS8ZULRLXGR6");
                                          $("#item_name2").val("partialfull");
                                          $("#item_number2").val("LS001");
                                          }else{
                                          $("#business2").val("CLS8ZULRLXGR6");
                                          $("#item_name2").val("LegateEnterprise");
                                            $("#item_number2").val("LE/AInstallment");
                                          }
                                        
                                        }else if(iinfo.cn == "LEGATE"){
                                          if(outpaymentterms == "Full" || outpaymentterms == "Partial" ){
                                            $("#business2").val("UKHW573YC5DA6");
                                            $("#item_name2").val("partialfull");
                                            $("#item_number2").val("001");
                                          }else{
                                            $("#business2").val("UKHW573YC5DA6");
                                            $("#item_name2").val("Legate Installment");
                                            $("#item_number2").val("LG001");
                                          }
                                         
                                        }else if(iinfo.cn == "LEGATE LIFE STYLE "){
                                          if(outpaymentterms == "Full" || outpaymentterms == "Partial" ){
                                          $("#business2").val("D4TB5NZAEBUGW");
                                          $("#item_name2").val("partialfull");
                                          $("#item_number2").val("LS001");
                                          }else{
                                          $("#business2").val("D4TB5NZAEBUGW");
                                          $("#item_name2").val("LegateLifestyle Installment");
                                          $("#item_number2").val("LS001");
                                          }
                                          
                                        }
                                          var message0 = "Your OTP IS "+iinfo.otp+" please do not reply on this message";
                                          var hhp = pohp;
											var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
											if (this.readyState == 4 && this.status == 200) {
											document.getElementById("demo").innerHTML =
											this.responseText;
											}
											};
											xhttp.open("GET", "https://www.commzgate.net/gateway/SendMsg?ID=89650002&Password=akosiJM30&Mobile=65"+hhp+"&Type=A&Message="+message0, true);
											xhttp.send();
                                         
                                         if(outpaymentterms == "Full" || outpaymentterms == "Partial"){
                                            $("#srt2").val(outinstall);
                                          }else{
                                            $("#srt2").val(outinstall);
                                          }
                                      }
                                  });
                              }
                          }else{
                              alert("Please Check the Terms and Conditions , Privacy Policy");  
                                                        
                          }
                              	}
                              }
                              

                        }
                         
                        }
                        function outpobtnsecond(){
                          var bppoidentifier = $("#outbppoidentifier").val();
                          var bppo6digits = $("#outbppo6digits").val();
                          var pounitno = $("#outpounitno").val();
                          var popostalcode = $("#outpopostalcode").val();
                          var pootp = $("#outpootp").val();
                          var poinstallmentterms = $("#outpoinstallmentterms").val();
                          var pooutstanding = $("#outpooutstanding").val();
                          var billpermonth = 0;
                          var salesperson = $("#outposalesperson").val();
                           
                              $.ajax({
                                    type:"GET",
                                    url:"outsecondbtnpo.php",
                                    data:{bppoidentifier:bppoidentifier,bppo6digits:bppo6digits,pootp:pootp,salesperson:salesperson,poinstallmentterms:poinstallmentterms},
                                    dataType: 'jsonp',
                                    cache:false,
                                    success:function(iinfo){
                                        if(iinfo.otp == pootp){
                                          $("#outposecondbtn").hide();
                                          $("#outpootp").attr("disabled","disabled");
                                           var messagesales = "Your Customer with Sales Order No. "+iinfo.salesorderno+" has an ongoing transaction via Paypal. Please ask for a receipt.";
                                          	var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
											if (this.readyState == 4 && this.status == 200) {
											document.getElementById("demo").innerHTML =
											this.responseText;
											}
											};
											xhttp.open("GET", "https://www.commzgate.net/gateway/SendMsg?ID=89650002&Password=akosiJM30&Mobile="+iinfo.saleshp+"&Type=A&Message="+messagesales, true);
											xhttp.send();
                                            $("#outfrmpopaypal").show();
                                        }else{
                                          alert("Please enter valid OTP");
                                        }
                                        }
                                    });
                        }
                        function outdepositinstallmentterms(){
                            var installmentterms = $("#outpoinstallmentterms").val();
                            var pooutstanding = $("#outpooutstanding").val();
                            var perterms = 0; 
                            var billpermonth = 0;
                            var fflag = "";
                            if(installmentterms <= 3 && installmentterms >= 1){
                              perterms  = 1.02;
                            }else if(installmentterms <= 6 && installmentterms >= 4 ){
                              perterms = 1.05;
                            }else if(installmentterms <= 12 && installmentterms >= 7){
                              perterms = 1.08;
                            }else if(installmentterms <= 18 && installmentterms >= 13){
                              perterms = 1.10;
                            }else if(installmentterms <= 24 && installmentterms >= 19 ){
                              perterms = 1.12;
                            }else{
                              alert("Opps Sorry There was an error please call 62421911 look for JM");
                              fflag ="A";
                            }
                            if(fflag == ""){
                              billpermonth = ( pooutstanding / installmentterms ) * perterms;
                              $("#outpoperbill").val(billpermonth);
                              $("#outpobillpermontlbl").show();
                              $("#outpobillpermontlbl").html("Bill Per Month: "+billpermonth.toFixed(2));
                              $("#a32").val(billpermonth.toFixed(2));
                              $("#srt2").val(installmentterms);
                            }else{
                            alert("Opps Sorry There was an error please call 62421911 look for JM");
                            }
                            
                        }
                        
                    </script>
                    </div>
    </div>
    <div id="menu1" class="tab-pane fade">

    </div>
   
  </div>
</div>
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight: bolder;">Terms And Conditions </h4>
        </div>
        <div class="modal-body">
         <p>
          <h4><b>ACCEPTANCE OF TERMS AND CONDITIONS:</b></h4></br> 
          Welcome to Legate Enterprise. All information and services displayed on the Legate website constitute an “invitation to offer”. Your request for availment constitutes your offer which shall be subject to the terms &amp; conditions as listed below. All the terms &amp; conditions form an Agreement regulating our relationship with regard to use of online transactions.
          All the terms and conditions must be read very carefully. If you do not agree to any of the terms and conditions, you should not use this service. Your use of a Site shall constitute your acceptance of these terms and you also agree to be bound by any such changes/revisions. By using this facility, you accept that this will form a legal binding agreement between you and <b>Legate</b>.
         </p>
         <br>
         <p>
           <h4><b>Definitions:</b></h4><br/>
            "Agreement" means the terms and conditions as detailed herein including all schedules, appendices, annexures, Privacy Policy, and will include the references to this Agreement as amended, supplemented, varied or replaced from time to time.
            “User"/ "You" means and includes you and/or any person or an entity including using or accessing the services provided on this Site.
            "Site" means the online transaction platform owned and operated by Legate which provides a venue to the users of Legate to buy the products/services listed on <a href="https://www.legate.com.sg">www.legate.com.sg</a>
            “Product/s” connotes Admission Forms that appears in our website i.e www.legate.com.sg where the user/ applicant can fill the form online and services promoted / displayed on the Site and offered for any use /sale.
         </p><br>
         <p>
           <h4><b>Eligibility:</b></h4><br/>
           You represent and warrant that you are competent and eligible to enter into legally binding agreement and have the requisite authority to bind the other party to this Agreement. You shall not use this Site if you are not competent to contract under the applicable laws, rules and regulations.
         </p><br>
          <p>
           <h4><b>Modification of Terms and conditions of Service:</b></h4><br/>
           Legate may at any time modify the terms and conditions ("Terms") of the Service without any prior notification to you. You can access the latest version of the Terms at any given time. You should regularly review the Terms. In the event wherein the modified terms are not acceptable to you, you should discontinue using the service. However, if you continue to use the service you agree to accept and abide by the modified Terms. Your use of a Site after any amendment to the Terms of Use shall constitute your acceptance of these terms and you also agree to be bound by any such changes/revisions.
         </p><br>
          <p>
           <h4><b>Electronic Communication:</b></h4><br/>
           When you visit Legate or send e-mails to us or give us your feedback, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices on this website. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.
         </p><br>
          <p>
           <h4><b>Credit card details</b></h4><br/>
           To avail of and use the Services you will have to register with FSM with detail of your information like email-id, name, mob/Tele No, date of birth etc. and then you have the option to submit the Admission form with online payment option. As a part of registration process you agree to provide credit card details etc. You agree, understand and confirm that the credit card details provided by you for availing of services offered by FSM will be correct and accurate and you shall not use the credit card which is not lawfully owned by you. You represent that you have valid rights and title in any and all Contents/Credit Card details that you submit on the Site, that you have not infringed on any right over the same belonging to any party and further that you will indemnify FSM or its affiliates for all claims arising out of any content/Credit Card details that you post on the Site. You further agree and undertake to provide the correct and valid credit card details to FSM. FSM will not be liable for any credit card fraud. The liability to use a card fraudulently will be on the user and the onus to 'prove otherwise' shall be exclusively on the user.<br/>
           <b>You acknowledge and agree that Legate may preserve Content</b> and the said information will not be utilized and shared or disclosed by <b>Legate</b> with any third party unless required <b>to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to:</b><br>
          <b>(a) comply with legal process, law, regulation or court order;</b><br/>
          <b>(b) enforce the Terms and Conditions of this agreement;</b><br>
          <b>(c) respond to claims that any Content/ credit card details violates the rights of third-parties;</b><br>
          <b>(d) respond to your requests for customer service; or</b><br>
         </p><br>
         <p>
          <h4><b>Charges:</b></h4><br>
          Legate shall charge the Non-refundable fees or other charges from a user, in respect of its products and service or any other aspect of this Site which is to be paid by you by submitting the Admission form with online payment option through your Credit Card.
         </p><br>
         <p>
           <h4><b>Revision of Fees/Changes</b></h4><br>
           <b>Legate</b> reserves a right to revise the fees or other charges or withdraw or suspend / cancel, or discontinue any or all of the services without prior notice, make modifications and alterations in any or all of the content, products and services contained on the site without prior notice and at the sole discretion of Legate.
         </p><br>
         <p>
           <h4><b>Cancellation / Refund Policy</b></h4><br>
           Cancellation and Refund of Fee/Charges once made by filling the Admission Forms with credit card details etc., at User’s request, shall not be allowed under any circumstances.
         </p><br>
         <p>
           <h4><b>Non-Delivery or late delivery due to mistakes of user:</b></h4><br>
           In case of non-delivery or late delivery due to a mistake by the user (i.e. writing or incomplete name or address or recipient not available), any extra charges incurred for re-delivery shall be claimed from the user placing the requests.
         </p><br>
         <p>
           <h4><b>Relationship</b></h4><br>
          None of the provisions of the User Agreement shall be deemed to constitute a partnership or agency
          between you and Legate and you shall have no authority to bind Legate in any manner, whatsoever.
         </p><br>
         <p>
           <h4><b>Governing Law and Jurisdiction</b></h4><br>
           This agreement and the relationship between you and Legate shall be is governed and construed in accordance with the Laws of Singapore. 
         </p><br>
         <p>
           <h4><b>Settlement of Disputes</b></h4><br>
           Without prejudice to any provisions in the terms and conditions herein, any dispute or difference arising out of or touching this agreement shall be settled amicably in the First instance. Unresolved disputes or differences shall be referred to a Sole Arbitrator to be appointed/nominated by Legate. 
         </p><br>
         <p>
           <h4><b>Force Majeure</b></h4><br>
          Legate shall have no liability to you for any interruption or delay in access to the Site AND service
          irrespective of the nature of the cause.
         </p><br>
         <p>
           <h4><b>Waiver and Severability</b></h4></br>
           The failure of Legate to exercise or enforce any right or provision of the Agreement shall not constitute a waiver of such right or provision. If any provision of the Agreement is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavour to give effect to the parties' intentions as reflected in the provision, and the other provisions of the Agreement remain in full force and effect.
         </p><br>
         <p>
           <h4><b>Indemnity</b></h4><br>
           You shall indemnify and hold harmless Legate and its respective officers, directors, agents, and employees, from any claim or demand, or actions including reasonable attorneys' fees, made by any third party or penalty imposed due to or arising out of your breach of these terms and conditions.
         </p><br>
         <p>
           <h4><b>Acceptance of Privacy Policy</b></h4><br>
           By using Legate’s sites and services, you signify your acceptance of this Privacy Statement. If you do not agree or are not comfortable with any policy described in this Privacy statement, your only remedy is to discontinue use of Legate sites. We reserve the right, to modify this Privacy Statement at any time.
         </p><br>
         <p>
           <h4><b>Entire Agreement</b></h4><br>
           These Terms of Service constitute the entire agreement between the parties with respect to the subject matter hereof and supersedes and replaces all prior or contemporaneous understandings or agreements, written or oral, regarding such subject matter.
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }  
  </script>
<script type="text/javascript">

    $('#bpdepositcheckbox').on('change', function(e){
      if(e.target.checked){
        $('#myModal').modal();
      }
    });

    $('#pocheckbox').on('change', function(e){
      if(e.target.checked){
       $('#myModal').modal();
      }
    });

    $('#outbpdepositcheckbox').on('change', function(e){
      if(e.target.checked){
       $('#myModal').modal();
      }
    });
    
  </script>
</body>
</html>
