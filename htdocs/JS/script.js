
document.querySelector(".container").innerHTML =
`
  <div id="board" class="board">
    <div id="cell-1" class="cell" data-cell></div>
    <div id="cell-2" class="cell" data-cell></div>
    <div id="cell-3" class="cell" data-cell></div>
    <div id="cell-4" class="cell" data-cell></div>
    <div id="cell-5" class="cell" data-cell></div>
    <div id="cell-6" class="cell" data-cell></div>
    <div id="cell-7" class="cell" data-cell></div>
    <div id="cell-8" class="cell" data-cell></div>
    <div id="cell-9" class="cell" data-cell></div>
  </div>

  <div class="displayMessage">
    <h1>BOARD</h1>
    
    <div id="timer" class="timer">12.23</div>
    <div id="counter" class="counter">You've player: 1</div>
    <div data-win-msg id="win-msg">You won again</div>
    <a type="button"id="restart" class="restart">Play Again 🙄</a>
   
  </div>
  `

// let Morpion = class
//   { constructor()
//     let board;
//     let pion;
//     let currentPlayer
//     let timer
//     let turnCount;
//     let display;
//     let 

    // function startGame()
    // function startTimer();
    // function play();
    // function switchPlayer();
    // function checkWin();
    // function displayMessage();
    // function countTurns();
    // function resetTimer();
    // function restartGame();
    

  
  let X_CLASS = "x";
  let CIRCLE_CLASS = "circle";
  let WINNING_COMBINATIONS = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
  ];
  let board = document.querySelector("#board");
  let cells= document.querySelectorAll('[data-cell]');


  let circleTurn;

  startGame();


  function startGame(){
    circleTurn = false;
    cells.forEach(cell => {
      cell.addEventListener("click", handleClick, { once:true})
    })
    setBoardHoverClass();
  }

  function handleClick(event){
    const cell = event.target;
    const currentClass = circleTurn ? CIRCLE_CLASS : X_CLASS;

    play(cell, currentClass);
    if(checkWin(currentClass)){
      console.log("winner");
      

    }
    switchTurn();
    setBoardHoverClass();
  }

  function setBoardHoverClass(){
    board.classList.remove(X_CLASS);
    board.classList.remove(CIRCLE_CLASS);
    if(circleTurn){
      board.classList.add(CIRCLE_CLASS)
    }else{
      board.classList.add(X_CLASS);
    }
  }

    function checkWin(currentClass){
      WINNING_COMBINATIONS.some(combination =>{
        return combination.every(index => {
          return cells[index].classList.contains(currentClass);
        })
      })

  }

  function play(cell, currentClass){
    cell.classList.add(currentClass);
  }

  function switchTurn(){
    circleTurn = !circleTurn;
  }

  



//   board.addEventListener("click", function(event){
    
//     event.target.innerHTML = "⚪";
//     event.target.style.color = "white";
//     console.log(event.target);
//     $dataID = event.target.getAttribute("value");
//     console.log($dataID);

//  })




  


  // let square = document.querySelector(`.square[data-id = ${event.target}]`)






 
  


// let squares = document.querySelectorAll(".square");
// console.log(squares);

// squares.forEach(square => square.addEventListener("click", function(){
//   console.log(square);
//   square.innerHTML = "X"
//   square.classList.toggle("bg-color");
// }))



