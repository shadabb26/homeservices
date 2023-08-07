<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
</head>
<style>
.login{
    padding-top: 50px;
    padding-bottom: 50px;
    margin: auto;
    width:656px;
    border: 2px solid white;
    margin-top: 85px;
    background-color:rgb(225, 223, 223);
    border-radius: 15px;
    margin-left: 315px;
    
}


#sumbit{
    width: 520px;
    margin:auto;
    margin: -2px;
    padding-top:10px;
    padding-bottom: 10px;
    border-radius: 8px;
    border: 2px solid  rgb(225, 223, 223);
    font-family: 'Ubuntu', sans-serif;
}

#sumbit:hover{
  background-color: rgb(14, 245, 11);
}

#username{
    margin-top: 15px;
    width: 515px;
    padding-top:8px;
    padding-bottom: 8px;
    padding-right: 30px;
    border-radius: 4px;
    border:2px solid white;
    font-family: 'Ubuntu', sans-serif;
}
   
#password{
    width: 515px;
    padding-top:8px;
    padding-bottom: 8px;
    padding-right: 30px;
    border: 2px solid white;
    border-radius: 4px;
    font-family: 'Ubuntu', sans-serif;
    
}
.alert{
    padding-top:15px;
    padding-bottom: 15px;
    margin-top: 20px;
    text-align: center;
}
a{
    text-decoration: none;
}
.order{
  margin-top: 10px;
  text-align: center;
}
</style>

<body>
  <header>
<div class='order'>
<h4>Admin Login<h4>

</div>
  </header>
<div class="login">
        <form action="" id="form" method="post">
         <pre>
         <input type="text" id="username" placeholder="Enter Email" name="email" required>
        
         <input type="password" id="password" placeholder="Enter Password" name="pass" required>
         
         <input type="submit" id="sumbit" value="Login">
         </pre>
       
        </form>
</div>

<?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
      $un=$_POST['email'];
      $ps=$_POST['pass'];
      $username="Shadab";
      $alert=false;

      if($un==$username && $ps=26){
        session_start();
        $_SESSION['Loggedin']=true;
        header("location:admin.php");
      }
      else{
        $alert=true;
      }

      if($alert){
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid Credentials </strong><a href="">Retry</a>
    </div>';
      }
    }
   
   
    ?>
</body>
</html>
