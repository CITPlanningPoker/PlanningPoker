<!--  Created by Justin Bryant
      Updated: 10/28/2018
 -->

<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
  echo link_tag('assets/css/navBar2.css');
  echo link_tag('assets/css/popupStyle.css');
  echo link_tag('assets/css/adminStyle.css');
  $this->load->library('Javascript');
  $this->load->library('Javascript/Jquery');
?>
<html>

<head>
	<title>Planning Poker Game</title>
</head>

<body>
<!-- Nav bar -->  
  <div class="navBackground"></div>
  <div id="adminButton">
    <button class="openbtn" onclick="openNav()">☰ Admin Controls</button>  
  </div>
    <div class="navbar">
      <a href="<?php echo site_url();?>/User/index">Home</a>
      <a class="active" href="">Planning Poker</a>
      <a href="<?php echo site_url();?>/User/contactUS">Contact</a>
      <a href="<?php echo site_url();?>/User/aboutPage">About</a>
  </div>

  <div class="main">
    <!-- Storyboard -->
    <div class="section-story">
      <!-- Container for stories -->
      <div class="storyBox"><!-- Story text goes here -->
        <p>Hi, </p>
        <p id="listStory"><?php echo $adminName; ?></p>
        <!--<p><?php //echo $_POST["story"]; ?></p> -->

        <p>
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
          <li id="cards" onclick="setCard(3)">3</li>
          <li id="cards" onclick="setCard(4)">5</li>
          <li id="cards" onclick="setCard(5)">8</li>
          <li id="cards" onclick="setCard(6)">13</li>
          <li id="cards" onclick="setCard(7)">∞</li>
          <li id="cards" onclick="setCard(8)">?</li>
        </ul>
      </div>
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
      <form role="form" method="post" action="">
        <div class="modal-body">
          <textarea id="storyTextarea" name="story" placeholder="Write your story here..." required=""></textarea>
        </div>
        <div class="modal-footer">
          <input type="submit" value="submit" value="send"></input>
        </div>
      </form>
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