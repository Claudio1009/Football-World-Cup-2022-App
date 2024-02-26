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

  
  $id="";
  $fname="";
  $lname="";
  $age="";
  $nationality="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:adminpage.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from manager where manager_id=$id";
    $result = $data->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:adminpage.php");
      exit;
    }
    $fname=$row["firstname"];
    $lname=$row["lastname"];
    $age=$row["age"];
    $nationality=$row["nationality"];

  }
  else{
    $id = $_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $nationality=$_POST["nationality"];

    $sql = "update manager set firstname='$fname', lastname='$lname' , age='$age', nationality='$nationality' where manager_id='$id'";
    $result = $data->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="icon" href="image/fifa-qatar-2022-logo.png">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="manager.php">Manager</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> First Name: </label>
 <input type="text" name="fname" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="lname" class="form-control"> <br>

 <label> Age: </label>
 <input type="text" name="age" class="form-control"> <br>

 <label> Nationality: </label>
 <input type="text" name="nationality" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="adminpage.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>