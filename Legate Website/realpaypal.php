
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
Customize By: John Michael Baco Luansing
-->
<!DOCTYPE html>
<html>
<head>
<title>Legate Installment Plan</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Legate Installment Plan,Legate,Invisible Grille,Mozzie Grille,Smartdry,Cat proof,IVG," />
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
  <div class="main">
    <h1>Online Payment By: Legate</h1>
    <div class="content">
      
      <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
          <script type="text/javascript">
            $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
              });
            });
            
          </script>
            <div class="sap_tabs">
              <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <div class="pay-tabs">
                  <h2>Do you Have ? </h2>
                    <ul class="resp-tabs-list">
                      <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Bulk Purchase Deposit</span></li>
                      <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Purchase Order with Bulk Purchase Purchase Order</span></li>
                      <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Purchase Order without Bulk Purchase Purchase Order</span></li> 
                      <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Invoice No.</span></li>
                      <div class="clear"></div>
                    </ul> 
                </div>
                <div class="resp-tabs-container">
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="payment-info">
                      <h3>Bulk Purchase Information</h3>
                      <form>
                        <div class="tab-for">       
                          <h5>Purchase Order No.</h5>
                            <ul><li><select id="bpyespoidentifier" name="bpyespoidentifier"><option value="LE/A">LE/A</option><option value="LG">LG</option><option value="LS">LS</option></select></li><li><input type="text" value="" id="bpdeposit" name="bpdeposit" placeholder="Enter 6 digit number"  onkeypress="javascript:return isNumber(event)" maxlength="6"></li></ul> 
                        </div>      
                      <h3 class="pay-title">Customer Information</h3>
                        <div class="tab-for">       
                          <h5>Customer Name</h5>
                            <input type="text" value="" id="bpdepositname" name="bpdepositname" required="" >
                          <h5>Hand Phone</h5>
                            <input type="text" value="" id="bpdeposithp" name="bpdeposithp" required="">
                          <h5>Address</h5>                          
                            <input type="text" value="" id="bpdepositaddress" name="bpdepositaddress" required="">
                          <h5>Unit No.</h5>
                            <input type="text" value="" id="bpdepositunit" name="bpdepositunit" required="">
                          <h5>Postal Code</h5>
                            <input type="text" value="" id="bpdepositpostalcode" name="bpdepositpostalcode" required="">
                        </div>  
                        <h3>Other Information</h3>
                          <div class="tab-for">
                            <h5>Choose Sales Person</h5>
                              <select id="bpdepositsalesperson" name="bpdepositsalesperson"><option value="Nelson">Nelson</option> <option value="Aileen"> Aileen </option> <option value="Spencer">Spencer</option><option value="Joy">Joy</option><option value="Ron">Ron</option><option value="Vann">Vann</option><option value="Cyndi">Cyndi</option><option value="Sammy">Sammy</option><option value="Jessie">Jessie</option><option value="Apple">Apple</option><option value="Rachel">Rachel</option><option value="George">George</option></select>
                            <h5>Deposit Amount</h5>
                              <input type="text" name="bpdepositamt" id="bpdepositamt" required="" onkeypress="javascript:return isNumber(event)">
                            <h5 id="deposith5smsotp" style="display: none;">SMS OTP</h5>
                              <input type="text" name="bpdepositotp" id="bpdepositotp" style="display: none;">
                            <div class="single-bottom">
                              <ul>
                                <li>
                                  <input type="checkbox"  id="brand" value="">
                                  <label for="brand"><span></span>By checking this box, I agree to the Terms &amp; Conditions &amp; Privacy Policy.</label>
                                </li>
                              </ul>
                            </div>
                          </div>
                        <div class="clear"></div>
                      <br>
                      <input type="submit" value="Submit" id="btnfirstbpdeposit" name="btnfirstbpdeposit">
                      <input type="submit" name="btnsecondbpdeposit" id="btnsecondbpdeposit" value="Submit" style="display: none;">
                    </form>
                    </div>
                  </div>
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="payment-info">
                      <h3>Net Banking</h3>
                      <div class="radio-btns">
                        <div class="swit">                
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div> 
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>  
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>  
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>  
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>   
                        </div>
                        <div class="swit">                
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div> 
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>  
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div> 
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>  
                          <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>  
                        </div>
                        <div class="clear"></div>
                      </div>
                      <a href="#">Continue</a>
                    </div>
                  </div>
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                    <div class="payment-info">
                      <h3>PayPal</h3>
                      <h4>Already Have A PayPal Account?</h4>
                      <div class="login-tab">
                        <div class="user-login">
                          <h2>Login</h2>
                          
                          <form>
                            <input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
                            <input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
                              <div class="user-grids">
                                <div class="user-left">
                                  <div class="single-bottom">
                                      <ul>
                                        <li>
                                          <input type="checkbox"  id="brand1" value="">
                                          <label for="brand1"><span></span>Remember me?</label>
                                        </li>
                                      </ul>
                                  </div>
                                </div>
                                <div class="user-right">
                                  <input type="submit" value="LOGIN">
                                </div>
                                <div class="clear"></div>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3"> 
                    <div class="payment-info">
                      
                      <h3 class="pay-title">Dedit Card Info</h3>
                      <form>
                        <div class="tab-for">       
                          <h5>NAME ON CARD</h5>
                            <input type="text" value="">
                          <h5>CARD NUMBER</h5>                          
                            <input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
                        </div>  
                        <div class="transaction">
                          <div class="tab-form-left user-form">
                            <h5>EXPIRATION</h5>
                              <ul>
                                <li>
                                  <input type="number" class="text_box" type="text" value="6" min="1" />  
                                </li>
                                <li>
                                  <input type="number" class="text_box" type="text" value="1988" min="1" /> 
                                </li>
                                
                              </ul>
                          </div>
                          <div class="tab-form-right user-form-rt">
                            <h5>CVV NUMBER</h5>                         
                            <input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
                          </div>
                          <div class="clear"></div>
                        </div>
                        <input type="submit" value="SUBMIT">
                      </form>
                      <div class="single-bottom">
                          <ul>
                            <li>
                              <input type="checkbox"  id="brand" value="">
                              <label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
                            </li>
                          </ul>
                      </div>
                    </div>  
                  </div>
                </div>  
              </div>
            </div>  

    </div>
    <p class="footer">Copyright © 2018 Payment Form Legate. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a>| Customize By: <a href="https://www.linkedin.com/in/john-michael-l-b7810610b/">John Michael Luansing</a></p>
    <!--<p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>-->
  </div>
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