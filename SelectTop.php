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
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
//  $sql = "SELECT *  FROM employee limit 2";
 $sql="SELECT * from employee where Name='nilam' limit 2";
// Print_r($sql);
$result=mysqli_query($con, $sql);
if($result){
    while($row = mysqli_fetch_array($result)) {
    
    //table filed name
    $id=$row['id'];
     $name=$row['Name'];
     $email=$row['email'];
          echo ' <tr>
     <th scope ="row">'.$id.'</th>
     <td>'.$name.'</td>
     <td>'.$email.'</td>
          <td>
     <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
     <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
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