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
  echo link_tag('assets/css/navBar.css');
  echo link_tag('assets/css/popupStyle.css');
  echo link_tag('assets/css/adminStyle.css');
?>
<html>

<head>
	<title>Planning Poker Game</title>
</head>

<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
<!-- Nav bar -->  
  <div class="navBackground"></div>
  <div id="adminButton">
    <button class="openbtn" onclick="openNav()">☰ Admin Controls</button>  
  </div>
    <div class="topnav">
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
        <p id="listStory"></p>
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
          <li class="cards" value="1">1</li>
          <li class="cards" value="2">2</li>
          <li class="cards" value="3">3</li>
          <li class="cards" value="4">5</li>
          <li class="cards" value="5">8</li>
          <li class="cards" value="6">13</li>
          <li class="cards" value="7">∞</li>
          <li class="cards" value="8">?</li>
        </ul>
        <!-- Submit card value to the controller-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
          <?php
            $userName = array("Justin", "Evan");
            $userCard = array(0, 1);
          ?>
          var playerArray = <?php echo json_encode($userName) ?>;
          var cardArray = <?php echo json_encode($userCard) ?>;

          $(document).ready(function(){
            $(".cards").click(function(){
              var cardValue = $(this).attr("value");
              $.ajax({
                type: "POST",
                url: "<?php echo site_url('/GameControl/setCard'); ?>",
                data: 'cardValue='+cardValue,
                success: function(data){
                  $('#listStory').html(data);
                }
              });
            });
          });
        </script>
      </div>
      
   </div>
      <!-- Buttons for testing card placement REMOVE LATER-->
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>    
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