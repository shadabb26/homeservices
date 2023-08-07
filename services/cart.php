<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payments</title>
    <style>
        .container {
        background-color: white;
        border: 2px solid white;
        border-radius: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-top: 130px;
        margin-left: 310px;
        margin-right: 250px;
        width: 630px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        height: 240px;

    }

    a {
        padding-left: 487px;
    }

    .item {
        margin-top: -10px;
        margin-left: 20px;
    }

    hr {
        width: 607px;
        margin-left: -10px;
    }

    #l {
        padding-left: 514px;

    }

    form {
        margin-top: -40px;
        margin-left: -150px;
    }

    h4 {
        margin-left: 2px;
    }

    small {
        padding-left: 26px;
        font-size: 12px;
    }

    #pp {
        font-size: 14px;
    }
    button{
     
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
$service=$_POST['ser'];
    
if($service=="Ac"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;199</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;199</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="ac" name="ser">
            <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="Plumber"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;109</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;109</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="plumber" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="Electrician"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;119</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;119</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="Electrician" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="apprepair"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;109</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;109</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="apprepair" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="Carpenter"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;109</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;109</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="carpenter" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="Painter"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;109</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;109</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="painter" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="maid"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;109</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;109</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="maid" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
if($service=="Driver"){
    echo'<div class="container">
        <div class="item">
            <h3>Payment Summary</h3>
            <p id="pp">Item total<a>&#8377;119</a></p>
            <hr>
            <p id="pp">Total<a id="l">&#8377;119</a></p>
            <hr>
            <h4>Payment Method</h4>
            <input type="checkbox" class="p" checked> Pay with cash after service
            <br>
            <small>Other payment methods are currently unavailable</small>
            <form action="address.php" method="post">
            <input type="hidden" value="driver" name="ser">
                <button type="submit" >Add address and Slot</button>
            </form>
        </div>
    </div>';
}
}
?>

</body>
</html>