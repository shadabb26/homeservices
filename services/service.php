<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
   <style>
   
    body {
        font-family: 'Ubuntu', sans-serif;
    }

    #acimg {
        margin-top: -8px;
        border-radius: 8px;
        width: 450px;
        height: 280px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .container2 {
        margin-left: 760px;
        margin-top: -300px;

    }

    h2 {
        font-size: 35px;
        font-weight: bolder;

    }

    #hr2 {
        margin-top: 25px;
        border: 1px solid rgb(141, 139, 139);
        width: 1160px;
        margin-left: 50px;
    }

    .container1 {
        margin-top: 40px;
        margin-left: 70px;
        margin-right: 500px;
    }

    h5 {
        margin-top: -10px;
    }

    #hr {
        border: 0.5px solid black;
        margin-left: -18px;
        margin-top: 35px;
        width: 650px;
    }

    #book {
        margin-left: 540px;
        width: 200px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        color: white;
        border-radius: 7px;
        background-color: rgb(153, 7, 250);
        font-weight: 500;
        border: 2px solid rgb(153, 7, 250);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    </style>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

$service=$_POST['skill'];


if($service=="Ac"){
    echo '<div class="container1">
    <h3>Ac Repairing</h3>
    <p>Services & Repairing</p>
    <p>Starts at &#8377;199</p>
    <hr id="hr">
    <p>What we provide?<br><br>
        1.Installation/Updatation <br>
        2.Cleaning/Replacing air filters<br>
        3.Checking refrigerant levels<br>
        4.Inspecting and tightening electrical connections<br>
        5.Checking for any leak</p>
</div>
<div class="container2">
    <img src="../photos/acc.jpeg" id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post" id="leftt">
    <input type="submit" value="Proceed" id="book">
    <input type="hidden" value="Ac" name="ser">
</form>
';
}


if($service=="plumber"){
   echo' <div class="container1">
   <h3>Plumber</h3>
   <p>Services & Repairing</p>
   <p>Starts at &#8377;99</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Tap Reapair<br>
   2.Waste Pipe Leakeage<br>
   3.Flush Tank Repair<br>
   4.Tap Replacement<br>
   5.Wash Basin Installation/Blockage Removal</p>

   </div>
<div class="container2">
 <img src="../photos/plum.jpg" id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post">
<input type="hidden" value="Plumber" name="ser">
<input type="submit" value="Proceed"  id="book">
</form>
</div>';
}


if($service=="Electrician"){
   echo'<div class="container1">
   <h3>Electrician</h3>
   <p>Services & Repairing</p>
   <p>Starts at &#8377;149 - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Switch Replacement<br>
   2.Socket Replacement<br>
   3.SwitchBoard Repair<br>
   4.Fan Reapair<br>
   5.TubeLight Installation/Repair</p>
   </div>
<div class="container2">
 <img src="../photos/e.jpg"  id="acimg">
</div>
<hr id="hr2">

<form action="cart.php" method="post">
   <input type="hidden" value="Electrician" name="ser">
<input type="submit" value="Proceed"  id="book">
</form>

';
}


if($service=="apprepair"){
   echo' <div class="container1">
   <h3>Applainces Repair</h3>
   <p>Services & Repairing</p>
   <p>Starts at &#8377;109 - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Geysar Installation/Repair<br>
   2.Washing Machine Installation/Repair<br>
   3.Refrigerator Repair<br>
   4.Microwave Repair<br>
   4.Every Other small Applainces
   </div>
<div class="container2">
 <img src="../photos/ap.jpg" id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post">
<input type="hidden" value="apprepair" name="ser">
<input type="submit" value="Proceed"  id="book">
</form>
';
}


if($service=="carpenter"){
   echo'  <div class="container1">
   <h3>Carpenter</h3>
   <p>Services & Repairing</p>
   <p>Starts at &#8377;199 - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Drill & Hang<br>
   2.Major Door Repair<br>
   3.Curtain Rod Installation<br>
   4.Bed Support Repair<br>
   <br>
 
   </div>
<div class="container2">
 <img src="../photos/carp.jpg"  id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post">
   <input type="hidden" value="Carpenter" name="ser">
<input type="submit" value="Proceed"  id="book">
</form>';
}


if($service=="painter"){
   echo' <div class="container1">
   <h3>Painter</h3>
   <p>Painting & Waterproofing</p>
   <p>Starts at &#8377;299 - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Interior Painting<br>
   2.Exterior Painting<br>
   3.Waterproofing<br>
   4.Door & Window Painting<br>
   <br>
   </div>
<div class="container2">
 <img src="../photos/painter.jpg"  id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post">
   <input type="hidden" value="Painter" name="ser">
   <input type="submit" value="Proceed"  id="book">
   </form>

';
}


if($service=="maid"){
   echo'  <div class="container1">
   <h3>Maid</h3>
   <p>Cleaning and Cooking</p>
   <p>Starts at &#8377;99 Per Day - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Day-to-Day Cleaning for Homes<br>
   2.Day-to-Day Cleaning for Offices<br>
   3.For One Day Events<br>
   4.Cooking<br>
   <br>
   </div>
<div class="container2">
 <img src="../photos/maid.jpg" id="acimg">
</div>
<hr id="hr2">
<form action="cart.php" method="post">
   <input type="hidden" value="maid" name="ser">
<input type="submit" value="Proceed"  id="book">
</form>
';
}


if($service=="driver"){
   echo'  <div class="container1">
   <h3>Driver</h3>
   <p>Driver for Days,Week,Month</p>
   <p>Starts at &#8377;499 Per Day - At Your Door in next 60-90min</p>
   <hr id="hr">     
   <p>What we provide?<br><br>
   1.Driver for your Business<br>
   2.Driver for your Personal Cars<br>
   <br>
   <br>
   <br>
   </div>
<div class="container2">
 <img src="../photos/drive.jpg"  id="acimg">
</div>
<hr id=hr2>
<form action="cart.php" method="post">
   <input type="hidden" value="Driver" name="ser">
   <input type="submit" value="Proceed"  id="book">
   </form>';
}
}
?>
</body>
</html>