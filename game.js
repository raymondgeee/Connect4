var board = document.getElementById("board");
var drop = board.getElementsByClassName("drop");
var trcol = board.getElementsByClassName("trcol");
var player = document.getElementById("player");
var winnerText = document.getElementById("winner");
var currentPlayer = 1;
player.innerHTML = currentPlayer;

var startButton = document.getElementById("startButton");

startButton.addEventListener("click", function() {
    $(".drop").removeAttr('disabled');
    $(this).attr("disabled", true);
});

resetButton.addEventListener("click", function() {
    // $(".drop").attr("disabled", true);
    // $("#startButton").attr("disabled", false);
    location.reload();
    
});

for (var i = 0; i < drop.length; i++) 
{
    drop[i].addEventListener("click", function() {
        // console.log(this.id);
        // console.log(this.parentNode.cellIndex);
        dropPiece(this.parentNode.cellIndex);
    });
}

function gameOver(player){
    $(".drop").attr('disabled', true);
    winnerText.innerHTML = "Player " + player + " wins!";
}

function dropPiece(column) {
    for (var i = 6; i >= 0; i--) {
        var cell = board.rows[i].cells[column];
        if (cell.className == "") {
            cell.style.textAlign = 'center';

            if(currentPlayer == 1)
            {
                player.innerHTML = 2;
                cell.className  = 'green';
                // cell.style.backgroundColor = 'green';
            }
            else if(currentPlayer == 2)
            {
                player.innerHTML = 1;
                cell.className  = 'red';
                // cell.style.backgroundColor = 'red';
            }

            cell.innerHTML = "P"+currentPlayer;
            checker(i, column);
            currentPlayer = currentPlayer == 1 ? 2 : 1;
            return;
        }
    }
}

function checker(row, column) {

    var player = currentPlayer == 1 ? "green" : "red";
    // Check for horizontal win
    var count = 0;
    for (var i = 0; i < 7; i++) 
    {
        if (board.rows[row].cells[i].className == player) 
        {
            count++;
            if (count >= 4) 
            {
                gameOver(player);
                return;
            }
        } 
        else 
        {
            count = 0;
        }
    }

    // Check for vertical
    count = 0;
    for (var i = 0; i <= 6; i++) 
    {
        if (board.rows[i].cells[column].className == player) 
        {
            count++;
            if (count >= 4) 
            {
                gameOver(player);
                return;
            }
        } 
        else 
        {
            count = 0;
        }
    }

    // Check for diagonal
    count = 0;
    var i = row - Math.min(row, column);
    var j = column - Math.min(row, column);
    while (i <= 6 && j < 7) 
    {
        if (board.rows[i].cells[j].className == player) {
            count++;
            if (count >= 4) 
            {
                gameOver(player);
                return;
            }
        } 
        else 
        {
            count = 0;
        }
        i++;
        j++;
    }

    var player = currentPlayer == 1 ? "green" : "red";
    count = 0;
    i = row + Math.min(6 - row, column);
    j = column - Math.min(6 - row, column);
    console.log(i);
    while (i >= 0 && j < 7) 
    {
        if (board.rows[i].cells[j].className == player) {
            count++;
            console.log(count);
            if (count >= 4) 
            {
                gameOver(player);
                return;
            }
        } 
        else 
        {
            count = 0;
        }
        i--;
        j++;
    }
}
