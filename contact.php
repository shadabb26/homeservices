<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Conatct us</title>
</head>
<style>
    a{
        text-decoration: none;
    }
    </style>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'database.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mess=$_POST['mess'];
    $sql="INSERT INTO `contact` (`email`, `name`, `message`) VALUES ( '$email', '$name', '$mess')";
    $result=mysqli_query($conn,$sql);

    if($result)
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Request Submitted Successfully !</strong><a href="home.html">Home</a>
  </div>';
}


?>
</body>
</html>

