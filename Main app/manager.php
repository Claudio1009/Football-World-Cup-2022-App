<?php 
$host="localhost";
$user="root";
$password="123456";
$db ="worldcup";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manager</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="adminpage.php">CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="manager.php">Manager</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="createmanager.php">Add New Manager</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Nationality</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "select * from manager";
        $result = $data->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[manager_id]</th>
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[age]</td>
        <td>$row[nationality]</td>
        <td>
                  <a class='btn btn-success' href='update.php?id=$row[manager_id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[manager_id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>