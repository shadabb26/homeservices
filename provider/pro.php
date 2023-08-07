
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style> 
.navbar-brand{
    margin-left: 10px;
}
a{
 
  text-decoration: none;
}
#left{
    margin-left: 448px;
}
.center{
    margin-left: 10px;
    margin-top: 20px;
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
    margin-left: 15px;
  }
  #green{
    background-color:green;
    color: white;
    padding: 10px;
    border-radius: 10px;
    margin-left: 0px;
    margin-top: -100px;
}
.alert{
    text-align: center;
}
#leftt{
  margin-top: 10px;
  margin-left: 370px;
}
#lefttt{
  margin-top: 10px;
  margin-left: 10px;
}
</style>
<body>
<?php

include'database.php';
session_start();
$p=$_SESSION['no'];
$sql="select * from workers where cno='$p'";

$result=mysqli_query($conn,$sql);

$name=mysqli_fetch_assoc($result);
$namee=$name['name'];
$sk=$name['skill'];


echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"> Welcome '.$namee.'</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
 
   <li class="nav-item">
      <a  id="left" class="nav-link" href="profile.php">'.$sk.'</a>
      </li>
      <li id=leftt>Help <a href="mailto:support@homecare.com">1800018000</a>
      </li>
      </li>
      <li id=lefttt><a href="provider.php">Logout</a>
      </li>
</ul>
</div>
</nav>';

echo '<div class="center"><h4>Orders<h4></div>';
echo "<hr>";


$sql2="Select * from orders where skill='$sk' and status='incompleted'";
$result2=mysqli_query($conn,$sql2);
$numrows=mysqli_num_rows($result2);
if($numrows==0){
    echo"<div class='alert'><strong>$namee </strong>There are No orders</div>";
}

if($result2){
while($row2=mysqli_fetch_assoc($result2)){
    echo "<div class='info'>
    Name : <strong> ".$row2['name']."</strong><br>
    House/Building no :<strong> " .$row2['address']."</strong><br>
    Street/Locality :<strong> ".$row2['street']."</strong><br>
    Date :<strong> ".$row2['dt']."</strong><br>
    Time :<strong> ".$row2['time']."</strong><br>
    Requested Service :<strong> ".$row2['skill']."</strong><br><br>
    <a href=services/cancel.php id=red>Cancel Service</a>
    <a href=complete.php id=green>Complete Service</a>
    <hr>";
}
}


?>

</body>
</html>




