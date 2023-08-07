<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
a{
text-decoration: none;
}
</style>
<body>
<?php

$login=false;
$alert=false;

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include'database.php';
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql= "SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
       
    if($num==1)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $verify=password_verify($password,$row['password']);
        if($verify){
                    $login=true;
                    session_start();
                    $_SESSION['Loggedin']=true;
                    $_SESSION['email']=$email;
                    header("location:main.php");
        }
        else{
             $alert=true;
             echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Invalid Credentials! </strong><a href="login.html">Retry</a>
             </div>';
            }
               
        }
    }
           
    else{
        $alert=true;
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Invalid Credentials! </strong><a href="login.html">Retry</a>
        </div>';
        }
        
}

           
           
        
?>
</body>
</html>
