<!DOCTYPE html>
<?php
if(!$_SESSION['userName'])
{
  $this->session->set_flashdata('error_msg', 'You must be logged in to view this page!.');
  redirect('/User/login_view');
}
?>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
?>
<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body>
<script type="text/javascript">
//Card image variables
  var cardBack = "assets/images/cards/Back.png";
  var cardBlank = "assets/images/cards/Blank.png";
  var card1 = "assets/images/cards/1.png";
  var card2 = "assets/images/cards/2.png";
  var card3 = "assets/images/cards/3.png";
  var card5 = "assets/images/cards/5.png";
  var card8 = "assets/images/cards/8.png";
  var card13 = "assets/images/cards/13.png";
  var cardInf = "assets/images/cards/Inf.png";
  var cardQN = "assets/images/cards/Question.png";
  
  var showCards = true;
  var playerNum = 1;
  var currentPlayer = "player" + playerNum;
  var playerChoice = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

  function setCard(x){
    /* This will lock first card option
        **Would like to make it where a player
        can change their card choice before the reveal**
    */
    if (playerChoice[playerNum - 1] == 0){
      playerChoice[playerNum - 1] = x;
      document.getElementById(currentPlayer).src = cardBack;
    }

    //display the array to screen REMOVE LATER
    document.getElementById("arrayList").innerHTML = playerChoice;
  }

  function reveal() {
    for (var i = 0; i < playerChoice.length; i++){
      showCard = "player" + (i+1);
      if (playerChoice[i] == 1){
        document.getElementById("textBox").innerHTML = showCard;
        document.getElementById(showCard).src = card1;
      }
      else if (playerChoice[i] == 2){
        document.getElementById(showCard).src = card2;
      }
      else if (playerChoice[i] == 3){
        document.getElementById(showCard).src = card3;
      }
      else if (playerChoice[i] == 4){
        document.getElementById(showCard).src = card5;
      }
      else if (playerChoice[i] == 5){
        document.getElementById(showCard).src = card8;
      }
      else if (playerChoice[i] == 6){
        document.getElementById(showCard).src = card13;
      }
      else if (playerChoice[i] == 7){
        document.getElementById(showCard).src = cardInf;
      }
      else if (playerChoice[i] == 8){
        document.getElementById(showCard).src = cardQN;
      }
    }
  }
//TESTING FUNCTIONALITY, REMOVE LATER
  function playerSelect(x){ // FOR TESTING, REMOVE LATER
    //Used to cycle through players
    if (x == 0) {
      if (playerNum == 1){
        playerNum = 10;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + playerNum;
        currentPlayer = "player" + playerNum;        
      }
      else {
        playerNum--;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + playerNum;
        currentPlayer = "player" + playerNum;
      }
    }
    else if (x == 1){
      if (playerNum == 10){
        playerNum = 1;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + playerNum;
        currentPlayer = "player" + playerNum;        
      }
      else {
        playerNum++;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + playerNum;
        currentPlayer = "player" + playerNum;
      }
    }
  }

  function reset(){ // FOR TESTING, REMOVE LATER
    document.getElementById("player1").src = "assets/images/cards/Blank.png";
    document.getElementById("player2").src = "assets/images/cards/Blank.png";
    document.getElementById("player3").src = "assets/images/cards/Blank.png";
    document.getElementById("player4").src = "assets/images/cards/Blank.png";
    document.getElementById("player5").src = "assets/images/cards/Blank.png";
    document.getElementById("player6").src = "assets/images/cards/Blank.png";
    document.getElementById("player7").src = "assets/images/cards/Blank.png";
    document.getElementById("player8").src = "assets/images/cards/Blank.png";
    document.getElementById("player9").src = "assets/images/cards/Blank.png";
    document.getElementById("player10").src = "assets/images/cards/Blank.png";
    document.getElementById("textBox").innerHTML = "Game Reset ";
    currentPlayer = "player1";
    playerNum = 1;
    playerChoice = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    document.getElementById("playerTracker").innerHTML = "Current Player: " + playerNum;
    document.getElementById("arrayList").innerHTML = playerChoice;
  }
</script>
<!-- Nav bar (needs to be added)-->

