<?php
    /*
     * Enable error reporting
     */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
 
    /*
     * Setup email addresses and change it to your own
     */
    $from = $_POST["cusemail"];
    $to = "sales@legate.com.sg";
    $subject = "Inquiry From Legate.com.sg";
    $ptm = $_POST["thour"].":".$_POST["tmins"]." ".$_POST["ampm"];
    $message = "Name: ".$_POST["cusname"]."\n \n"."Contact Number: ".$_POST["cuscn"]."\n \n"."Address: " .$_POST["cusadd"]."\n \n"."Items to Inquiry:".$_POST["itm"]."\n \n"."Prefered Date of Measurement: ".$_POST["pdsm"]."\n \n"."Prefered Time: ".$ptm."\n \n". "Message: ".$_POST["messageinquiry"];
    $headers = "From:" . $from;
 
    /*
     * Test php mail function to see if it returns "true" or "false"
     * Remember that if mail returns true does not guarantee
     * that you will also receive the email
     */
    if(mail($to,$subject,$message, $headers))
    {
        echo "email send.";
    } 
    else 
    {
        echo "Failed to send.";
    }
?>