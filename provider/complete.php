<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Completed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style> 
  a{
    text-decoration: none ;
  }
  </style>
</head>
<body>
<?php
session_start();
$email=$_SESSION['email'];
$sk=$_SESSION['skill'];
include 'database.php';

$sql="UPDATE `orders` SET `status` = 'completed' WHERE `orders`.`skill` ='$sk'";
$result=mysqli_query($conn,$sql);
if($result){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Order Completed  </strong><a href="pro.php"> Go back</a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
</body>
</html>





