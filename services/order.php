<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Order</title>
  </head>
  <style>
  .alert{
    margin:0px;
    height: 600px;
    text-align: center;
  }
  p{
    margin-top: 20px;
  }
  a{
    text-decoration: none;
    font-weight: 400;
  }
  #red{
    background-color: red;
    color: white;
   padding: 12px;
    border-radius: 10px;
    
  }
  #green{
    background-color:green;
    color: white;
   padding: 12px;
    border-radius: 10px;
    
  }
  </style>
<body>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
session_start();
$name=$_POST['name'];
$email=$_SESSION['email'];
$address=$_POST['hno'];
$street=$_POST['sname'];
$pin=$_POST['pin'];
$time=$_POST['at'];
$dt=$_POST['dt'];
$a=$_POST['skill'];
$_SESSION['skill']=$a;

include 'database.php';
$ordersql="INSERT INTO `orders` (`name`, `emails`, `address`, `street`, `pin`, `time`, `dt`,`skill`,`status`) VALUES ('$name', '$email', '$address', '$street', '$pin', '$time', '$dt','$a','incompleted')";
$orderresult=mysqli_query($conn,$ordersql);


echo "<div class='alert alert-light' role='alert'>
Thank you <strong>$name</strong> for booking your home service with us!<br>We are excited to help you with your Service Requested: <strong>$a</strong><br>
";


if($a=="Ac Repair"){
include 'database.php';

$sql="Select name,cno,status from workers where skill='$a' and status='available'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
<p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
<a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";

break;

}

}

elseif($a=="Plumber"){
    include 'database.php';
    
    $sql="Select name,cno,status from workers where skill='$a' and status='available'";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_assoc($result)){
        echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
        <p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
        <a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";
        
    break;
    }
    
    }

    elseif($a=="Electrician"){
        include 'database.php';
        
        $sql="Select name,cno,status from workers where skill='$a' and status='available'";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
            echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
            <p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
            <a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";
            
        break;
        }
        
        }

    elseif($a=="Applainces Repair"){
            include 'database.php';
            
            $sql="Select name,cno,status from workers where skill='$a' and status='available'";
            $result=mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($result)){
                echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
                <p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
                <a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";
                
            break;
            }
            
        }
    
        elseif($a=="Carpenter"){
            include 'database.php';
            
            $sql="Select name,cno,status from workers where skill='$a' and status='available'";
            $result=mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($result)){
                echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
                <p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
                <a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";
                
            break;
            }
            
        }

        elseif($a=="Painter"){
            include 'database.php';
            
            $sql="Select name,cno,status from workers where skill='$a' and status='available'";
            $result=mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($result)){
                echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
<p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
<a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";

            break;
            }
            
            }

        elseif($a=="Maid"){
                include 'database.php';
                
                $sql="Select name,cno,status from workers where skill='$a' and status='available'";
                $result=mysqli_query($conn,$sql);
                
                while($row=mysqli_fetch_assoc($result)){
                    echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
<p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
<a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";

                break;
                }
                
            }
        elseif($a=="Driver"){
                include 'database.php';
                
                $sql="Select name,cno,status from workers where skill='$a' and status='available'";
                $result=mysqli_query($conn,$sql);
                
                while($row=mysqli_fetch_assoc($result)){
                    echo "Our Team Member <strong>".$row['name'].'</strong> Will be Shortly At your Service, Contact No :<strong> '.$row['cno']."<br>
                    <p>If you have any questions or concerns about your order, please contact <a href='mailto:support@homecare.com'>support@homecare.com</a></p><br>
                    <a href=../main.php id=green>Back to Home</a> <a href=cancel.php id=red>Cancel Service</a>";
                    
                break;
                }
                
            }
            
            
        
        
        
    
}

?>

</body>
</html>

