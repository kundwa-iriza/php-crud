<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $gender=$_POST['gender'];
    // $id=$_POST['id']; 
echo $id;
    $sql="INSERT   INTO  users  (firstname, lastname, email, password, gender) VALUES ('$fname', '$lname','$email','$password','$gender')";
    $result=$connect->query($sql);
        if($result==TRUE){
           header('location:display.php');
        }else{
          die(mysqli_error($connect));
        } ;       
    $conn->close();
      }
    
?>
