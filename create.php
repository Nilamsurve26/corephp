<?php
require_once "Connect.php";
if(isset($_POST['submit']))
{    
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $salary = $_POST['salary'];
$sql = "INSERT INTO employee (Name,mobile,email,salary)
VALUES ('$name','$mobile','$email','$salary')";
$result=mysqli_query($con, $sql);
//print_r($result);
if($result){
  //echo "Data inserted  Sucessfully";
    header('location:index.php');
}else{
  die(mysqli_error($con));
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<?php include "head.php"; ?>
</head>
<body>
<div class="container my-5">
<div class="row">

<div class="page-header">
<h2>Add Details</h2>
</div>
<form method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control"  maxlength="50" required="">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control"  maxlength="30" required="">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="mobile" class="form-control"  maxlength="12" required="">
</div>
<div class="form-group">
<label>Salary</label>
<input type="text" name="salary" class="form-control"  maxlength="12" required="">
</div>
<br>
<input type="submit" class="btn btn-primary" name="submit">
<a href="index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div> 
</body>
</html>
