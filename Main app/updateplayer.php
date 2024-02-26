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
  $position="";
  $shirt="";
  $club="";
  $gol="";
  $pasa="";
  $red="";
  $yellow="";
  

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:adminpage.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from players p JOIN statsoverall s ON p.player_id = s.player_id where p.player_id=$id";

    $result = $data->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:adminpage.php");
      exit;
    }
    $fname=$row["firstname"];
    $lname=$row["lastname"];
    $age=$row["age"];
    $position=$row["position"];
    $shirt=$row["playershirt"];
    $club=$row["club"];
    $gol=$row["goals"];
    $pasa=$row["assists"];
    $red=$row["redcards"];
    $yellow=$row["yellowcards"];

  }
  else {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $position = $_POST["position"];
    $shirt = $_POST["shirt"];
    $club = $_POST["club"];
    $gol = intval($_POST["gol"]);
    $pasa = intval($_POST["pasa"]);
    $red = intval($_POST["red"]);
    $yellow = intval($_POST["yellow"]);

    // UPDATE în tabela 'players'
    $sqlPlayers = "UPDATE players SET firstname='$fname', lastname='$lname', age='$age', position ='$position', playershirt='$shirt', club='$club' WHERE player_id='$id'";
    $resultPlayers = $data->query($sqlPlayers);

    // UPDATE în tabela 'statsoverall'
    $sqlStatOverall = "UPDATE statsoverall SET goals='$gol', assists='$pasa', redcards='$red', yellowcards='$yellow' WHERE player_id='$id'";
    $resultStatOverall = $data->query($sqlStatOverall);

    // Verificare rezultate
    if ($resultPlayers && $resultStatOverall) {
        $success = "Datele au fost actualizate cu succes în ambele tabele.";
    } else {
        $error = "Eroare la actualizarea datelor: " . mysqli_error($data);
    }
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="image/fifa-qatar-2022-logo.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="adminpage.php">CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="manager.php">Player</a>
            </li>
         
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Player </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> First Name: </label>
 <input type="text" name="fname" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="lname" class="form-control"> <br>

 <label> Age: </label>
 <input type="text" name="age" class="form-control"> <br>

 <label> Position: </label>
 <input type="text" name="position" class="form-control"> <br>

 <label> Shirt Number: </label>
 <input type="text" name="shirt" class="form-control"> <br>

 <label> Club: </label>
 <input type="text" name="club" class="form-control"> <br>

 <label> Goals: </label>
 <input type="text" name="gol" class="form-control"> <br>
 
 <label> Assists: </label>
 <input type="text" name="pasa" class="form-control"> <br>

 <label> Rosu: </label>
 <input type="text" name="red" class="form-control"> <br>
 
 <label> Galben: </label>
 <input type="text" name="yellow" class="form-control"> <br>



 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="adminpage.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>