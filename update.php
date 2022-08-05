 <?php
require_once "Connect.php";
$id=$_GET['updateid'];
if(isset($_POST['save']))
{    
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $salary = $_POST['salary'];
$sql = "Update `employee` set id=$id, Name=$name, email=$email, mobile=$mobile, salary=$salary";
$result=mysqli_query($conn, $sql);
if($result){
  //  echo "Data inserted  Sucessfully";
    header('location:index.php');
}else{
    echo("ERROR: Could not connect");
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
<h2> Update Details</h2>
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
<button type="submit" class="btn btn-primary" name="save">Update</button>
<a href="index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div> 
</body>
</html> 
