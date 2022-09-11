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
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
// yamdhe first character n asel ase recods yenar
// $sql = "SELECT * FROM employee where Name Like'n%'";
//$sql = "SELECT * FROM employee where Name Like'nilam%'";
//yamdhe last character n asel ase recods yenar
// $sql = "SELECT * FROM employee where Name Like'%y'";

// yamdhe last character m aahe ase records yenar 
//$sql = "SELECT * FROM employee where Name Like'%m'";
//*kontya pn position la am asel te record yenar
//$sql = "SELECT * FROM employee where Name Like'%am%'";
//yamdhe ase record yenar ki jya madhe jyanchi starting m ne asel aani y ne 
//$sql = "SELECT * FROM employee where Name Like'm%' or Name Like 'y%'";
//yamdhe m sodun sarv record yenar
//$sql = "SELECT * FROM employee where Name not Like'm%'";
//case sensitive sathi binary keyword use kraychi
//$sql = "SELECT * FROM employee where binary Name Like'S%'";
//yamdhe ase record yenar jya madhe jaychi survat m  ne asel aani end i ne asel
//$sql = "SELECT * FROM employee where  Name Like'm%i'";
//yat ase record yenar jyat 2nd and 3rd position la character il asel
//$sql = "SELECT * FROM employee where  Name Like'_il%'";
//yat are record yenaar ki jyat 3rd and 4th position la he character astil
//$sql = "SELECT * FROM employee where  Name Like'__la%'";
//yat starting la  r asel aani second la kay asel mahit nahi end la h asel
//$sql="SELECT * From employee where Name Like 'm_h%'";
//yat jyachi starting a ne zali asel te sarv record yenar
//$sql = "SELECT * FROM employee where Name Like'a_%'";
//first character mahit nahi pn second i aani 3rd la l aahe 
$sql = "SELECT * FROM employee where Name Like'_il'";

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
     echo ' <tr>
     <th scope ="row">'.$sr++.'</th>
     <td>'.$name.'</td>
     <td>'.$email.'</td>
     <td>'.$mobile.'</td>
     <td>'.$salary.'</td>
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