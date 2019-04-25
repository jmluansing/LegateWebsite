<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
$servername = "localhost";
$username = "legatecom_lsuser";
$password = "akosiJM30";
$dbname = "legatecom_lifestyleapp";
$testjmflag = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);
}
?>
<?php
function getExtension($str) {$i=strrpos($str,".");if(!$i){return"";}$l=strlen($str)-$i;$ext=substr($str,$i+1,$l);return $ext;}
$formats = array("jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP");
$name = $_FILES['file']['name'];
 $size = $_FILES['file']['size'];
 $tmp  = $_FILES['file']['tmp_name'];
  $exrawfile = explode(".",$name);
  $username = $exrawfile[0];
 if(strlen($name)){
  $ext = getExtension($name);
  if(in_array($ext,$formats)){
    $imgn = time().".".$ext;
    if(move_uploaded_file($tmp, "uploads/".$imgn)){
     $urlimglink = "https://legate.com.sg/legatelifestyleapp/scripts/uploads/".$imgn;
     echo $urlimglink;
     echo $imgn;
      $sqlupdate = "UPDATE tbl_users SET profilelink = '$urlimglink' WHERE mobilenumber='$username'"; 
         if($conn->query($sqlupdate) === TRUE){
           echo "https://legate.com.sg/legatelifestyleapp/scripts/uploads/" . $_FILES["file"]["name"];
         }else{
           echo "DB ERROR";
         }
    }else{
     echo "Uploading Failed.";
    }
  }else{
   echo "Invalid Image file format.";
  }
 }else{
  echo "Please select an image.";
  exit;
 }
 ?>