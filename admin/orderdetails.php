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
  <style>
    a{
      text-decoration: none;
    }
    </style>
  
    <title>User</title>
</head>
<body>

<?php
echo '<table class="table" id="myTable">
<thead>
  <tr>
    <th scope="col">Sno</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">House No</th>
    <th scope="col">Street</th>
    <th scope="col">Pincode</th>
    <th scope="col">Time</th>
    <th scope="col">Date</th>
    <th scope="col">Service</th>
    <th scope="col">Status</th>
  </tr>
</thead>';
?>
<tbody>
<?php
include 'database.php';
$sql="SELECT * FROM orders";
$result=mysqli_query($conn,$sql);
$i=1;
while($row=mysqli_fetch_assoc($result)){
echo"<tr>
      <th >$i</th>
      <td>".$row['name']."</td>
      <td>".$row['emails']."</td>
      <td>".$row['address']."</td>
      <td>".$row['street']."</td>
      <td>".$row['pin']."</td>
      <td>".$row['time']."</td>
      <td>".$row['dt']."</td>
      <td>".$row['skill']."</td>
      <td>".$row['status']."</td>
    </tr>";
    $i++;
}

?>
</tbody>
</table>

</body>
</html>




