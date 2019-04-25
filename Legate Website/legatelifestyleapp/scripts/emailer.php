<?php header("Access-Control-Allow-Origin: *"); ?>
<?php date_default_timezone_set('Asia/Singapore');?>
<?php

$to = "it@legate.com.sg";
$subject = "Inquiry From Legate LifeStyle App";

 $message = "Inquiry From Legate LifeStyle App"."<br><br>"."Name: ".$_POST['name']."<br>"."Contact Number: ".$_POST['contact']."<br>"."Address: " .$_POST['streetAddress']."<br>"."Unit: " .$_POST['unitNumber']."<br>"."Postal: " .$_POST['postal']."<br>"."Items to Inquiry:".$_POST['product']."<br>"."Prefered Date of Measurement: ".$_POST['date']."<br>"."Prefered Time: ".$_POST['time']."<br>". "Message: ".$_POST['message'];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);
?>