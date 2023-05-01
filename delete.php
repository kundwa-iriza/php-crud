<?php
include'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `users` WHERE id=$id";
    $result=mysqli_query($connect,$sql);
    if($result==TRUE){
        //echo "deleted successfully"
        header('location:display.php');
    }else{
        die(mysqli_error($connect));
    }
}
?>