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
<th scope="col">student ID</th>
<th scope="col">Course Id </th>
<th scope="col">Since</th>
</tr>
</thead>
<tbody>
important note  
**self join*
join with self table mhnje ekach table la /means swatachya ekch table sobt self join krt .
join mhnje cross/cartision product. mg yat study table madhe 
query ashi aahe ki student id same asude pn course id different is asude <>=not equal to
tr yenar he out put 
join= cross product 

<?php
$sql="SELECT * FROM study AS T1,study AS T2 WHERE T1.Stud_id=T2.Stud_id AND T1.Cour_id<>T2.Cour_id";


$result=mysqli_query($con, $sql);
// print_r($sql);
$sr=1;
if($result){
    while($row = mysqli_fetch_array($result)) {
    
          $studid=$row['Stud_id'];
          $courid=$row['Cour_id'];
          $since=$row['since'];
         echo ' <tr>
         <th scope ="row">'.$sr++.'</th>
         <td>'.$studid.'</td>
         <td>'.$courid.'</td>
         <td>'.$since.'</td>
         
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