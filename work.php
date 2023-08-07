
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>workreg</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'database.php';
$name=$_POST['ename'];
$number=$_POST['enumber'];
$adno=$_POST['adno'];
$age=$_POST['age'];
$skill=$_POST['skill'];
$exits=false;

$exitssql="SELECT * FROM workers WHERE cno=$number";
$exitssqlresult=mysqli_query($conn,$exitssql);
$numexitsrows=mysqli_num_rows($exitssqlresult);

if($numexitsrows>0){
    $exits=true;
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>$name</strong> This Number<strong> $number</strong> already Registered!
    </div>";
}
else{

    if($age<18 || $age>55){
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>$name</strong> Sorry! Your Age <strong>$age</strong> doesn't fit to work.
    </div>";
   }
else{
    $sql="INSERT INTO `workers` (`name`, `cno`, `adno`, `age`, `skill`, `dt`,`status`) VALUES ('$name', '$number', '$adno', '$age', '$skill', current_timestamp(),'available')";
    $result=mysqli_query($conn,$sql);

    if($result){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>$name</strong> You have Registered Successfully.
    </div>";
}
}
}
}
?>


</body>
</html>