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
    <link rel='stylesheet' type='text/css' media='screen' href="styles/style1.css">
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
           <a href="logout.php" ><img src="image/symbolwc22.png" alt="Fifa World Cup 2022"></a>
            <h1>FIFA World Cup Qatar 2022</h1>
            <form action="cautare.php" method="GET">
    <input type="text" name="query" placeholder="Caută jucător sau echipă...">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>
        </div>
        
        <div class="navbar">
            <div class="link active">Meciuri</div>
            <div class="link">Rezultate</div>
            <div class="link">Clasamente</div>
        </div>
        <div class="tabs">

        <div class="tab today-matches">
    <div class="matches">
        <div class="stage">
            <h3>Group Stage - Today</h3>
        </div>
        
            <?php
            $today = date("2022-11-22");
            $sql = "SELECT m.*, t_home.teamName AS home_team_name, t_home.flag AS home_team_flag,
                           t_away.teamName AS away_team_name, t_away.flag AS away_team_flag
                    FROM matchstats m
                    LEFT JOIN team t_home ON m.hometeam_id = t_home.team_id
                    LEFT JOIN team t_away ON m.awayteam_id = t_away.team_id
                    WHERE DATE(m.datamatch) = '$today'";

            $result = $data->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="container">';
                    echo '<div class="match-container">';
                    echo '<div class="group">';
                    echo '<h4>Group ' . $row["groupID"] . '</h4>';
                    echo '</div>';
                    echo '<div class="match">';
                    echo '<div class="teams">';
                    echo '<div class="team home-team">';
                    echo '<div class="info">';
                    echo '<img class="flag" src="' . $row["home_team_flag"] . '" alt="' . $row["home_team_name"] . '"/>';
                    echo '<div class="name">' . $row["home_team_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="score">' . $row["goalsFor"] . '</div>';
                    echo '</div>';
                    echo '<div class="team away-team">';
                    echo '<div class="info">';
                    echo '<img class="flag" src="' . $row["away_team_flag"] . '" alt="' . $row["away_team_name"] . '"/>';
                    echo '<div class="name">' . $row["away_team_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="score">' . $row["goalsAgainst"] . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="match-state">';
                    $matchDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $row["datamatch"] . ' ' . $row["hourmatch"]);
$manualDateTime = DateTime::createFromFormat('Y-m-d H:i:s', "2022-11-22 18:00:00");

echo '<div class="state">' . ($matchDateTime < $manualDateTime ? "Finished" : "To be played") . '</div>';

                    echo '<div class="date">' . date("M d", strtotime($row["datamatch"])) . '</div>';
                    echo '<div class="time">' . date("H:i", strtotime($row["hourmatch"])) . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Nu sunt programate meciuri pentru astăzi.";
            }

            ?>
        
    </div>
</div>

           
    <div class="tab all-matches hide">
    <div class="matches">
        <div class="stage">
            <h3>Group Stage - Results</h3>
        </div>
       
            <?php
            $today = date("Y-m-d H:i:s");
            $sql = "SELECT m.*, t_home.teamName AS home_team_name, t_home.flag AS home_team_flag,
                           t_away.teamName AS away_team_name, t_away.flag AS away_team_flag
                    FROM matchstats m
                    LEFT JOIN team t_home ON m.hometeam_id = t_home.team_id
                    LEFT JOIN team t_away ON m.awayteam_id = t_away.team_id
                    WHERE (m.datamatch < '$today' OR (m.datamatch = '$today' AND m.hourmatch < CURRENT_TIME()))
                          AND m.round = 'Group Stage'
                    ORDER BY m.datamatch DESC, m.hourmatch DESC";

            $result = $data->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="container">';
                    echo '<div class="match-container">';
                    echo '<div class="group">';
                    echo '<h4>Group ' . $row["groupID"] . '</h4>';
                    echo '</div>';
                    echo '<div class="match">';
                    echo '<div class="teams">';
                    echo '<div class="team home-team">';
                    echo '<div class="info">';
                    echo '<img class="flag" src="' . $row["home_team_flag"] . '" alt="' . $row["home_team_name"] . '"/>';
                    echo '<div class="name">' . $row["home_team_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="score">' . $row["goalsFor"] . '</div>';
                    echo '</div>';
                    echo '<div class="team away-team">';
                    echo '<div class="info">';
                    echo '<img class="flag" src="' . $row["away_team_flag"] . '" alt="' . $row["away_team_name"] . '"/>';
                    echo '<div class="name">' . $row["away_team_name"] . '</div>';
                    echo '</div>';
                    echo '<div class="score">' . $row["goalsAgainst"] . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="match-state">';
                    echo '<div class="state">' . ($row["datamatch"] . ' ' . $row["hourmatch"] < $today ? "Finished" : "To be played") . '</div>';
                    echo '<div class="date">' . date("M d", strtotime($row["datamatch"])) . '</div>';
                    echo '<div class="time">' . date("H:i", strtotime($row["hourmatch"])) . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Nu s-au jucat meciuri până acum.";
            }
            ?>
        
    </div>
