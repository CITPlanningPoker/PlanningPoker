<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
  echo link_tag('assets/css/navBar.css');
?>
<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body>
<script type="text/javascript">
  var numberOfPlayers = 10;
  var currentPlayer = 1;
  var selectedPlayer = "player" + currentPlayer;
  var playerArray = [];

//Sets a card into the selected player's slot
  function setCard(x){
    if (playerArray.length < numberOfPlayers){
        playerArray[currentPlayer - 1] = x;
      document.getElementById(selectedPlayer).innerHTML = "✔";
      //Reveals cards
      if (playerArray.length == numberOfPlayers){
        reveal();
      }
    }
    //display the array to screen REMOVE LATER
    document.getElementById("arrayList").innerHTML = playerArray;
  }

  function reveal() {
    for (var i = 0; i < playerArray.length; i++){
      showCard = "player" + (i+1);
      if (playerArray[i] == 1){
        document.getElementById(showCard).innerHTML = "1";
      }
      else if (playerArray[i] == 2){
        document.getElementById(showCard).innerHTML = "2";
      }
      else if (playerArray[i] == 3){
        document.getElementById(showCard).innerHTML = "3";
      }
      else if (playerArray[i] == 4){
        document.getElementById(showCard).innerHTML = "5";
      }
      else if (playerArray[i] == 5){
        document.getElementById(showCard).innerHTML = "8";
      }
      else if (playerArray[i] == 6){
        document.getElementById(showCard).innerHTML = "13";
      }
      else if (playerArray[i] == 7){
        document.getElementById(showCard).innerHTML = "∞";
      }
      else if (playerArray[i] == 8){
        document.getElementById(showCard).innerHTML = "?";
      }
    }
  }

//TESTING FUNCTIONALITY, REMOVE LATER
  function playerSelect(x){ // FOR TESTING, REMOVE LATER
    //Used to cycle through players
    if (x == 0) {
      if (currentPlayer == 1){
        currentPlayer = numberOfPlayers;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + currentPlayer;
        selectedPlayer = "player" + currentPlayer;        
      }
      else {
        currentPlayer--;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + currentPlayer;
        selectedPlayer = "player" + currentPlayer;
      }
    }
    else if (x == 1){
      if (currentPlayer == numberOfPlayers){
        currentPlayer = 1;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + currentPlayer;
        selectedPlayer = "player" + currentPlayer;        
      }
      else {
        currentPlayer++;
        document.getElementById("playerTracker").innerHTML = "Current Player: " + currentPlayer;
        selectedPlayer = "player" + currentPlayer;
      }
    }
  }

  function reset(){ // FOR TESTING, REMOVE LATER
    //Resets cards to blank status
    for (var i = 0; i < playerArray.length; i++){
      var resetPlayer = "player" + (i+1);
      document.getElementById(resetPlayer).innerHTML = "";
    }

    //Resets variables
    selectedPlayer = "player1";
    currentPlayer = 1;
    playerArray = [];

    //Displaying results to screen
    document.getElementById("textBox").innerHTML = "Game Reset ";
    document.getElementById("playerTracker").innerHTML = "Current Player: " + currentPlayer;
    document.getElementById("arrayList").innerHTML = playerArray;
  }
  //Used to open and close admin buttons
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";

  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";

  }

</script>
<!-- Nav bar -->
  <div class="navbar">
      <a class="active" href="">Home</a>
      <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
      <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
      <a href="">About</a>
  </div> 

  <div id="adminButton">
    <button class="openbtn" onclick="openNav()">☰ Admin Controls</button>  
  </div>

  <div class="main">
    <!-- Storyboard -->
    <div class="topScreen">
      <!-- Container for stories -->
      <div class="storyBox"><!-- Story text goes here -->
        <p id="playerTracker">Current Player: 1</p>
        <p id="textBox">textBox</p>
        <p id="arrayList">arrayList</p>
        <p id="rList"></p> 
      </div>
    </div>

  <!-- Gameboard -->
    <div class="middleScreen">
      <ul>
        <ul>
          <li><p  class="displayCard" id="player1"></p></li>
          <li><p  class="displayName">Player 1</p></li>
        </ul>
      </ul>

      <ul>
         <ul>
          <li><p  class="displayCard" id="player2"></p></li>
          <li><p  class="displayName">Player 2</p></li>
        </ul>
      </ul>

      <ul>
       <ul>
          <li><p  class="displayCard" id="player3"></p></li>
          <li><p  class="displayName">Player 3</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player4"></p></li>
          <li><p  class="displayName">Player 4</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player5"></p></li>
          <li><p  class="displayName">Player 5</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player6"></p></li>
          <li><p  class="displayName">Player 6</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player7"></p></li>
          <li><p  class="displayName">Player 7</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player8"></p></li>
          <li><p  class="displayName">Player 8</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player9"></p></li>
          <li><p  class="displayName">Player 9</p></li>
        </ul>
      </ul>

      <ul>
        <ul>
          <li><p  class="displayCard" id="player10"></p></li>
          <li><p  class="displayName">Player 10</p></li>
        </ul>
      </ul>      
    </div>
      
    <div class="bottomScreen">
    <!-- Card tray at bottom of screen-->
    <!-- New card code TESTING -->
      <table class="cardContainer">
          <tr>
            <td>
              <p id="cards" onclick="setCard(1)">1</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(2)">2</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(3)">3</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(4)">5</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(5)">8</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(6)">13</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(7)">∞</p>
            </td>
            <td>
              <p id="cards" onclick="setCard(8)">?</p>
            </td>
          </tr>
      </table>

      <!-- Buttons for testing card placement REMOVE LATER-->
      <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>    
      <input type="button" class="buttons" value="prev player" onclick="playerSelect(0)">
      <input type="button" class="buttons" value="next player" onclick="playerSelect(1)">
      <input type="button" class="buttons" value="reset" onclick="reset()">  
        
      <input type="button" class="buttons" value="Reveal Cards" onclick="reveal()">
      <input type="button" class="buttons" value="Next Story">
      <input type="button" class="buttons" value="End Session">
      </div>
    </div>
  </div>
</body>
</html>