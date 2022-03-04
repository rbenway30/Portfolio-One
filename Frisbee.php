<html>
    <head>
        <title>Fantasy Ultimate Frisbee</title>
    </head>
    <body>
        <h1>Fantasy Ultimate Frisbee</h1>
        <p>This is a basic verision of Fantasy Football, but for Ultimate Frisbee</p>

                    <div class="player">
                        <form action="Frisbee.php" method="POST">

                            <div>
                                <label for="player">Enter Player Name</label>
                                <input type="text" name="player" placeholder="Player Name">
                            </div>

                            <div class="stat-type">
                                <h3>Throwing</h3>
                                <div class="stat">
                                    <label for="throws">Completed Throws (+1 Point)</label>
                                    <input type="number" name="throws" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="throwYards">Throwing Yards (+0.1 Points)</label>
                                    <input type="number" name="throwYards" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="throwScores">Scores Thrown (+5 Points)</label>
                                    <input type="number" name="throwScores" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="turnovers">Turnovers (-2 Points)</label>
                                    <input type="number" name="turnovers" placeholder="0">
                                </div>
                            </div>

                            <div class="stat-type">
                                <h3>Receiving</h3>
                                <div class="stat">
                                    <label for="catches">Catches (+1 Point)</label>
                                    <input type="number" name="catches" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="catchYards">Receiving Yards (+0.1 Points)</label>
                                    <input type="number" name="catchYards" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="catchScores">Scores Caught (+5 Points)</label>
                                    <input type="number" name="catchScores" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="drops">Drops (-2 Points)</label>
                                    <input type="number" name="drops" placeholder="0">
                                </div>
                            </div>

                            <div class="stat-type">
                                <h3>Defense</h3>
                                <div class="stat">
                                    <label for="forcedTurns">Forced Turnovers (+2 Points)</label>
                                    <input type="number" name="forcedTurns" placeholder="0">
                                </div>

                                <div class="stat">
                                    <label for="scoresAllowed">Scores Allowed (-1 Point)</label>
                                    <input type="number" name="scoresAllowed" placeholder="0">
                                </div>
                            </div>

                            <button type="submit">Calculate</button>

                        </form>
                    </div>
    </body>
</html>

<?php

//player name
$player = $_POST["player"];

//throwing stats
$throws = (float) $_POST["throws"];
$throwYards = (float) $_POST["throwYards"];
$throwScores = (float) $_POST["throwScores"];
$turnovers = (float) $_POST["turnovers"];


//catching stats
$catches = (float) $_POST["catches"];
$catchYards = (float) $_POST["catchYards"];
$catchScores = (float) $_POST["catchScores"];
$drops = (float) $_POST["drops"];

//defense stats
$forcedTurns = (float) $_POST["forcedTurns"];
$scoresAllowed = (float) $_POST["scoresAllowed"];


//throwing stats value
$throwsValue = 1;
$throwYardsValue = 0.1;
$throwScoresValue = 5;
$turnoversValue = -2;

//catching stats value
$catchesValue = 1;
$catchYardsValue = 0.1;
$catchScoresValue = 5;
$dropsValue = -2;

//defensive stats value
$forcedTurnsValue = 2;
$scoresAllowedValue = -1;


//throwing points earned
$throwsPoints = $throws * $throwsValue;
$throwYardsPoints = $throwYards * $throwYardsValue;
$throwScoresPoints = $throwScores * $throwScoresValue;
$turnoversPoints = $turnovers * $turnoversValue;

$totalThrowPoints = ($throwsPoints + $throwYardsPoints + $throwScoresPoints + $turnoversPoints);


//catching points earned
$catchesPoints = $catches * $catchesValue;
$catchYardsPoints = $catchYards * $catchYardsValue;
$catchScoresPoints = $catchScores * $catchScoresValue;
$dropsPoints = $drops * $dropsValue;

$totalCatchPoints = ($catchesPoints + $catchYardsPoints + $catchScoresPoints + $dropsPoints);


//defensive points earned
$forcedTurnsPoints = $forcedTurns * $forcedTurnsValue;
$scoresAllowedPoints = $scoresAllowed * $scoresAllowedValue;

$totalDefensivePoints = ($forcedTurnsPoints + $scoresAllowedPoints);

$totalPoints = ($totalThrowPoints + $totalCatchPoints + $totalDefensivePoints);

if(isset($_POST)) {
    echo($player . ": " . $totalPoints . " Points");
}


?>
