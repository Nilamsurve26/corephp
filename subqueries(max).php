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
    Imporant note 
    **First Inner query chalnar ekdach
    ithe first bracket madhli query chalnar mg baherchi query chalanar pahili max salary find out krnar
select * form employee where salary pretek salary match krnar aani jo equal yeil to row yenar .
100000=190000  FALSE
50000=190000   FALSE
70000=190000   FALSE
50000=190000   FALSE
120000=190000  FALSE
150000=190000  FALSE
190000=190000  TRUE
Write a sql query to display details who is taking maximum salary.
<?php
$sql = "SELECT * FROM employee where salary = (SELECT Max(salary) FROM employee)";
$result=mysqli_query($con, $sql);
$sr = 1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
    //table filed name
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