<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
    <title>Workers</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $id=$_POST['id'];
  $pass=$_POST['pass'];
  $login=false;

  if($id=="shadab" && $pass==26){
    $login=true;
    echo"<a href='data.php'>users</a>";
    echo"<a href='data.php'>workers</a>";
   
      
    }
    else{
        echo"Invalid Credentials";
    }
   }
    
  ?>

<?php

echo '<table class="table" id="myTable">
<thead>
  <tr>
    <th scope="col">Sno</th>
    <th scope="col">Name</th>
    <th scope="col">Contact No</th>
    <th scope="col">Adhaar No</th>
    <th scope="col">Age</th>
    <th scope="col">Skill</th>
    <th scope="col">Date</th>
    <th scope="col">Status</th>
  </tr>
</thead>';
?>
<tbody>
<?php
include 'database.php';
$sql="SELECT * FROM workers";
$result=mysqli_query($conn,$sql);
$i=1;
while($row=mysqli_fetch_assoc($result)){
   echo"<tr>
      <td >$i</td>
      <td>".$row['name']."</td>
      <td>".$row['cno']."</td>
      <td>".$row['adno']."</td>
      <td>".$row['age']."</td>
      <td>".$row['skill']."</td>
      <td>".$row['dt']."</td>
      <td>".$row['status']."</td>
    </tr>";
    $i++;
}
?>
</tbody>
</table>

</body>
</html>




