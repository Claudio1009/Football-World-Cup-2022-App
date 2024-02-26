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

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fifa World Cup 2022</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="styles/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400&display=swap" rel="stylesheet">
    <script src="js/navigation.js" defer></script>
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
    
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="image/symbolwc22.png" alt="Fifa World Cup 2022">
            <h1>FIFA World Cup Qatar 2022</h1>
            <div class="sub-nav">
            <div class="sub-link" onclick="location.href='userhome.php';">Home</div>
            <div class="sub-link" onclick="location.href='logout.php';">Logout</div>
        </div>
        </div>
        <div class="navbar">
            <div class="link active">Marcatori</div>
            <div class="link">Cartonase</div>
            <div class="link">Saves</div>
        </div>
        <div class="tabs">
        <div class="tab standings">
        <div class="group">
            <div class="group-title">
                <h3>Marcatori</h3>
            </div><div class="row top">
                <div class="col main">Players</div>
                <div class="col ">G</div>
                <div class="col">A</div>

            </div>
            <div class="teams">
            <?php

$sql = "SELECT
t.flag AS flag,
CONCAT(p.firstname, ' ', p.lastname) AS player_name,
s.goals AS goals,
s.assists AS assists
FROM
statsoverall s
JOIN
players p ON s.player_id = p.player_id
JOIN
team t ON p.team_id = t.team_id
WHERE
(s.goals > 0 OR s.assists > 0)
ORDER BY
s.goals DESC, s.assists DESC";

$result = $data->query($sql);

$counter = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="row">';
                        echo '<div class="col main team">';
                        echo '<div class="rank">' . $counter . '</div>';
                        echo '<img class="flag" src="' . $row["flag"] . '" alt="Flag" />';
                        echo '<div class="rank">' . $row["player_name"] . '</div>';
                        echo '</div>';
                        echo '<div class="col">' . $row["goals"] . '</div>';
                        echo '<div class="col">' . $row["assists"] . '</div>';
                        echo '</div>';
                        $counter++;
                    }
                } else {
                    echo "Nu există jucători înscrisi sau care au oferit asist-uri.";
                }
                ?>
               
               
            </div>  <!-- teams-->
        </div> <!-- group -->
        
</div> <!-- standings -->
<div class="tab standings hide">
<div class="group">
            <div class="group-title">
                <h3>Cards</h3>
            </div><div class="row top">
                <div class="col main">Players</div>
                <div class="col ">YC</div>
                <div class="col">RC</div>
            </div>
            <div class="teams">
            <?php
            $sql = "SELECT
            t.flag AS flag,
            CONCAT(p.firstname, ' ', p.lastname) AS player_name,
            s.yellowcards AS yellow_cards,
            s.redcards AS red_cards
        FROM
            statsoverall s
        JOIN
            players p ON s.player_id = p.player_id
        JOIN
            team t ON p.team_id = t.team_id
        WHERE
            s.redcards > 0 OR s.yellowcards > 0
        ORDER BY
            s.redcards DESC, s.yellowcards DESC";

        $result = $data->query($sql);

            $counter = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="row">';
                    echo '<div class="col main team">';
                    echo '<div class="rank">' . $counter . '</div>';
                    echo '<img class="flag" src="' . $row["flag"] . '" alt="Flag" />';
                    echo '<div class="rank">' . $row["player_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="col">' . $row["yellow_cards"] . '</div>';
                    echo '<div class="col">' . $row["red_cards"] . '</div>';
                    echo '</div>';
                    $counter++;
                }
            } else {
                echo "Nu există jucători cu cartonașe.";
            }
            ?>
                
               
               
            </div>  <!-- teams-->
        </div> <!-- group -->
</div> <!-- standings -->
<div class="tab standings hide">
<div class="group">
            <div class="group-title">
                <h3>Saves</h3>
            </div>
            <div class="row top">
                <div class="col main">Goalkeepers</div>
                <div class="col ">S</div>
            </div>
            <div class="teams">

            <?php

$sql = "SELECT
            t.flag AS flag,
            CONCAT(p.firstname, ' ', p.lastname) AS goalkeeper_name,
            s.saves AS saves
        FROM
            statsoverall s
        JOIN
            players p ON s.player_id = p.player_id
        JOIN
            team t ON p.team_id = t.team_id
        WHERE
            s.saves > 0
            AND p.position = 'Goalkeeper'
        ORDER BY
            s.saves DESC";

$result = $data->query($sql);

            $counter = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="row">';
                    echo '<div class="col main team">';
                    echo '<div class="rank">' . $counter . '</div>';
                    echo '<img class="flag" src="' . $row["flag"] . '" alt="Flag" />';
                    echo '<div class="rank">' . $row["goalkeeper_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="col">' . $row["saves"] . '</div>';
                    echo '</div>';
                    $counter++;
                }
            } else {
                echo "Nu există portari cu saves.";
            }
            ?> 
            </div>
        </div>
</div>
</div>
</div>
        </body>

</html>