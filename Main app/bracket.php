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
    <link rel="stylesheet" type="text/css" href="styles/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400&display=swap" rel="stylesheet">
    <script src="js/navigation.js" defer></script>
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
    <script src="js/navigation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="styles/style2.css">
  
   
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
            <div class="link active">Meciuri</div>
            <div class="link">Rezultate</div>
            <div class="link">Clasamente</div>
        </div>  
        <div class="tabs">
        <div class="tab today-matches">
    <div class="matches">
        <div class="stage">
        <h3>Final - Today</h3>
        </div>
        
            <?php
            $today = date("2022-12-18");
            $sql = "SELECT m.*, t_home.teamName AS home_team_name, t_home.flag AS home_team_flag,
                           t_away.teamName AS away_team_name, t_away.flag AS away_team_flag
                    FROM matchstats m
                    LEFT JOIN team t_home ON m.hometeam_id = t_home.team_id
                    LEFT JOIN team t_away ON m.awayteam_id = t_away.team_id
                    WHERE DATE(m.datamatch) = '$today' AND m.round <> 'Group Stage'";

            $result = $data->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="container">';
                    echo '<div class="match-container">';
                    echo '<div class="group">';
                    echo '<h4> ' . $row["round"] . '</h4>';
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
            <h3>Bracket - Results</h3>
        </div>
       
            <?php
            $today = date("Y-m-d H:i:s");
            $sql = "SELECT m.*, t_home.teamName AS home_team_name, t_home.flag AS home_team_flag,
                           t_away.teamName AS away_team_name, t_away.flag AS away_team_flag
                    FROM matchstats m
                    LEFT JOIN team t_home ON m.hometeam_id = t_home.team_id
                    LEFT JOIN team t_away ON m.awayteam_id = t_away.team_id
                    WHERE (m.datamatch < '$today' OR (m.datamatch = '$today' AND m.hourmatch < CURRENT_TIME()))
                          AND m.round <> 'Group Stage'
                    ORDER BY m.datamatch DESC, m.hourmatch DESC";

            $result = $data->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="container">';
                    echo '<div class="match-container">';
                    echo '<div class="group">';
                    echo '<h4> ' . $row["round"] . '</h4>';
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
<div class="container1">
 <div class="tournament-bracket tournament-bracket--rounded">
  <div class="tournament-bracket__round tournament-bracket__round--optimi">
  <h3 class="tournament-bracket__round-title">Round of 16</h3>
  <ul class="tournament-bracket__list">
    <!-- Meci 1 -->
    <?php
    // Exemplu de interogare SQL
$sql = "SELECT
    ms.match_id AS match_id,
    ms.datamatch AS match_date,
    t1.acronim AS team1_acronim,
    t1.flag AS team1_flag,
    ms.goalsFor AS team1_goals,
    t2.acronim AS team2_acronim,
    t2.flag AS team2_flag,
    ms.goalsAgainst AS team2_goals
FROM
    matchstats ms
JOIN
    team t1 ON ms.hometeam_id = t1.team_id
JOIN
    team t2 ON ms.awayteam_id = t2.team_id
WHERE
    ms.round = 'Round of 16'
ORDER BY
(DAY(ms.datamatch) % 2) DESC, ms.datamatch ASC
    LIMIT 8;";

// Execută interogarea și obține rezultatele
$result = mysqli_query($data, $sql);

// Verifică dacă există rezultate
if ($result) {
// Iterează prin fiecare rând de rezultate
while ($row = mysqli_fetch_assoc($result)) {
    // Extrage informațiile necesare și afișează HTML-ul
    $matchDate = date('d F Y', strtotime($row['match_date']));
    echo "
        <li class='tournament-bracket__item'>
            <div class='tournament-bracket__match' tabindex='0'>
                <table class='tournament-bracket__table'>
                    <caption class='tournament-bracket__caption'>
                        <time datetime='$matchDate'>$matchDate</time>
                    </caption>
                    <thead class='sr-only'>
                        <tr>
                            <th>Country</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody class='tournament-bracket__content'>
                        <tr class='tournament-bracket__team tournament-bracket__team--winner'>
                            <td class='tournament-bracket__country'>
                                <abbr class='tournament-bracket__code' title='{$row['team1_acronim']}'>{$row['team1_acronim']}</abbr>
                                <span class='tournament-bracket__flag flag-icon {$row['team1_flag']}' aria-label='Flag'><img class='flag' src=" .$row["team1_flag"] . "></span>
                            </td>
                            <td class='tournament-bracket__score'>
                                <span class='tournament-bracket__number'>{$row['team1_goals']}</span>
                            </td>
                        </tr>
                        <tr class='tournament-bracket__team'>
                            <td class='tournament-bracket__country'>
                                <abbr class='tournament-bracket__code' title='{$row['team2_acronim']}'>{$row['team2_acronim']}</abbr>
                                <span class='tournament-bracket__flag flag-icon {$row['team2_flag']}' aria-label='Flag'><img class='flag' src=" .$row["team2_flag"] . "></span>
                            </td>
                            <td class='tournament-bracket__score'>
                                <span class='tournament-bracket__number'>{$row['team2_goals']}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>";
}

// Eliberează resursele rezultatului
mysqli_free_result($result);
} else {
// Tratează eroarea dacă există probleme cu interogarea
echo "Error: " . mysqli_error($data);
}

