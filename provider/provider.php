<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
     .form{
       margin-left: 450px;
       margin-top: 180px;
       justify-content: center;
     }

    .form-control{
      width: 400px;
    }
    label{
        margin-left: 5px;
    }
    .btn{
      padding-right: 15px;
      padding-left: 15px;
    }
    .alert{
        text-align: center;
    }
    #reg{
        margin-left: 525px;
        margin-top: -65px;
    }
    </style>
  </head>
  <body>

<div class="form">
<form action="provider.php" method="post">
<label for="exampleFormControlInput1" class="form-label">Enter Registered Number</label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone no" name="mno" maxlength="10">
<br>
<button type="submit" class="btn btn-success">Login</button>
</form>

</div>   
<form action="../work.html">
<button type="submit" class="btn btn-dark" id="reg">Register</button>
</form> 
  


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $phone=$_POST['mno'];

 include 'database.php';
 $sql="SELECT * FROM workers WHERE cno='$phone'";
 $result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1){
    session_start();
   $_SESSION['no']=$phone;
   $_SESSION['login']=true;
   header('location:pro.php');

}
else{
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Number doesn\'t exits</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

}


?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
</html>



