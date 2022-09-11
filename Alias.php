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
    <thead>
<tr>
<th scope="col">Sr no </th> 
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Salary</th>

</tr>
</thead>
<tbody>
important note
aliases are used to temporarily rename a table name or a column name.
For table
syntax- SELECT column_name FROM table_name AS alias_name;
For Column
syntax-SELECT column_nam AS alias_name FROM table_name;
yat Name ha column ch Student_name hoil aani record yetil

<?php
// $sql="SELECT Name AS Student_name From employee";
// aani AS he optional pn aahe
$sql="SELECT Name Student_name From employee";
$result=mysqli_query($con, $sql);
// print_r($sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
        // $id=$row['id'];
         $name=$row['Student_name'];
        //  $email=$row['email'];
        //  $mobile=$row['mobile'];
        //  $salary=$row['salary'];
         echo ' <tr>
         <th scope ="row">'.$sr++.'</th>
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