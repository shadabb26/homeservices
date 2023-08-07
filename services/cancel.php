<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cancel Order</title>
    <style>
        .alert{
            margin: 0px;
            text-align: center;
        }
    #green{
        
    background-color:green;
    color: white;
    padding: 12px;
    border-radius: 10px;

    }
    a{
      text-decoration: none;
    }
    .cont{
        display: flex;
        justify-content: center;
    }
        </style>
</head>
<body>
    <?php
    session_start();
    $email=$_SESSION['email'];
    $sk=$_SESSION['skill'];


    include 'database.php';
    $cancelsql="UPDATE `orders` SET `status` = 'cancelled' WHERE `orders`.`skill`='$sk'";
    $result=mysqli_query($conn,$cancelsql);

   

    if($result){
        echo "<div class='alert alert-danger' role='alert'>
        <strong>$email </strong>Your Service Order have been Cancelled!
        </div><br>
        <div class='cont'><a href=../main.php target=_self id=green>Go back</a></div>";
       
      
        
    }

    ?>

</body>
</html>