?> 
  </ul>
</div>
   <!-- clasa -->                                                
    <div class="tournament-bracket__round tournament-bracket__round--quarterfinals">
      <h3 class="tournament-bracket__round-title">Quarterfinals</h3>
      <ul class="tournament-bracket__list">
<?php        
$sql = "SELECT
        ms.match_id AS match_id,
        ms.datamatch AS match_date,
        t1.acronim AS team1_acronim,
        t1.flag AS team1_flag,
        ms.goalsFor AS team1_goals,
        t2.acronim AS team2_acronim,
        t2.flag AS team2_flag,
        ms.goalsAgainst AS team2_goals
    FROM
        matchstats ms
    JOIN
        team t1 ON ms.hometeam_id = t1.team_id
    JOIN
        team t2 ON ms.awayteam_id = t2.team_id
    WHERE
        ms.round = 'Quarterfinals'
    ORDER BY
        (DAY(ms.datamatch) % 2) DESC, ms.datamatch ASC
    LIMIT 8;";

$result = mysqli_query($data, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="tournament-bracket__item">';
        echo '<div class="tournament-bracket__match" tabindex="0">';
        echo '<table class="tournament-bracket__table">';
        echo '<caption class="tournament-bracket__caption">';
        echo '<time datetime="' . $row['match_date'] . '">' . date('d F Y', strtotime($row['match_date'])) . '</time>';
        echo '</caption>';
        echo '<thead class="sr-only">';
        echo '<tr>';
        echo '<th>Country</th>';
        echo '<th>Score</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody class="tournament-bracket__content">';
        echo '<tr class="tournament-bracket__team tournament-bracket__team--winner">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team1_acronim'] . '">' . $row['team1_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team1_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team1_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team1_goals'] . '</span>';
        echo '</td>';
        echo '</tr>';
        echo '<tr class="tournament-bracket__team">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team2_acronim'] . '">' . $row['team2_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team2_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team2_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team2_goals'] . '</span>';
        echo '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($data);
}

?>
</ul>
</div>
    <div class="tournament-bracket__round tournament-bracket__round--semifinals">
      <h3 class="tournament-bracket__round-title">Semifinals</h3>
      <ul class="tournament-bracket__list">
        
      <?php
      $sql = "SELECT
          ms.match_id AS match_id,
          ms.datamatch AS match_date,
          t1.acronim AS team1_acronim,
          t1.flag AS team1_flag,
          ms.goalsFor AS team1_goals,
          t2.acronim AS team2_acronim,
          t2.flag AS team2_flag,
          ms.goalsAgainst AS team2_goals
      FROM
          matchstats ms
      JOIN
          team t1 ON ms.hometeam_id = t1.team_id
      JOIN
          team t2 ON ms.awayteam_id = t2.team_id
      WHERE
          ms.round = 'Semifinals'
      ORDER BY
          (DAY(ms.datamatch) % 2) DESC, ms.datamatch ASC
      LIMIT 4;";
  
  $result = mysqli_query($data, $sql);
  
  if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<li class="tournament-bracket__item">';
          echo '<div class="tournament-bracket__match" tabindex="0">';
          echo '<table class="tournament-bracket__table">';
          echo '<caption class="tournament-bracket__caption">';
          echo '<time datetime="' . $row['match_date'] . '">' . date('d F Y', strtotime($row['match_date'])) . '</time>';
          echo '</caption>';
          echo '<thead class="sr-only">';
          echo '<tr>';
          echo '<th>Country</th>';
          echo '<th>Score</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody class="tournament-bracket__content">';
          echo '<tr class="tournament-bracket__team">';
          echo '<td class="tournament-bracket__country">';
          echo '<abbr class="tournament-bracket__code" title="' . $row['team1_acronim'] . '">' . $row['team1_acronim'] . '</abbr>';
          echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team1_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team1_flag"] . '"></span>';
          echo '</td>';
          echo '<td class="tournament-bracket__score">';
          echo '<span class="tournament-bracket__number">' . $row['team1_goals'] . '</span>';
          echo '</td>';
          echo '</tr>';
          echo '<tr class="tournament-bracket__team tournament-bracket__team--winner">';
          echo '<td class="tournament-bracket__country">';
          echo '<abbr class="tournament-bracket__code" title="' . $row['team2_acronim'] . '">' . $row['team2_acronim'] . '</abbr>';
          echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team2_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team2_flag"] . '"></span>';
          echo '</td>';
          echo '<td class="tournament-bracket__score">';
          echo '<span class="tournament-bracket__number">' . $row['team2_goals'] . '</span>';
          echo '</td>';
          echo '</tr>';
          echo '</tbody>';
          echo '</table>';
          echo '</div>';
          echo '</li>';
      }
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($data);
  }
  
  ?>

      
      </ul>
    </div>
    <div class="tournament-bracket__round tournament-bracket__round--bronze">
      <h3 class="tournament-bracket__round-title">Bronze medal game</h3>
      <ul class="tournament-bracket__list">
      <?php
      $sql = " SELECT
        ms.match_id AS match_id,
        ms.datamatch AS match_date,
        t1.acronim AS team1_acronim,
        t1.flag AS team1_flag,
        ms.goalsFor AS team1_goals,
        t2.acronim AS team2_acronim,
        t2.flag AS team2_flag,
        ms.goalsAgainst AS team2_goals
    FROM
        matchstats ms
    JOIN
        team t1 ON ms.hometeam_id = t1.team_id
    JOIN
        team t2 ON ms.awayteam_id = t2.team_id
    WHERE
        ms.round = 'Third-place play-off'
    ORDER BY
        ms.datamatch ASC
    LIMIT 1;";