</div>


            <div class="tab standings hide">
            <div class="sub-nav">
            <div class="sub-link" onclick="location.href='marcatori.php';">Marcatori</div>
            <div class="sub-link" onclick="location.href='bracket.php';">Bracket</div>
        </div>
                <?php
                $grupe = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

                foreach ($grupe as $grupa) {
                    // Interogare pentru a obține informații despre echipe în funcție de groupLetter și a aduna statistici din meciuri

                $sql="SELECT t.team_id, t.teamName,t.flag,t.position, 
    (SELECT COUNT(DISTINCT m.match_id) FROM matchstats m WHERE m.round = 'Group Stage' AND (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id)) AS mp,
    (SELECT COUNT(*) FROM matchstats m WHERE m.winningteam = t.teamName AND m.round = 'Group Stage' AND (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id)) AS w,
    (SELECT COUNT(*) FROM matchstats m WHERE m.winningteam = 'Draw' AND m.round = 'Group Stage' AND (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id)) AS d,
    (SELECT COUNT(*) FROM matchstats m WHERE m.winningteam != 'Draw' AND m.round = 'Group Stage' AND m.winningteam != t.teamName  AND (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id)) AS l,
    (SELECT SUM(CASE WHEN m.hometeam_id = t.team_id THEN m.goalsFor ELSE m.goalsAgainst END) FROM matchstats m WHERE  (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id) AND m.round = 'Group Stage') AS gf,
    (SELECT SUM(CASE WHEN m.hometeam_id = t.team_id THEN m.goalsAgainst ELSE m.goalsFor END) FROM matchstats m WHERE (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id) AND m.round = 'Group Stage') AS ga,
    (SELECT SUM(CASE WHEN m.winningteam = t.teamName THEN 3 WHEN m.winningteam = 'Draw' THEN 1 ELSE 0 END) FROM matchstats m WHERE (m.hometeam_id = t.team_id OR m.awayteam_id = t.team_id) AND m.round = 'Group Stage') AS pts
FROM 
    team t
LEFT JOIN matchstats m ON t.team_id = m.hometeam_id OR t.team_id = m.awayteam_id
WHERE 
    t.groupLetter = '$grupa'
GROUP BY 
    t.team_id
ORDER BY 
    pts DESC, gf-ga DESC, gf DESC";

                    $result = $data->query($sql);

                    echo '<div class="group">';
                    echo '<div class="group-title">';
                    echo '<h3>Group ' . $grupa . '</h3>';
                    echo '</div>';
                    echo '<div class="row top">';
                    echo '<div class="col main">Team</div>';
                    echo '<div class="col ">MP</div>';
                    echo '<div class="col">W</div>';
                    echo '<div class="col">D</div>';
                    echo '<div class="col">L</div>';
                    echo '<div class="col">GF</div>';
                    echo '<div class="col">GA</div>';
                    echo '<div class="col">GD</div>';
                    echo '<div class="col">Pts</div>';
                    echo '</div>';
                    echo '<div class="teams">';
                    if ($result->num_rows > 0) {
                        $counter = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="row">';
                            echo '<div class="col main team">';
                            echo '<div class="rank">' . $row["position"] . '</div>';
                            echo '<img class="flag" src="' . $row["flag"] . '" alt="' . $row["teamName"] . '"/>';
                            echo '<div class="rank">' . $row["teamName"] . '</div>';
                            echo '</div>';
                            echo '<div class="col">' . $row["mp"] . '</div>';
                            echo '<div class="col">' . $row["w"] . '</div>';
                            echo '<div class="col">' . $row["d"] . '</div>';
                            echo '<div class="col">' . $row["l"] . '</div>';
                            echo '<div class="col">' . $row["gf"] . '</div>';
                            echo '<div class="col">' . $row["ga"] . '</div>';
                            echo '<div class="col">' . ($row["gf"] - $row["ga"]) . '</div>';
                            echo '<div class="col">' . $row["pts"] . '</div>';
                            echo '</div>';

                            if ($counter != $row["position"]) {
                                $sqlUpdate = "UPDATE team SET position = $counter WHERE team_id = " . $row["team_id"];
                                $data->query($sqlUpdate);
                            }

                            $counter++;
                        }
                    } else {
                        echo "Nu s-au găsit echipe pentru grupa $grupa.";
                    }
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>'; // încheiere tab standings
                ?>
            </div>
        </div>
    </div>
</body>

</html>