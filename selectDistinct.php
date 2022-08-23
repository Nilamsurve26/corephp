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
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT Distinct Name from employee";
$result=mysqli_query($con, $sql);
//print_r($result);
if($result){
    while($row = mysqli_fetch_array($result)) {
     $name=$row['Name'];
     echo ' <tr>
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