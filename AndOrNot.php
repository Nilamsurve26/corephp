<?php 
include'Connect.php';
include'index3.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php include "head.php"; ?>
</head>
<body>
<div class="container">
<div style="margin-left:25%">
<table class='table table-bordered table-striped'>
<h1>AND Opretor</h1>
<thead>
<tr>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
<?php
//$sql = "SELECT  id,Name from employee where id=56 AND Name='tanmay'";
$sql="SELECT id,Name,salary from employee where id=61 AND Name='nathu' AND salary='232333388' ";
$result=mysqli_query($con, $sql);
if($result){
    while($row = mysqli_fetch_array($result)) {
     $id=$row['id'];
     $name=$row['Name'];
     echo ' <tr>
     <th scope ="row">'.$id.'</th>
     <td>'.$name.'</td>
     </tr>';
    }
}
    ?>
</tbody>
</div>
<H1>oor opretor

</H1>
<div class="container">
<div style="margin-left:25%">
<table class='table table-bordered table-striped'>
<h1>OR Opretor</h1>
<thead>
<tr>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
<?php
//$sql = "SELECT  id,Name from employee where id=56 AND Name='tanmay'";
$sql="SELECT id,Name,salary from employee where id=61 OR Name='charan'";
$result=mysqli_query($con, $sql);
if($result){
    while($row = mysqli_fetch_array($result)) {
     $id=$row['id'];
     $name=$row['Name'];
     echo ' <tr>
     <th scope ="row">'.$id.'</th>
     <td>'.$name.'</td>
     </tr>';
    }
}
    ?>
</tbody>
</div>
<div class="container">
<div style="margin-left:25%">
<table class='table table-bordered table-striped'>
<h1>NOT Opretor</h1>
<thead>
<tr>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
<?php
//$sql = "SELECT  id,Name from employee where id=56 AND Name='tanmay'";
$sql="SELECT id,Name,salary from employee where NOT id=61 ";
$result=mysqli_query($con, $sql);
if($result){
    while($row = mysqli_fetch_array($result)) {
     $id=$row['id'];
     $name=$row['Name'];
     echo ' <tr>
     <th scope ="row">'.$id.'</th>
     <td>'.$name.'</td>
     </tr>';
    }
}
    ?>
</tbody>
</div>

</div>
</table>


</body>
</html>