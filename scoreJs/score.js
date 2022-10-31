const p1Points = document.getElementById('p1-score');
const p2Points = document.getElementById('p2-score');
const p1Btn = document.getElementById("p1-btn");
const p2Btn = document.getElementById("p2-btn");
const gameEndScoreElement = document.getElementById('gameEndScore');
const winnerContainer = document.getElementById('winner');
const p1Name = document.getElementById('p1-player-name');
const p2Name = document.getElementById('p2-player-name');
const winnerName = document.getElementById('winner-name');
const reset = document.getElementById('reset');

let gameEndScore = gameEndScoreElement.value;
let p1Score = 0;
let p2Score = 0;
let changingColor;



p1Btn.addEventListener("click", function () {
    startGame()
    printScore(1);
    if (p1Score >= gameEndScore) {
        endGame()
    }

})

p2Btn.addEventListener("click", function () {
    startGame()
    printScore(2);
    if (p2Score >= gameEndScore) {
        endGame()
    }


})

reset.addEventListener('click', function () {
    p1Score = 0;
    p2Score = 0;
    p1Points.textContent = 0;
    p2Points.textContent = 0;
    gameEndScoreElement.disabled = false;
    p2Btn.disabled = false;
    p1Btn.disabled = false;
    document.getElementsByTagName('body')[0].style.backgroundColor = "white";
    p1Name.style.backgroundColor = "white";
    p2Name.style.backgroundColor = "white";
    winnerPlayer = null;
    clearInterval(changingColor); // to stop the interval
    winnerContainer.style.display = 'none';


})


gameEndScoreElement.addEventListener("change", function (event) {
    gameEndScore = parseInt(event.target.value);
    // console.log(gameEndScore)
})




function printScore(player) {
    if (player == 1) {
        p1Score++;


        if (p2Score > 0) {
            p2Score--;

        }
        p1Points.textContent = p1Score;
        p2Points.textContent = p2Score;


        console.log(p2Score)
    }
    else {
        p2Score++;


        if (p1Score > 0) {
            p1Score--;

        }
        p2Points.textContent = p2Score;
        p1Points.textContent = p1Score;


    }
}


// start game : disabled the laple
function startGame() {
    gameEndScoreElement.disabled = true;
}



function endGame() {
    p2Btn.disabled = true;
    p1Btn.disabled = true;
    winnerContainer.style.display = 'block';
    let winnerPlayer = null;

    if (p1Score > p2Score) {
        winnerPlayer = p1Name.textContent;
        p1Name.style.backgroundColor = "green";
        p2Name.style.backgroundColor = "red";

    }
    else {
        winnerPlayer = p2Name.textContent;
        p1Name.style.backgroundColor = "red";
        p2Name.style.backgroundColor = "green";
    }

    document.getElementsByTagName('body')[0].style.backgroundColor = "green";
    let wName = document.getElementById('winner-name');
    wName.textContent = winnerPlayer;


    let colorSwitch = 0;
    changingColor = setInterval(function () {
        if (colorSwitch == 0) {
            winnerContainer.style.backgroundColor = "red";
            colorSwitch++;
        } else {
            winnerContainer.style.backgroundColor = "green";
            colorSwitch--;
        }
    }, 500);
    // console.log(changingColor);
}







