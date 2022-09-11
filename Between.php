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
range find sathi between opretors  use karaych 
pn yat string sathi S cha record nahi yenar jr ithe numeric value ghetli tr 64 record pn yenar 
<?php
// $sql="SELECT * from employee where Name BETWEEN 'A'AND 'S'";
//$sql="SELECT * from employee where Id BETWEEN 54 And 64";
$sql="SELECT * from employee where Id NOT BETWEEN 54 And 64";

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
         echo ' <tr>
         <th scope ="row">'.$id.'</th>
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