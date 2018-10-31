<!--  Created by Justin Bryant
      Updated: 10/28/2018
 -->

<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
  echo link_tag('assets/css/navBar.css');
  echo link_tag('assets/css/popupStyle.css');
?>
<html>

<head>
	<title>Planning Poker Game</title>
</head>

<body>
<!-- Nav bar -->
  <div class="navbar">
      <a href="<?php echo site_url();?>/User/createSession">Planning Poker</a>
      <!-- This could be added if multiple sessions are implemented
        <a href="">Sessions></a>-->
      <a href="<?php echo site_url();?>/User/contact">Contact Us</a>
      <a href="<?php echo site_url();?>/User/about">About</a>
      <a href="<?php echo site_url();?>/User/login">Login</a>
  </div> 

  <div id="adminButton">
    <button class="openbtn" onclick="openNav()">☰ Admin Controls</button>  
  </div>

  <div class="main">
    <!-- Storyboard -->
    <div class="topScreen">
      <!-- Container for stories -->
      <div class="storyBox"><!-- Story text goes here -->
        <p id="listStory"></p>
      </div>
    </div>

  <!-- Gameboard -->

    <div class="middleScreen">
      <div id="cardDisplay"></div>
      <!--
        Current issues with cardDisplay
          * Not changing players with next/prev player button
          * After pressing reset button, can't set card in first slot
      -->
        <script type="text/javascript">
          var players = ['John', 'Justin', 'Tim', 'David'];

          players.forEach(function(player){
              var playerNum = 1;
              var ul = document.createElement('ul');
              document.getElementById("cardDisplay").appendChild(ul);
              var cardli = document.createElement('li');
              var playerli = document.createElement('li');
              cardli.setAttribute("class", "displayCard");
              cardli.setAttribute("id", "player"+playerNum);
              playerli.setAttribute("class", "displayName");
              ul.appendChild(cardli);
              ul.appendChild(playerli);
              playerli.innerHTML += player;
              cardli.innerHTML += "";
              playerNum++;
          });
        </script>
    <!-- Commenting out code to test new element
      <ul>
        <li class="displayCard" id="player1"></li>
        <li class="displayName">Player 1</li>
      </ul>
      <ul>
        <li class="displayCard" id="player2"></li>
        <li class="displayName">Player 2</li>
      </ul>
      <ul>
        <li class="displayCard" id="player3"></li>
        <li class="displayName">Player 3</li>
      </ul>
      <ul>
        <li class="displayCard" id="player4"></li>
        <li class="displayName">Player 4</li>
      </ul>
      <ul>
        <li class="displayCard" id="player5"></li>
        <li class="displayName">Player 5</li>
      </ul>
      <ul>
        <li class="displayCard" id="player6"></li>
        <li class="displayName">Player 6</li>
      </ul>
      <ul>
        <li class="displayCard" id="player7"></li>
        <li class="displayName">Player 7</li>
      </ul>
      <ul>
        <li class="displayCard" id="player8"></li>
        <li class="displayName">Player 8</li>
      </ul>
      <ul>
        <li class="displayCard" id="player9"></li>
        <li class="displayName">Player 9</li>
      </ul>
      <ul>
        <li class="displayCard" id="player10"></li>
        <li class="displayName">Player 10</li>
      </ul>      
    End-->
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
      <input type="button" class="buttons" value="Edit Story" onclick="editStory()">
      <input type="button" class="buttons" value="End Session">
      </div>
    </div>
  </div>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <textarea id="storyTextarea" name="story" placeholder="Write your story here..." required=""></textarea>
        <input type="button" class="buttons" value="Submit Story" onclick="submitStory()">
        <input type="button" class="buttons" value="Clear Story" onclick="clearStory()">
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>

<!-- Script for game play logic -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/gameLogic.js"></script>
<!-- Script used for testing the game, REMOVE LATER -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/testingGameLogic.js"></script>
<!-- Script for popup text box -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/popupScript.js"></script>
</body>
</html>