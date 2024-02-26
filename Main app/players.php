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
    <script src="js/player.js" defer></script>
    <title>Players</title>
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
              <a type="button" class="btn btn-primary nav-link active" href="createplayers.php">Add New Players</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
        <input onkeyup="search_player()" id="searchbar" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       
      </form>
        </div>
      </div>
    </nav>
   
    <div class="container my-4">
    <table id="playersTable" class="table">
    <thead>
      <tr>
        <!-- <th>ID</th> <th>$row[player_id]</th>-->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Position</th>
        <th>ShirtNumber</th>
        <th>Club</th>
        <th>teamName</th>
        <th>G/A</th>
       <th>RC/YC</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT players.*,players.position as pos, team.teamName, statsoverall.gol_assists,statsoverall.cards
        FROM players
        INNER JOIN team ON team.team_id = players.team_id
        LEFT JOIN (
            SELECT player_id, SUM(goals + assists) AS gol_assists,SUM(redcards + yellowcards) as cards
            FROM statsoverall
            GROUP BY player_id
        ) AS statsoverall ON players.player_id = statsoverall.player_id";
        $result = $data->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[age]</td>
        <td>$row[pos]</td>
        <td>$row[playershirt]</td>
        <td>$row[club]</td>
        <td>$row[teamName]</td>
        <td>$row[gol_assists]</td>
        <td>$row[cards]</td>
        <td>
                  <a class='btn btn-success' href='updateplayer.php?id=$row[player_id]'>Edit</a>
                  <a class='btn btn-danger' href='deleteplayer.php?id=$row[player_id]'>Delete</a>
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