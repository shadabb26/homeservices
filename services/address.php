<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
</head>
<style>
input{
    border: 2px solid white;
    border-radius: 4px;
}
.address{
    background-color: whitesmoke;
    border: 2px solid whitesmoke;
    margin-left:380px;
    width: 500px;
    margin-top: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 490px;
}
label{
    font-family: 'Ubuntu', sans-serif;
    font-size: small;
    margin-left: 16px;
    color: black;
}
.input{
    margin-top: 2px;
    margin-left: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 185px;
}
.date{
    margin-top: 2px;
    margin-left: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 237px;
    margin-bottom: 8px;
}
#form{
    margin-top: 35px;
}
#s{
    margin-left: 15px;
    padding:5px;
    border: 1px solid white;
    border-radius: 4px;
    padding-right: 229px;
    padding-top: 10px;
    padding-bottom: 10px;

}
button{
        margin-left: 150px;
        width: 210px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 30px;
        padding-right: 30px;
        color: white;
        border-radius: 6px;
        background-color: rgb(153, 7, 250);
        font-weight: 500;
        border: 1px solid  rgb(153, 7, 250);
        margin-top:35px;
}
</style>
<body>
    <?php

if($_SERVER['REQUEST_METHOD']=="POST"){
$service=$_POST['ser'];
   if($service=="ac"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Ac Repair" name="skill">
        </div>
    </form>
    
</div>';
   }
 
   if($service=="plumber"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Plumber" name="skill">
        </div>
    </form>
    
</div>';
   }
   if($service=="Electrician"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
       <input type="hidden" value="Electrician" name="skill">
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
    </div>
    </form>
    
</div>';
   }
   
   if($service=="apprepair"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Applainces Repair" name="skill">
        </div>
    </form>
    
</div>';
   }
   if($service=="carpenter"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Carpenter" name="skill">
        </div>
    </form>
    
</div>';
   }
   if($service=="driver"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Carpenter" name="skill">
        </div>
    </form>
    
</div>';
   }
   if($service=="maid"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Carpenter" name="skill">
        </div>
    </form>
    
</div>';
   }
   if($service=="painter"){
    echo'<div class="address">
        <form id="form" action="order.php" method="post">
        <pre>
        <label >Name</label>
        <input type="text" class="input" name="name" required>

        <label >Building No/House </label>
        <input type="text" class="input" name="hno" required>

        <label >Street Name/Locality</label>
        <input type="text" class="input" name="sname" required>

        <label for="s">Pin Code</label>
        <input type="text" class="input" name="pin" required>

        <label for="s">Arriving Time ?</label>
        <select id="s" name="at" required>
            <option></option>
            <option>9:00-10:00 AM</option>
            <option>11:00-12:00 AM</option>
            <option>1:00-2:00 PM</option>
            <option>3:00-4:00 PM</option>
            <option>5:00-6:00 PM</option>
            <option>7:00-8:00 PM</option>
            <option>8:00-9:00 PM</option>
        </select>
        
        <label>Enter Date</label>
        <input type="date" class="date" name="dt" required>
    </pre>
    <div>
        <button type="submit" action ="order.php" id="btn1">Proceed</button>
        <input type="hidden" value="Carpenter" name="skill">
        </div>
    </form>
    
</div>';
   }
  
   
}
?>


</body>
</html>
