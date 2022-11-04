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
important note    jjjj
** full mhnje donhi table madhala sarv data yenar 
**Full  or Full outer join both are same pn mysql full join la support nahi krt mg aapn union keyword cha use krto tyat 
first left join query union right join query as lihlyvr donhi table madhla sarv data yenar 

Syntax- left join query ani union keyword right join query mg sarv record yenar 

**yevd lakshat tevaych ki left join mean left la jo asto tyatle record yetat aani right join mean 
right join chya bajula /right hand tya table mdhle record yenar yana marge krnar union keyword 
<?php
// $sql="SELECT * from employee  JOIN orders on employee.id = orders.emp_id";
$sql="SELECT * from employee right JOIN orders on employee.id= orders.emp_id 
UNION SELECT * from employee left JOIN orders on employee.id = orders.emp_id";
// $sql="SELECT employee.id, employee.Name, orders.id, orders.orderamount from employee Left JOIN orders on employee.id = orders.emp_id";
$result=mysqli_query($con, $sql);
// print_r($sql);
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