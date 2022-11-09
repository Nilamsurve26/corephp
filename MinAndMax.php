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
<th scope="col">Salary</th>

</tr>
</thead>
<tbody>
important note
The MIN() function returns the smallest value of the selected column.yat as column name takl apan print honyasathi 
The MAX() function returns the largest value of the selected column.
<?php
$sql="SELECT MAX(salary) AS salary,Name,email,mobile FROM employee";
$sql="SELECT min(salary) as salary from employee";

$result=mysqli_query($con, $sql);
// print_r($sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
        // $id=$row['id'];
        // $name=$row['Name'];
        // $email=$row['email'];
         $mobile=$row['mobile'];
        $salary=$row['salary'];
         echo ' <tr>
         <th scope ="row">'.$sr++.'</th>
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