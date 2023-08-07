<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $id=$_POST['id'];
  $pass=$_POST['pass'];
  $login=false;

  if($id=="shadab" && $pass==26){
    $login=true;
    

    echo"<a href='users.php'>users</a>\t";
    echo"<a href='workers.php'>workers</a>";
  }
    else{
        echo"Invalid Credentials";
    }
   }
    
  ?>





