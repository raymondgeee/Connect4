<!DOCTYPE html>
<html>
<head>
	<title>Connect Four - Game Exam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h3>Player <span id='player'></span> Turn</h3>
    <h4 id='winner'></h4>
    <table border=1 id='board'>
        <tr>
            <?php
                for ($i=1; $i <=7; $i++) { 
                    echo "<td id='drop".$i."'><button class='drop' disabled>Drop ".$i."</button></td>";
                }
            ?>
        </tr>
        <?php
            $x = 1;
            for ($i = 0; $i < 6; $i++) {
                echo "<tr class='trcol'>";
                for ($j = 0; $j < 7; $j++) {
                    echo "<td style='width:50px; height:50px;' id='box".$x." text-align:center;'></td>";
                    $x++;
                }
                echo "</tr>";
            }
        ?>
    </table>

    <button id='startButton'>Start</button>
    <button id='resetButton'>Reset</button>
</body>
</html>
<script type="text/javascript" src="game.js"></script>
