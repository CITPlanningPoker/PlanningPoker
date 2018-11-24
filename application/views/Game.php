<!--  Created by Justin Bryant
      Updated: 10/28/2018
 -->
 <?php
if(!$_SESSION['email'])
{
  $this->session->set_flashdata('error_msg','You must be logged in to view this page!');
  redirect('/User/login_view');
}
?>
<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
  echo link_tag('assets/css/navBar2.css');
  echo link_tag('assets/css/popupStyle.css');
  echo link_tag('assets/css/adminStyle.css');

  //var_dump($this->session->userdata('gamePlayers'));
  //die();
?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<title>Planning Poker Game</title>
</head>

<body>
<!-- Nav bar -->  
  <div class="navBackground"></div>
  <div id="adminButton">
    <button class="openbtn" onclick="openNav()">☰ Admin Controls</button>  
  </div>
  <div class="navbar" id="navBar">
    <a href="">Planning Poker</a>
    <!-- This could be added if multiple sessions are implemented
    <a href="">Sessions></a>-->
    <a href="<?php echo site_url();?>/User/contactUS">Contact Us</a>
    <a href="<?php echo site_url();?>/User/aboutPage">About</a>
    <a href="<?php echo site_url();?>/User/user_logout" class="login">LogOut</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> 
  <script>
    function myFunction() {
        var x = document.getElementById("navBar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } 
        else {
            x.className = "navbar";
        }
    }
  </script> 

  <div class="main">
    <!-- Storyboard -->
    <div class="section-story">
      <!-- Container for stories -->
      <div class="storyBox"><!-- Story text goes here -->
        <p id="listStory"></p>
        <p id="displayPlayerNum"></p>
      </div>
    </div>

  <!-- Gameboard -->

    <div class="section-display">
      <!-- HTML generates card slots with div ID cardDisplay -->
      <div id="cardDisplay"></div>
    </div>
      
    <div class="bottomScreen">
    <!-- Card tray at bottom of screen-->
    <!-- New card code TESTING -->
    
      <div class="cardContainer">
        <ul>
          <li id="cards" onclick="setCard(1)">1</li>
          <li id="cards" onclick="setCard(2)">2</li>
          <li type="button">3</li>
          <li id="cards" onclick="chkbox()">5</li>
          <li id="cards" onclick="setCard(5)">8</li>
          <li id="cards" onclick="setCard(6)">13</li>
          <li id="cards" onclick="setCard(7)">∞</li>
          <li id="cards" onclick="setCard(8)">?</li>
        </ul>
      </div>
        <!--
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
        -->
   </div>

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

  <!-- Story input popup box -->
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
      </div>
      <div class="modal-footer">
        <input type="button" class="buttons" value="Submit Story" onclick="submitStory()">
        <input type="button" class="buttons" value="Clear Story" onclick="clearStory()">
      </div>
    </div>
  </div>

<!-- Script for game play logic -->
<script type="text/javascript">
  

  var users = <?php echo json_encode(array_values($_SESSION)); ?>;
  var currentPlayer = 1;
  var selectedPlayer = "player" + currentPlayer;
  var cardArray = [];
  var playerArray = [users[0],users[1]];  

//Sets a card into the selected player's slot
  function setCard(x)
  {
    if (cardArray.length < playerArray.length)
    {
        cardArray[currentPlayer - 1] = x;
      document.getElementById(selectedPlayer).innerHTML = "✔";
      //Reveals cards
      if (cardArray.length == playerArray.length)
      {
        reveal();
      }
    }
    //display the array to screen REMOVE LATER
    document.getElementById("arrayList").innerHTML = cardArray;

  
  }

  function reveal() {
    for (var i = 0; i < cardArray.length; i++){
      showCard = "player" + (i+1);
      if (cardArray[i] == 1){
        document.getElementById(showCard).innerHTML = "1";
      }
      else if (cardArray[i] == 2){
        document.getElementById(showCard).innerHTML = "2";
      }
      else if (cardArray[i] == 3){
        document.getElementById(showCard).innerHTML = "3";
      }
      else if (cardArray[i] == 4){
        document.getElementById(showCard).innerHTML = "5";
      }
      else if (cardArray[i] == 5){
        document.getElementById(showCard).innerHTML = "8";
      }
      else if (cardArray[i] == 6){
        document.getElementById(showCard).innerHTML = "13";
      }
      else if (cardArray[i] == 7){
        document.getElementById(showCard).innerHTML = "∞";
      }
      else if (cardArray[i] == 8){
        document.getElementById(showCard).innerHTML = "?";
      }
    }
  }

  var playerNum = 1;
  playerArray.forEach(function(player){
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

  //Used to open and close admin buttons
  function openNav() {
    document.getElementById("mySidebar").style.width = "180px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
  }

</script>
<!-- Script used for testing the game, REMOVE LATER -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/testingGameLogic.js"></script>
</body>
</html>