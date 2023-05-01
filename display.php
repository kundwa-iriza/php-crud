<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
       
       table{
        margin: 50px;
            border-collapse: collapse;
            background-color: #d9d9d9;
            border: none;
            font-size: 25px;
        
    }
    .upadte{
        background-color: green;
        border: none;
            font-size: 20px;
            padding:5px;
            border-radius: 5px;
    }
    .upadte:hover{
        font-size: 23px;
            padding:10px;
            border-radius: 5px;  
    }
    .delete:hover{
        font-size: 23px;
            padding:10px;
            border-radius: 5px;  
    }

    .delete{
        background-color: red;
        border: none;
        border: none;
            font-size: 20px;
            padding:5px;
            border-radius: 5px;
    }
       
table, td{
        border:1px solid rgb(103, 130, 165);
        padding: 30px;
    } 
   
        a{
            text-decoration: none;
            color: antiquewhite;
        }

        .add-btn{
            margin: 30px;
            background-color:#1ac1dd;
            border: none;
            font-size: 25px;
            padding:15px;
            border-radius: 5px;
        }
        .add-btn:hover{
            background-color: black;
        }
    </style>
</head>
<body  onload="print()">
    <div class="container">
        <button class="add-btn"><a href="user.php">Add user</a></button>
       <table>

        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Gender</td>
            <td>Operations</td>
            
        </tr>
        <tbody>
            <?php
            include 'connect.php';
          $sql="SELECT * FROM `users`";
          $result=mysqli_query($connect,$sql);
          if($result==TRUE){
            while( $row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $email=$row['email'];
                $password=$row['password'];
                $gender=$row['gender'];
                echo'
                <tr>
                   <td>'.$id.'</td>
                    <td>'.$firstname.'</td>
                    <td>'.$lastname.'</td>
                    <td>'.$email.'</td>
                   <td>'.$password.'</td>
                    <td>'.$gender.'</td>
                   <td>
                     <button class="upadte"><a  href="update.php?updateid='.$id.'">update</a></button>
                     <button class="delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                 </tr>                
                ';
            }
          }  
            ?>
          
                </tbody>        
       </table>
    </div>
</body>
</html>