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
<th scope="col">ID </th> 
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Salary</th>
<th scope="col">ID</th>
<th scope="col">Order Amount</th>


</tr>
</thead>
<tbody>
important note
Inner or Join both are same 
Syntax- select * from table_name Inner Join 2Table_Name on 1Table_name.id= 2table_name.primarykey 
primary key mhnje first table id second table mdhe primary key http_response_code
Inner mhnje dhogha mdhle sarv column yenar 
<?php
// $sql="SELECT * from employee  JOIN orders on employee.id = orders.emp_id";

// $sql="SELECT * from employee Inner JOIN orders on employee.id = orders.emp_id";
$sql="SELECT employee.id, employee.Name, orders.id, orders.orderamount from employee Inner JOIN orders on employee.id = orders.emp_id";
$result=mysqli_query($con, $sql);
print_r($sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
          $id=$row['id'];
          $name=$row['Name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $salary=$row['salary'];
          $emp_id=$row['emp_id'];
          $orderamount=$row['orderamount'];
         echo ' <tr>
         <th scope ="row">'.$sr++.'</th>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         <td>'.$salary.'</td>
         <td>'.$emp_id.'</td>
         <td>'.$orderamount.'</td>



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