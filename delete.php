<?php
include 'Connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employee` where id=$id";
    $result=mysqli_query($conn, $sql);
if($result){
    echo" deleted successfully";

}else{
    die(mysqli_error($conn));

}
}

?>
