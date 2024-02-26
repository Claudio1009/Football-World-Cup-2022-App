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

    if (isset($_POST['submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $age = $_POST['age'];
      $position = $_POST['position'];
      $shirt = $_POST['shirt'];
      $club = $_POST['club'];
      $national = $_POST['national'];
      $gol = $_POST['gol'];
      $pasa = $_POST['pasa'];
      $red = $_POST['red'];
      $yellow = $_POST['yellow'];
  
      // Obținere team_id pentru numele naționalei
      $sqlGetTeamID = "SELECT `team_id` FROM `team` WHERE `teamName` = '$national'";
      $resultGetTeamID = mysqli_query($data, $sqlGetTeamID);
  
      // Verificare rezultat pentru obținerea team_id
      if ($resultGetTeamID) {
          $rowTeamID = mysqli_fetch_assoc($resultGetTeamID);
          $team_id = $rowTeamID['team_id'];
  
          // Adaugare in tabela 'players' cu team_id
          $sqlPlayer = "INSERT INTO `players` (`firstname`, `lastname`, `playerShirt`, `age`, `position`, `club`, `team_id`) VALUES ('$fname', '$lname', '$shirt', '$age', '$position', '$club', '$team_id')";
          $resultPlayer = mysqli_query($data, $sqlPlayer);
  
          // Verificare rezultat pentru tabela 'players'
          if ($resultPlayer) {
              // Obținere ID-ul ultimei înregistrări introduse în tabela 'players'
              $lastPlayerID = mysqli_insert_id($data);
  
              // Adaugare in tabela 'statsoverall' pentru noul jucător
              $sqlStatOverall = "INSERT INTO `statsoverall` (`player_id`, `goals`, `assists`, `redcards`, `yellowcards`) VALUES ('$lastPlayerID', '$gol', '$pasa', '$red', '$yellow')";
              $resultStatOverall = mysqli_query($data, $sqlStatOverall);
  
              // Verificare rezultat pentru tabela 'statsoverall'
              if ($resultStatOverall) {
                  echo "Jucătorul și datele statistice au fost adăugate cu succes.";
              } else {
                  echo "Eroare la adăugarea în tabelul 'statsoverall': " . mysqli_error($data);
              }
          } else {
              echo "Eroare la adăugarea în tabelul 'players': " . mysqli_error($data);
          }
      } else {
          echo "Eroare la obținerea team_id: " . mysqli_error($data);
      }
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
              <a class="nav-link active" aria-current="page" href="players.php">Players</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="createplayers.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Player </h1>
 </div><br>

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

 <label> National Team: </label>
 <input type="text" name="national" class="form-control"> <br>

 <label> Goals: </label>
 <input type="text" name="gol" class="form-control"> <br>
 
 <label> Assists: </label>
 <input type="text" name="pasa" class="form-control"> <br>

 <label> Rosu: </label>
 <input type="text" name="red" class="form-control"> <br>
 
 <label> Galben: </label>
 <input type="text" name="yellow" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="manager.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>