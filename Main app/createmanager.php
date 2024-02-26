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

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $nationality = $_POST['nationality'];
        // Adaugare in tabela 'manager'
    $sqlManager = "INSERT INTO `manager` (`firstname`, `lastname`, `age`, `nationality`) VALUES ('$fname', '$lname', '$age', '$nationality')";
    $resultManager = mysqli_query($data, $sqlManager);
    }
?>

<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="icon" href="image/fifa-qatar-2022-logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
              <a class="nav-link" href="createmanager.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Manager </h1>
 </div><br>

 <label> First Name: </label>
 <input type="text" name="fname" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="lname" class="form-control"> <br>

 <label> Age: </label>
 <input type="text" name="age" class="form-control"> <br>

 <label> Nationality: </label>
 <input type="text" name="nationality" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="manager.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>