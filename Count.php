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

</tr>
</thead>
<tbody>
The COUNT() function returns the number of rows that matches a specified criterion.
<?php
// $sql="SELECT count(salary) as salary from employee";
$sql="SELECT count(name) as Name from employee where Name='nilam'";

// $sql="SELECT min(salary) as salary from employee";

$result=mysqli_query($con, $sql);
// print_r($sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
        // $id=$row['id'];
         $name=$row['Name'];
        // $email=$row['email'];
        // $mobile=$row['mobile'];
        $salary=$row['salary'];
         echo ' <tr>
         <th scope ="row">'.$sr++.'</th>
         <td>'.$name.'</td>
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