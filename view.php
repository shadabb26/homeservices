<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>My Order</title>
    <style>
    
    a{
    text-decoration: none;
}
  #red{
    background-color: red;
    color: white;
   padding: 10px;
    border-radius: 10px;
   margin-top: 100px;
  
    
  }
  hr{
    border: 1px solid black;
  }
  .info{
    margin-top: 10px;
    margin-left: 10px;
  }
  #green{
    background-color:green;
    color: white;
   padding: 10px;
    border-radius: 10px;
   margin-top: 100px;
  
  }
  .order{
    margin-top: 10px;
    text-align: center;
  }
 
        </style>
</head>
<body>
<?php
session_start();

$email=$_SESSION['email'];
include 'database.php';
$sql="SELECT * FROM orders where `emails`='$email'";

$result=mysqli_query($conn,$sql);
$numrows=mysqli_num_rows($result);
if($numrows==0){
    echo"<div class='alert alert-light' role='alert'>
   <strong> $email</strong> You havent booked any service";
}
if($numrows>=1){
echo "<div class='order'>
<h4>Your Orders<h4>
<hr>
</div>";
}
while($row=mysqli_fetch_assoc($result)){
  if($row['status']=="incompleted"){
    echo "<div class='info'>
    Name : <strong> ".$row['name']."</strong><br>
    Address :<strong> " .$row['address']."</strong><br>
    Date :<strong> ".$row['dt']."</strong><br>
    Time :<strong> ".$row['time']."</strong><br>
    Requested Service :<strong> ".$row['skill']."</strong><br><br>
    <a href=services/cancel.php id=red>Cancel Service</a><br></div>
    <hr>";
}
if($row['status']=="completed"){
  echo "<div class='info'>
  Name : <strong> ".$row['name']."</strong><br>
  Address :<strong> " .$row['address']."</strong><br>
  Date :<strong> ".$row['dt']."</strong><br>
  Time :<strong> ".$row['time']."</strong><br>
  Requested Service :<strong> ".$row['skill']."</strong><br><br>
  <a id=green>Completed</a><br></div>
  <hr>";
}
if($row['status']=="cancelled"){
  echo "<div class='info'>
  Name : <strong> ".$row['name']."</strong><br>
  Address :<strong> " .$row['address']."</strong><br>
  Date :<strong> ".$row['dt']."</strong><br>
  Time :<strong> ".$row['time']."</strong><br>
  Requested Service :<strong> ".$row['skill']."</strong><br><br>
  <a id=red>Service Cancelled</a><br></div>
  <hr>";
}
}

?>
</body>
</html>


