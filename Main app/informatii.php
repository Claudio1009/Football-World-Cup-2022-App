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
    <link rel='stylesheet' type='text/css' media='screen' href="styles/style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400&display=swap" rel="stylesheet">
    <script src="js/info.js" defer></script>
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
   
</head>
<body>
    <div class="container">
        <div class="header">
        <a href="logout.php" ><img src="image/symbolwc22.png" alt="Fifa World Cup 2022"></a>
            <h1>FIFA World Cup Qatar 2022</h1>
   
        
        </div>
      
        <div class="standings">
        <div class="cont" id="container1" onclick="handleClick('container1')">
        <h2>Cea mai agresiva nationala</h2>
        <?php
// Presupunem că $data este conexiunea ta la baza de date
$query = "
SELECT t.teamName, card_stats.total_cards
FROM team t
JOIN (
    SELECT team_id, SUM(total_cards) AS total_cards
    FROM (
        SELECT hometeam_id AS team_id, SUM(yellowCards + redCards) AS total_cards
        FROM matchstats
        GROUP BY hometeam_id
        UNION ALL
        SELECT awayteam_id AS team_id, SUM(yellowCards + redCards) AS total_cards
        FROM matchstats
        GROUP BY awayteam_id
    ) AS combined
    GROUP BY team_id
) AS card_stats ON t.team_id = card_stats.team_id
WHERE card_stats.total_cards = (
    SELECT MAX(total_cards)
    FROM (
        SELECT team_id, SUM(total_cards) AS total_cards
        FROM (
            SELECT hometeam_id AS team_id, SUM(yellowCards + redCards) AS total_cards
            FROM matchstats
            GROUP BY hometeam_id
            UNION ALL
            SELECT awayteam_id AS team_id, SUM(yellowCards + redCards) AS total_cards
            FROM matchstats
            GROUP BY awayteam_id
        ) AS combined
        GROUP BY team_id
    ) AS subquery
)
GROUP BY t.teamName, card_stats.total_cards;


";

$result = mysqli_query($data, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $mostAggressiveTeam = $row['teamName'];
    $totalCards = $row['total_cards'];
} else {
    $mostAggressiveTeam = "Informații indisponibile";
    $totalCards = "N/A";
}
echo "<p>La acest campionat mondial echipa cu cel mai putin fair-play in jocul lor a fost <strong> $mostAggressiveTeam </strong> cu un total de " . $totalCards . " cartonase.</p>";
?>
    </div>
    

    <div class="cont" id="container2" onclick="handleClick('container2')">
        <h2>Nationala cu cele mai multe goluri</h2>
        <?php
        $query = "
        SELECT t.teamName, SUM(so.goals) AS total_goals
        FROM team t
        JOIN players p ON t.team_id = p.team_id
        JOIN statsoverall so ON p.player_id = so.player_id
        GROUP BY t.teamName
        HAVING SUM(so.goals) = (
            SELECT MAX(total_goals)
            FROM (
                SELECT SUM(so.goals) AS total_goals
                FROM players p
                JOIN statsoverall so ON p.player_id = so.player_id
                GROUP BY p.team_id
            ) AS subquery
        )";
        
        $result = mysqli_query($data, $query);
        
        // Verifică dacă interogarea a returnat rezultate
        if ($result && mysqli_num_rows($result) > 0) {
            // Obține rezultatul
            $topScoringTeam = mysqli_fetch_assoc($result);
            $teamName = $topScoringTeam['teamName'];
            $totalGoals = $topScoringTeam['total_goals'];
        } else {
            $teamName = "Nu s-au găsit date";
            $totalGoals = "";
        }
      echo "  <p>Echipa <strong>$teamName</strong> a marcat <strong>$totalGoals</strong> goluri in aceasta editie de Campionat Mondial.Jumatate din golurile echipei au fost marcate de vedeta echipei Kylian Mbappe.</p>";
      ?>
    </div>
    

    <div class="cont" id="container3" onclick="handleClick('container3')">
        <h2>Top 3 marcatori ai World Cup 2022</h2>
        <?php
    // $query = "
    // SELECT p.firstname, p.lastname, so.goals
    // FROM players p
    // JOIN statsoverall so ON p.player_id = so.player_id
    // WHERE p.player_id IN (
    //     SELECT player_id
    //     FROM statsoverall
    //     ORDER BY goals DESC
    //     LIMIT 3
    // )
    // ORDER BY so.goals DESC;
    // ";
    $query = "
    SELECT p.firstname, p.lastname, so.goals
    FROM players p
    JOIN (
        SELECT player_id
        FROM statsoverall
        ORDER BY goals DESC
        LIMIT 3
    ) top_players ON p.player_id = top_players.player_id
    JOIN statsoverall so ON p.player_id = so.player_id
    ORDER BY so.goals DESC;
    ";

    $result = mysqli_query($data, $query);
    echo " <p>Ajunsi la finalul acestei competitii extraordinare cu momente de neuitat ,vrem sa vii prezentam pe cei mai buni marcatori ai competitiei.</p><br>";
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . ($row['firstname']) . " " . ($row['lastname']) . " - " . ($row['goals']) . " goluri</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nu s-au găsit date pentru cei mai buni marcatori.</p>";
    }
    ?>
    </div>

       </div>
       
</div>      
</body>
</html>

