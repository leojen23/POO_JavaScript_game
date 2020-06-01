
let container = document.querySelector("#container");

let divBoard = document.createElement("div")
divBoard.classList.add('board');
container.appendChild(divBoard);

divBoard = document.querySelector('.board');
divBoard.setAttribute('id', 'board');

for (let i= 1; i <= 9; i++) {

  let divCell = document.createElement("div");
  divCell.classList.add("cell");
  divBoard.appendChild(divCell);
  divCell.setAttribute('data-cell',"");
  divCell.setAttribute('id', 'cell-'+ i);

}

class Morpion 
{
  constructor(){
    this.player1 = "x";
    this.player2 = "circle";
    this.circleTurn;
  }


  // GETTERS ------------------//
  getPlayer1(){
    return this.player1;
  }
  
  
  getPlayer2(){
    return this.player2;
  }

  getCircleTurn(){
    return this.circleTurn;
  }


  // SETTERS ------------------//
  setCircleTurn(status){
    this.circleTurn = status;
  }


  startGame(){
    
    this.setCircleTurn(false);
    let cells = document.querySelectorAll('[data-cell]');
    console.log(cells);
    
    cells.forEach(cell => {
      cell.addEventListener("click", function handleClick(event){
        
        const cell = event.target;
        const currentPlayer = newGame.getCircleTurn() ? newGame.getPlayer2() : newGame.getPlayer1();
    
        newGame.play(cell, currentPlayer);
       
        newGame.switchTurn();
        newGame.setBoardHoverClass();
      }, { once:true})
    })
  }

  setBoardHoverClass(){
    let board = document.querySelector("#board");
    
    board.classList.remove(newGame.getPlayer1());
    board.classList.remove(newGame.getPlayer2());
    if(newGame.getCircleTurn()){
      board.classList.add(newGame.getPlayer2())
    }else{
      board.classList.add(newGame.getPlayer1());
    }
  }
  play(cell, currentPlayer){
    cell.classList.add(currentPlayer);
  }
  
  switchTurn(){
    this.setCircleTurn(!this.getCircleTurn());
  }

  checkWin()
  {
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

    function checkWin(currentPlayer){
          WINNING_COMBINATIONS.some(combination =>{
            return combination.every(index => {
              return cells[index].classList.contains(currentPlayer);
            })
          })
      }


  }
  
}


let newGame = new Morpion();
newGame.startGame();



// `
//   <div id="board" class="board">
//     <div id="cell-1" class="cell" data-cell></div>
//     <div id="cell-2" class="cell" data-cell></div>
//     <div id="cell-3" class="cell" data-cell></div>
//     <div id="cell-4" class="cell" data-cell></div>
//     <div id="cell-5" class="cell" data-cell></div>
//     <div id="cell-6" class="cell" data-cell></div>
//     <div id="cell-7" class="cell" data-cell></div>
//     <div id="cell-8" class="cell" data-cell></div>
//     <div id="cell-9" class="cell" data-cell></div>
//   </div>

//   <div class="displayMessage">
//     <h1>BOARD</h1>
    
//     <div id="timer" class="timer">12.23</div>
//     <div id="counter" class="counter">You've player: 1</div>
//     <div data-win-msg id="win-msg">You won again</div>
//     <a type="button"id="restart" class="restart">Play Again 🙄</a>
   
//   </div>
//   `

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
    

  
  // let X_CLASS = "x";
  // let CIRCLE_CLASS = "circle";
  // let WINNING_COMBINATIONS = [
  //   [0, 1, 2],
  //   [3, 4, 5],
  //   [6, 7, 8],
  //   [0, 3, 6],
  //   [1, 4, 7],
  //   [2, 5, 8],
  //   [0, 4, 8],
  //   [2, 4, 6]
  // ];
  // let board = document.querySelector("#board");
  // let cells= document.querySelectorAll('[data-cell]');


  // let circleTurn;

  // startGame();


  // function startGame(){
  //   circleTurn = false;
  //   cells.forEach(cell => {
  //     cell.addEventListener("click", handleClick, { once:true})
  //   })
  //   setBoardHoverClass();
  // }

  // function handleClick(event){
  //   const cell = event.target;
  //   const currentPlayer = circleTurn ? CIRCLE_CLASS : X_CLASS;

  //   play(cell, currentPlayer);
  //   if(checkWin(currentPlayer)){
  //     console.log("winner");
      

  //   }
  //   switchTurn();
  //   setBoardHoverClass();
  // }

  
  //   function checkWin(currentPlayer){
  //     WINNING_COMBINATIONS.some(combination =>{
  //       return combination.every(index => {
  //         return cells[index].classList.contains(currentPlayer);
  //       })
  //     })

  // }

 

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



