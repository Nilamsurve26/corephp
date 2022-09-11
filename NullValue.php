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
<a href="create.php" class="btn btn-success my-5">Add New User</a>

<table class='table table-bordered table-striped'>
    <thead>
<tr>
<th scope="col">Sr no </th>   
<th scope="col">Name</th>
<th scope="col">Email id</th>
<th scope="col">Mobile</th>
<th scope="col">Salary</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
// IMPORTANT NOTE
// Note: A NULL value is different from a zero value or a field that contains spaces. A field with a NULL value is one that has been left blank during record creation!
// Null values are two types opretores 1.IS NULL
// 2.IS NOT NULL

// $sql = "SELECT id,Name,email,mobile,salary FROM employee where Name IS NULL";
$sql = "SELECT id,Name,email,mobile,salary FROM employee where Name IS NOT NULL";
$result=mysqli_query($con, $sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
        $id=$row['id'];
        $name=$row['Name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $salary=$row['salary'];
        echo ' <tr>
        <th scope ="row">'.$sr++.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$salary.'</td>
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