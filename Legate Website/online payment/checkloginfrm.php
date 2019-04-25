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
$email = $_POST["email"];
$password = $_POST["pwd"];
$status = "active";
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status='$status'"; $resgetsql = $conn->query($sql);
if ($resgetsql->num_rows > 0) {
  $_SESSION["login"] = $email;
  header('Location: https://www.legate.com.sg/online%20payment/salespurchaseorderrunning.php');

}else{
  echo"<script> alert('Please check your email/password '); </script>";
}
?>