$result = mysqli_query($data, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="tournament-bracket__item">';
        echo '<div class="tournament-bracket__match" tabindex="0">';
        echo '<table class="tournament-bracket__table">';
        echo '<caption class="tournament-bracket__caption">';
        echo '<time datetime="' . $row['match_date'] . '">' . date('d F Y', strtotime($row['match_date'])) . '</time>';
        echo '</caption>';
        echo '<thead class="sr-only">';
        echo '<tr>';
        echo '<th>Country</th>';
        echo '<th>Score</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody class="tournament-bracket__content">';
        echo '<tr class="tournament-bracket__team tournament-bracket__team--winner">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team1_acronim'] . '">' . $row['team1_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team1_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team1_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team1_goals'] . '</span>';
        echo '<span class="tournament-bracket__medal tournament-bracket__medal--bronze fa fa-trophy" aria-label="Bronze medal"></span>';
        echo '</td>';
        echo '</tr>';
        echo '<tr class="tournament-bracket__team">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team2_acronim'] . '">' . $row['team2_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team2_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team2_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team2_goals'] . '</span>';
        echo '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($data);
}


?>
      </ul>
    </div>
    <div class="tournament-bracket__round tournament-bracket__round--gold">
      <h3 class="tournament-bracket__round-title">Gold medal game</h3>
      <ul class="tournament-bracket__list">
      <?php
      $sql = " SELECT
        ms.match_id AS match_id,
        ms.datamatch AS match_date,
        t1.acronim AS team1_acronim,
        t1.flag AS team1_flag,
        ms.goalsFor AS team1_goals,
        t2.acronim AS team2_acronim,
        t2.flag AS team2_flag,
        ms.goalsAgainst AS team2_goals
    FROM
        matchstats ms
    JOIN
        team t1 ON ms.hometeam_id = t1.team_id
    JOIN
        team t2 ON ms.awayteam_id = t2.team_id
    WHERE
        ms.round = 'Final'
    LIMIT 1;";

$result = mysqli_query($data, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="tournament-bracket__item">';
        echo '<div class="tournament-bracket__match" tabindex="0">';
        echo '<table class="tournament-bracket__table">';
        echo '<caption class="tournament-bracket__caption">';
        echo '<time datetime="' . $row['match_date'] . '">' . date('d F Y', strtotime($row['match_date'])) . '</time>';
        echo '</caption>';
        echo '<thead class="sr-only">';
        echo '<tr>';
        echo '<th>Country</th>';
        echo '<th>Score</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody class="tournament-bracket__content">';
        echo '<tr class="tournament-bracket__team tournament-bracket__team--winner">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team1_acronim'] . '">' . $row['team1_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team1_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team1_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team1_goals'] . '</span>';
        echo '<span class="tournament-bracket__medal tournament-bracket__medal--gold fa fa-trophy" aria-label="Gold medal"></span>';
        echo '</td>';
        echo '</tr>';
        echo '<tr class="tournament-bracket__team">';
        echo '<td class="tournament-bracket__country">';
        echo '<abbr class="tournament-bracket__code" title="' . $row['team2_acronim'] . '">' . $row['team2_acronim'] . '</abbr>';
        echo '<span class="tournament-bracket__flag flag-icon flag-icon-' . strtolower($row['team2_flag']) . '" aria-label="Flag"><img class="flag" src="' .$row["team2_flag"] . '"></span>';
        echo '</td>';
        echo '<td class="tournament-bracket__score">';
        echo '<span class="tournament-bracket__number">' . $row['team2_goals'] . '</span>';
        echo '<span class="tournament-bracket__medal tournament-bracket__medal--silver fa fa-trophy" aria-label="Silver medal"></span>';
        echo '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($data);
}


?>
      </ul>
    </div>
  </div>
        </div>
        </div>
</div>
</div>  


        </body>

</html>