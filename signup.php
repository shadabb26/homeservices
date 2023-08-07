<?php
$alert=false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
include'database.php';
$email=$_POST['em'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$exits=false;
//to check that username exists or not
$exitssql="SELECT * FROM users WHERE email='$email'";
$exitsresult=mysqli_query($conn,$exitssql);
$numexitsrows=mysqli_num_rows($exitsresult);
if($numexitsrows>0){
    $exits=true;
}
else{
    $exits=false;
    if(($password==$cpassword)&& $exits==false){
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` (`email`, `password`, `dt`) VALUES ('$email', '$hash', current_timestamp());";
        $result=mysqli_query($conn,$sql);
        if($result){
        $alert=true;
        }
    }
    else{
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Passwords Dont match! </strong><a href="signup.html">Retry</a>
      </div>';
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap core CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }

       
    </style>
        
</head>
<body>

<?php
if($alert){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Account Created Succesfully! </strong>Now you can <a href="login.html">Login</a>
  </div>';
}
if($exits){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Email Already Exits! </strong>Try with another Email <a href="signup.html">Retry</a>
   </div>';
}
?>

</body>
</html>