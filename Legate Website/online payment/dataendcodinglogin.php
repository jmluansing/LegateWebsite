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
  <h2>Data Encoding login Form</h2>
  <form action="dataencodedlogin.php" method="POST">
    <div class="form-group">
      <label for="Username">Username:</label>
      <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter Username" required>
    </div>
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Enter Password" required>
    </div>
    <button type="submit" class="btn btn-default" id="loginbtn" name="loginbtn">Login</button>
  </form>