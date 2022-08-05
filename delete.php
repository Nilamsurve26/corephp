<?php
include 'Connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employee` where id=$id";
    $result=mysqli_query($con, $sql);
if($result){
   // echo" deleted successfully";
   header('location:index.php');

}else{
    die(mysqli_error($conn));

}
}

?>
