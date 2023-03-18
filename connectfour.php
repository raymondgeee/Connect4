<!DOCTYPE html>
<html>
<head>
	<title>Connect Four - Game Exam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="Bootstrap/Bootstrap 3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/Font Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="Bootstrap/Bootstrap 3.3.7/Roboto Font/roboto.css">
    <link rel="stylesheet" href="Bootstrap/w3css/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="w3-container w3-padding w3-indigo w3-card-2">
                <div class="row">
                    <div class="col-md-12">
                        <label class='w3-large'>CONNECT FOUR</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container w3-padding-12">
        <div class="row">
            <div class="col-md-12 w3-center">
                <label class='w3-xlarge playerText' hidden>Player <span id='player'></span> Turn</label>
                <label class='w3-xxlarge' id='winner' ></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class='w3-right'>
                    <button class='w3-btn w3-deep-purple w3-round' id='vsPlayer'>VS Player</button>
                    <button class='w3-btn w3-deep-purple w3-round' id='vsAi' disabled>VS AI</button>
                </span>
            </div>
        </div>
        <div class="row" id="playerNames" hidden>
            <div class="w3-container">
                <div class="w3-col m3">
                    <label class='w3-small' >Player 1 Name</label>
                    <input type='text' class='w3-input w3-border' id='player1'>
                    
                </div>
                <div class="w3-col m3 w3-padding-left">
                    <label class='w3-small' >Player 2 Name</label>
                    <input type='text' class='w3-input  w3-border' id='player2'>
                </div>
                <div class="w3-col m3 w3-padding-left w3-padding-24">
                    <button class='w3-btn w3-deep-purple w3-round' id='savePlayers'>SAVE</button>
                </div>
            </div>
        </div>
        <div class="row w3-padding-top">
            <div class="col-md-12">
                <table class='table table-bordered w3-center' id='board'>
                    <tr>
                        <?php
                            for ($i=1; $i <=7; $i++) { 
                                echo "<td id='drop".$i."'><button class='drop w3-btn w3-pink w3-round w3-btn-block' disabled>Drop ".$i."</button></td>";
                            }
                        ?>
                    </tr>
                    <?php
                        $x = 1;
                        for ($i = 0; $i < 6; $i++) {
                            echo "<tr class='trcol'>";
                            for ($j = 0; $j < 7; $j++) {
                                echo "<td style='width:50px; height:50px; vertical-align:middle;' id='box".$x." text-align:center;'></td>";
                                $x++;
                            }
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class="row w3-padding-top">
            <div class="col-md-12 w3-center" id="actionBtn" hidden>
                <button class='w3-btn w3-deep-purple w3-round w3-xlarge' id='startButton' disabled>START</button>
                <button class='w3-btn w3-deep-purple w3-round w3-xlarge' id='resetButton'>RESET</button>
            </div>
         </div>
    </div>
</body>
</html>
<script type="text/javascript" src="game.js"></script>
