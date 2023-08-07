<?php

include 'database.php';

$sql="DELETE FROM workers WHERE `sno` =$i";
$result=mysqli_query($conn,$sql);



?>