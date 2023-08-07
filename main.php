<?php
session_start();
if(!isset($_SESSION['Loggedin']) || $_SESSION['Loggedin']!=true){
    header("location:login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome -<?php echo $_SESSION['email']; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="home.css">
</head>
<style>
   #left{
    margin-left: 509px;
   }

    .flex {
        display: flex;
    }
    .flex2 {
        display: flex;
        margin-top: 22px;
    }
    

    .card {
        margin-left: 21px;
        background-color: whitesmoke;
    }

    .card-img-top {
        height: 160px;
        width: 287px;
    }
    #homecare{
        font-size: 16px;
        font-family: 'Cedarville Cursive',cursive;
    
    }
    .c{
        margin: 20px;
    }
    footer{
        margin-top: 30px;
        background-color: whitesmoke;
        text-align: center;
    }
    #copywrite{
        padding-top: 20px;
        padding-bottom: 20px;
    }
   
</style>

<body>
    <header>
        <nav>
            <div class="nav">
                <ul>
                    <li id="homecare">HomeCare</li>
                    <li id="left"><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="view.php">My Orders</a></li>
                    <li id="work"><a href="work.html">Work With Us</a></li>
                    <li id="login"><a href="logout.php">Logout</a></li>
                    </ul>
            </div>
        </nav>
    </header>
    <div class="c">
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">HomeCare !</h4>
            <p>Welcome to our website! We are here to provide you with top-notch home services that you can rely on.
                Whether you need a cleaning service, an electrician, a plumber, a carpenter, Maid ,Painter,Driver or any
                other type of worker, we have got you covered.<br><br>

                We understand that your home is your sanctuary, and you want it to be clean and well-maintained at all
                times. That's why we have carefully vetted and selected only the best professionals to provide our
                services. Our team is made up of skilled workers who have years of experience in their respective
                fields, and are dedicated to delivering exceptional service to our customers.<br><br>

                Our services are designed to make your life easier. You no longer have to spend hours searching for a
                reliable professional, or worry about whether they will show up on time. We take care of all the
                details, from scheduling to billing, so that you can focus on what really matters – enjoying your clean
                and well-maintained home.</p>
            <hr>
            <p class="mb-0">Team - HomeCare ! </p>
        </div>
    </div>
    <div class="flex">
        <div class="card" style="width: 18rem;">
            <img src="photos/acc.jpeg" id=size class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ac Repair</h5>
                <p class="card-text">Stay Cool and Comfortable: Fast and Reliable AC Repair Services Available Now!</p>
                <form action="services/service.php" method="post">
                    <input type="hidden" value="Ac" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img src="photos/plum.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Plumber</h5>
                <p class="card-text">Expert Plumber to the Rescue: Fast and Reliable Plumbing Services Available Now!
                </p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="plumber" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img src="photos/e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Electrician</h5>
                <p class="card-text">Experience the Power of Safe and Reliable Electrical Services with Our Expert
                    Electricians!</p>
                    <form action="services/service.php" method="post">
                    <input type="hidden" value="Electrician" name="skill">
                    <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                    </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="photos/ap.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Applainces Repair</h5>
                <p class="card-text">Don't Let Your Broken Appliances Spoil Your Day We are Here to Fix Them Fast!</p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="apprepair" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>
    </div>

    <div class="flex2">
        <div class="card" style="width: 18rem;">
            <img src="photos/carp.jpg" id=size class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Carpenter</h5>
                <p class="card-text">Transform Your Space with Custom Carpentry - Personalized and Repairs!</p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="carpenter" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img src="photos/painter.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Painter</h5>
                <p class="card-text">Your Space with Stunning Colors: Professional Painting Services for Your Home or Business!
                </p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="painter" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img src="photos/maid.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Maid</h5>
                <p class="card-text">Experience Spotless Home: Trustworthy Maids Providing Top-Quality Cleaning Services!</p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="maid" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="photos/drive.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Driver</h5>
                <p class="card-text">Professional Driver Services for All Your Personal and Transportation Needs!</p>
                <form action="services/service.php" method="post">
                <input type="hidden" value="driver" name="skill">
                <button  class="btn btn-primary"  target="_self"> Book Now !</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p id="copywrite">&copy; 2023 HomeCare. All rights reserved.</p>
     </footer>
     
</body>

</html>