<?php

$host="localhost";
$user="root";
$password="123456";
$db ="worldcup";

session_start();

$data = mysqli_connect($host, $user, $password, $db);
if($data==false)
{
    die("connection error");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fifa World Cup 2022</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="styles/style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400&display=swap" rel="stylesheet">
    <script src="js/navigation.js" defer></script>
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
        <a href="userhome.php" ><img src="image/symbolwc22.png" alt="Fifa World Cup 2022"></a>
            <h1>FIFA World Cup Qatar 2022</h1>
    <form action="cautare.php" method="GET">
            <input type="text" name="query" placeholder="Caută jucător sau echipă...">
            <button type="submit"> <i class="fa fa-search"></i> </button>
            
</form>
        
        </div>
      
        <div class="standings">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $query = $_GET["query"];
        // Cautare jucator
    $query_player = "SELECT *, players.position as pos,team.flag as flag FROM players 
    JOIN team ON players.team_id = team.team_id
    JOIN statsoverall ON players.player_id = statsoverall.player_id
    WHERE CONCAT(firstname, ' ', lastname) = '$query'";
$result_player = mysqli_query($data, $query_player);

// Cautare echipa
$query_team = "SELECT * FROM team
   JOIN players ON team.team_id = players.team_id
   JOIN manager ON manager.manager_id = team.manager_id
   WHERE teamName = '$query'";
$result_team = mysqli_query($data, $query_team);

if (mysqli_num_rows($result_player) > 0) {
// Afișează informațiile despre jucător
while ($row = mysqli_fetch_assoc($result_player)) {
echo "Nume jucător: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
echo "Număr tricou: " . $row["playershirt"] . "<br>";
echo "Varsta: " . $row["age"] . "<br>";
echo "Goluri: " . $row["goals"] . "<br>";
echo "Asisturi: " . $row["assists"] . "<br>";
echo "Pozitie: " . $row["pos"] . "<br>";
echo "Echipa nationala: " . $row["teamName"] . "<br>";
echo "Club: " . $row["club"] . "<br>";
}
 } elseif (mysqli_num_rows($result_team) > 0) {
    $firstTeam = true; // variabilă pentru a ține evidența primului rezultat

    // Afișează informațiile despre echipă
    while ($row = mysqli_fetch_assoc($result_team)) {
        if ($firstTeam) {
            echo '<img class="size" src="' . $row["flag"] . '" alt="' . $row["teamName"] . '"/><br>';
            echo "Nume echipă: " . $row["teamName"] . "<br>";
            echo "Nickname: " . $row["nickname"] . "<br>";
            echo "Ranking: " . $row["ranking"] . "<br>";
            echo "Manager: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            echo "Varsta manager: " . $row["age"] . "<br>";
            echo "Nationalitate manager: " . $row["nationality"] . "<br>";
            echo "";
            echo "Jucatori:<br>";
            $teamid = $row["team_id"]; // mutăm aici pentru a obține corect team_id pentru prima echipă
            $firstTeam = false; // după ce am afișat informațiile pentru prima echipă, setăm variabila la false
        }
    }

    // Afișează lista de jucători ai echipei
    $query_players_in_team = "SELECT * FROM players WHERE team_id = $teamid";
    $result_players_in_team = mysqli_query($data, $query_players_in_team);

    while ($player_row = mysqli_fetch_assoc($result_players_in_team)) {
        echo "" .$player_row["playershirt"]. " " . $player_row["firstname"] . " " . $player_row["lastname"] . "<br>";
    }
} else {
    echo "Numele nu a fost găsit în baza de date.";
}

        }
        ?>
       </div>
</div>      
</body>
</html>