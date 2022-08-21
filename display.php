<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>faculty</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
require "dbconnect.php";

if(isset($_POST['displaySend'])){
    echo '<table class="table my-2 m-1" id="myTable">
    <thead>
    <tr>
    <th scope="col">S. No</th>
    <th scope="col">Title</th>
    <th scope="col">Name</th>
    <th scope="col">Father Name</th>
    <th scope="col">Surname</th>
    <th scope="col">Email ID</th>
    <th scope="col">Department</th>
    <th scope="col">Address</th>
    <th scope="col">Mobile Number</th>
    <th scope="col">Actions</th>
  </tr>
  </thead>';

  $sql = "SELECT * FROM `faculty`";
  $result = mysqli_query($conn,$sql);
  $i = 1;
  while($row = mysqli_fetch_assoc($result)){
  echo "<tr>
  <th scope='row'>".$i++."</th>
  <td>".$row['Title']."</td>
  <td>".$row['Name']."</td>
  <td>".$row['father name']."</td>
  <td>".$row['Surname']."</td>
  <td>".$row['Email_ID']."</td>
  <td>".$row['Department']."</td>
  <td>".$row['Address']."</td>
  <td>".$row['MobileNumber']."</td>
  <td><button class='btn btn-sm btn-primary' style='--bs-btn-focus-shadow-rgb:none;' onclick='getDetails(".$row['No'].")'>Edit</button> <button class='btn btn-sm btn-danger' style='--bs-btn-focus-shadow-rgb:none;' onclick='DeleteUser(".$row['No'].")'>Delete</button></td>
</tr>";
  }
}
?>

</table>

<!-- custom script link 
<button class='btn btn-sm btn-primary' style='--bs-btn-focus-shadow-rgb:none;' data-bs-toggle='modal' data-bs-target='#updatexampleModal' onclick='GetDetails(".$row['No'].")'>Edit</button> <button class='btn btn-sm btn-danger' style='--bs-btn-focus-shadow-rgb:none;' onclick='DeleteUser(".$row['No'].")'>Delete</button></td>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
<!--
$(document).ready( function () {
    $('#myTable').DataTable();
} );
-->
   
</body>

</html>