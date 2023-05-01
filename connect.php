<?php
$connect=new mysqli('localhost','root','','user_management');
if(!$connect){
    die(mysqli_error($connect));
};
?>
