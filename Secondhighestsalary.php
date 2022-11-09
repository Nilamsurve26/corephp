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
<th scope="col">Department</th>
</tr>
</thead>
<tbody>
    Imporant note 
    **First Inner query chalnar ekdach
    ithe first bracket(inner query ) madhli query chalnar mg baherchi(outer query) query chalanar pahili max salary find out krnar
 max salary fix zali ki tyachya outer  chi chalnar select max(Salary) from employee where salary <> not equal to max salary 
100000<> 190000  TRUE
50000<> 190000   TRUE
70000<>190000   TRUE
50000<>190000   TRUE
120000<>190000  TRUE
150000<>190000  TRUE
150000<>190000  TRUE
190000=190000  FALSE
mg yatl answer yenar 15000 he 
mg aaplyala third query jaychi salary second highest aahe ashya employee chi details mg select * from employee where salar = kiva IN lihaych 
***IN tevha lihaych jevha multiple value compare karaychya astat tevha ani = equal to tevha lihaych jevha ekch value compare kraychi aste 
mg uotput yeil.  
1]Write a sql query to display  second highest salary form employee table?
2]Write a sql query to display employee details who is taking second highest salary?
$sql = "SELECT * FROM employee where salary =(SELECT MAX(salary) AS salary from employee where salary <>(SELECT Max(salary) FROM employee))";
<?php
$sql = "SELECT * FROM employee where salary IN (SELECT MAX(salary)  from employee where salary <>(SELECT Max(salary) FROM employee))";
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
     $dept=$row['Dept'];
     echo ' <tr>
     <th scope ="row">'.$sr++.'</th>
    //  <td>'.$name.'</td>
    //  <td>'.$email.'</td>
    //  <td>'.$mobile.'</td>
     <td>'.$salary.'</td>
     <td>'.$dept.'</td>
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