<!-- Buttons and storyboard -->
  <div class="leftSide">
    <!-- Container for stories -->
    <div class="storyBox"><!-- Story text goes here -->
      <p id="playerTracker">Current Player: 1</p>
      <p id="textBox">textBox</p>
      <p id="arrayList">arrayList</p>
      <p id="rList"></p>
      
        
    </div>
    <!-- Buttons for Admin to control the game -->
    <input type="button" class="buttons" value="Reveal Cards" onclick="reveal()">
    <input type="button" class="buttons" value="Next Story">
    <input type="button" class="buttons" value="End Session">

    <!-- Buttons for testing card placement -->
    <input type="button" class="buttons" value="prev player" onclick="playerSelect(0)">
    <input type="button" class="buttons" value="next player" onclick="playerSelect(1)">
    <input type="button" class="buttons" value="reset" onclick="reset()">

  </div>

<!-- Gameboard -->
  <div class="middle">
    <table class="cardTable">
      <!-- Top row of names-->
      <tr>
        <td>
          <p>Player 1</p>
        </td>
        <td>
          <p>Player 2</p>
        </td>
        <td>
          <p>Player 3</p>
        </td>
        <td>
          <p>Player 4</p>
        </td>
        <td>
          <p>Player 5</p>
        </td>
      </tr>

      <!-- Top row of cards -->
      <tr>
        <td>
          <img id="player1" src="assets/images/cards/blank.png" alt="Player 1 card slot" class="backCard" />
        </td>
        <td>
          <img id="player2" src="assets/images/cards/blank.png" alt="Player 2 card slot" class="backCard" />
        </td>
        <td>
          <img id="player3" src="assets/images/cards/blank.png" alt="Player 3 card slot" class="backCard" />
        </td>
        <td>
          <img id="player4" src="assets/images/cards/blank.png" alt="Player 4 card slot" class="backCard" />
        </td>
        <td>
          <img id="player5" src="assets/images/cards/blank.png" alt="Player 5 card slot" class="backCard" />
        </td>
      </tr>

      <!-- Bottom row of cards -->
      <tr>
        <td>
          <img id="player6" src="assets/images/cards/blank.png" alt="Player 6 card slot" class="backCard" />
        </td>
        <td>
          <img id="player7" src="assets/images/cards/blank.png" alt="Player 7 card slot" class="backCard" />
        </td>
        <td>
          <img id="player8" src="assets/images/cards/blank.png" alt="Player 8 card slot" class="backCard" />
        </td>
        <td>
          <img id="player9" src="assets/images/cards/blank.png" alt="Player 9 card slot" class="backCard" />
        </td>
        <td>
          <img id="player10" src="assets/images/cards/blank.png" alt="Player 10 card slot" class="backCard" />
        </td>
      </tr>

      <!-- Bottom row of names -->
      <tr>
        <td>
          <p>Player 6</p>
        </td>
        <td>
          <p>Player 7</p>
        </td>
        <td>
          <p>Player 8</p>
        </td>
        <td>
          <p>Player 9</p>
        </td>
        <td>
          <p>Player 10</p>
        </td>
      </tr>         
    </table>

<!-- Card tray at bottom of screen-->
    <table class="cardContainer">
      <tr>
        <td>
          <img src="assets/images/cards/1.png"
            id="cards" onclick="setCard(1)" alt="Playing card 1" 
          />
        </td>
        <td>
          <img src="assets/images/cards/2.png"
            id="cards" onclick="setCard(2)" alt="Playing card 2"
          />
        </td>
        <td>
          <img src="assets/images/cards/3.png"
            id="cards" onclick="setCard(3)" alt="Playing card 3"
          />
        </td>
        <td>
          <img src="assets/images/cards/5.png"
            id="cards" onclick="setCard(4)" alt="Playing card 5"
          />
        </td>
        <td>
          <img src="assets/images/cards/8.png"
            id="cards" onclick="setCard(5)" alt="Playing card 8"
          />
        </td>
        <td>
          <img src="assets/images/cards/13.png"
            id="cards" onclick="setCard(6)" alt="Playing card 13"
          />
        </td>                              
        <td>
          <img src="assets/images/cards/Inf.png"
            id="cards" onclick="setCard(7)" alt="Playing card Inf"
          />
        </td>   
        <td>
          <img src="assets/images/cards/Question.png"
            id="cards" onclick="setCard(8)" alt="Playing card ?"
          />
        </td>               
      </tr>
    </table>
  </div>
</body>
</html>