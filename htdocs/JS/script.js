
class Morpion 
{
  constructor(){

    this.board = document.querySelector('#board');
    this.player1 = "x";
    this.array = [];
    this.player2 = "circle";
    this.circleTurn;
    this.timer;
    this.winningCombination = 
   [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6]
    ]
  }
  
  createBoard(){
    
    let container = document.querySelector("#container");
    // let board = document.querySelector('.board');
    
    let displayContainer = document.createElement("div");
    container.appendChild(displayContainer);
    displayContainer.classList.add("displayContainer");
  
    let restartButton = document.createElement("button");
    displayContainer.appendChild(restartButton);
    restartButton.classList.add("restart");
    restartButton.innerHTML = "Restart"
  
    let timer = document.createElement("h2");
    displayContainer.appendChild(timer);
    timer.classList.add("timer");
    timer.innerHTML = "12.30"
  
    let winningMessageElement = document.createElement("p");
    displayContainer.appendChild(winningMessageElement);
    winningMessageElement.classList.add("winningMessage")
    
  
    for (let i= 0; i <= 8; i++) {
      let divCell = document.createElement("div");
      divCell.classList.add("cell");
      board.appendChild(divCell);
      divCell.setAttribute('data-cell', i);
      divCell.setAttribute('id', 'cell-'+ i);
    } 
  }
 
  startGame(){
    // Create the game interface in the DOM
    this.createBoard();
    
    
    this.circleTurn = false;

    this.board.addEventListener("click", (event) => {
      this.play (event);     
    })
  }
  
    play(event)
    {
      const currentPlayer = this.circleTurn ? this.player2 : this.player1;
      event.target.classList.add(currentPlayer);
      this.switchTurn();
      this.setBoardHoverClass();
      this.getGameCombination(event)

      // event.target.getAttribute("data-cell")
      // let cells = document.querySelectorAll(".cell")
      
      if(this.checkWin(currentPlayer)){
        console.log("winna")
      };
    }

    switchTurn(){
      this.circleTurn = !this.circleTurn;
    }

    checkWin(currentPlayer)

    {
      let cells = document.querySelectorAll('[data-cell]');
      return this.winningCombination.some(combination =>{
        return combination.every(index => {
          return cells[index].classList.contains(currentPlayer);
        })
      })    
    }
    
    getGameCombination(event){
      
      console.log(this.array);
      
      console.log(event.target.getAttribute("data-cell"));
      this.array.push(event.target.getAttribute("data-cell"))
      console.log(this.array)
    }

      // cells.forEach(cell =>{
      //   console.log(cell.getAttribute("data-cell"));
      //   // return cell.getAttribute("[data-cell]");
      // })
   
  
   
  // je veux récupérer le data-cell et la class x ou Circle de la  case



  

    checkDraw(){

    }

    refreshGame(){

    }

    endGame(draw){
      if (draw){

      }else{

      }
    }

  setBoardHoverClass(){
    this.board.classList.remove(this.player1);
    this.board.classList.remove(this.player2);
    if(this.circleTurn){
      this.board.classList.add(this.player2);
    }else{
      this.board.classList.add(this.player1);
    }
  } 
}


let newGame = new Morpion();
newGame.startGame();

    // this.grid.forEach(cell => {
    //   cell.addEventListener("click", function(event){
    //     event.target.classList.add(currentPlayer);
    //     const currentPlayer = this.circleTurn ? this.player2 : this.player1;
        
    //     // this.play(cell, currentPlayer);
    //     // this.switchTurn();
    //     // this.setBoardHoverClass();
    //   }, { once:true})
      
    // })
  
    //add an event listener to targeted cells
    

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



