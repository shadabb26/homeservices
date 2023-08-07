<?php
session_start();
if (!isset($_SESSION['Loggedin'])) {
    header('Location:../login.html');
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Page</title>
   
<style>
.nav{
    background-color: rgb(225, 223, 223);
    border-radius: 20px;
    padding-bottom: 0px;
    
}
ul{
    display: flex;
    list-style: none;
    margin: 0px;
    padding-top: 20px;
    padding-bottom: 20px;
}
li{ 
    font-family: 'Ubuntu', sans-serif;
    font-weight: 400;
}
.nav ul li a{
    margin-top: 7px;
    text-decoration: none;
    color:black;
    padding-left:20px;
    padding-right: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 10px;
    
}

.nav ul li a:hover{
    background-color:black;
    color:white;
    
}

#left{
    margin-left: 650px;
   }
   
.cont{
    display: flex;
    justify-content: center;
    margin-top: 140px;

}
.card{
    font-family: 'Ubuntu', sans-serif;
    margin: 30px;
    background-color: whitesmoke;
    border-radius: 8px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-right:70px;
    padding-left: 70px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
   
}
.card p{
    text-align: center;
    font-size: large;
}
#tu{
    background-color:lawngreen;
}
#tw{
    background-color:yellow;
}

#to{
    background-color:rgb(153, 7, 250);
}
#co{
    background-color:red;
}
p{
    font-weight: 500;
}
</style>
</head>
<body>
<?php
include 'database.php';
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);

$sqlw="SELECT * FROM workers";
$resultw=mysqli_query($conn,$sqlw);
$roww=mysqli_num_rows($resultw);

$sqlo="SELECT * FROM orders";
$resulto=mysqli_query($conn,$sqlo);
$rowww=mysqli_num_rows($resulto);

$sqlco="SELECT * FROM orders WHERE status='cancelled'";
$resultco=mysqli_query($conn,$sqlco);
$rowwww=mysqli_num_rows($resultco);


?>
    <nav>
        <div class="nav">
            <ul>
                <li id="homecare">Admin Panel</li>
                <li id="left"><a href="users.php">Users</a></li>
                <li><a href="workers.php">Workers</a></li>
                <li><a href="orderdetails.php">Orders</a></li>
                <li><a href="contactdetails.php">Contacts</a></li>
                <li id="signup"><a href="alogout.php">Logout</a></li>
                </ul>
            </div>
        </nav>

    <div class="cont">
    <div class="card" id="tu">
		<p class="size">Total Users<p>
		<p id="total-users"><?php echo $row;?></p>
	</div>

    <div class="card" id="tw">
    <p class="size">Total Workers<p>
		<p id="total-users"><?php echo $roww;?></p>
	</div>

    <div class="card" id="to">
   <p class="size">Total Orders<p>
		<p id="total-users"><?php echo $rowww;?></p>
	</div>

    <div class="card" id="co">
    <p class="size">Cancel Orders<p>
    <p id="total-users"><?php echo $rowwww;?></p>
	</div>
    </div>
    </body>
</html>