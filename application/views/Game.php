<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
?>

<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body>

<!--Buttons and storyboard-->
  <div class="leftSide">
    <!--Buttons for Admin to control the game-->
    <div class="buttons">
      <ul>
        <li>Reveal Cards</li>
        <li>Next Story</li>
        <li>End Session</li>
      </ul>
    </div>
    <!-- Container for stories-->
    <div class="storyBox">
      <p>I'm looking at least you got distant to go out for lunch at least you got distant I will have it for the last two people I felt that it was the best way possible I would like this is what we are my favorite but it's a little more about that but it's a little bit more time to do that but I'm driving back and I will never understand why not sure how I got a headache to go out for lunch at my place to be at my little one hope your doing ok just got a text saying you don't need me for the next couple weeks I think</p>
    </div>
  </div>


<!--Gameboard-->
  <div class="rightSide">
    <table class="cardTable">
      <!-- Top row of names-->
      <tr>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
      </tr>
      <!-- Top row of cards -->
      <tr>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
      </tr>
      <!-- Bottom row of cards -->
      <tr>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/blank.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/back.png" alt="Playing card back" class="backCard" />
        </th>
        <th>
          <img src="assets/images/cards/blank.png" alt="Playing card back" class="backCard" />
        </th>
      </tr>
      <!-- Bottom row of names -->
      <tr>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
        <th>
          <p>Jim</p>
        </th>
      </tr>         
    </table>
<!-- Card tray at bottom of screen-->
    <table class="cardContainer">
      <tr>
        <th>
          <img src="assets/images/cards/1.png" alt="Playing card 1" class="playCard" />
        </th>
        <th>
          <img src="assets/images/cards/2.png" alt="Playing card 2" class="playCard" />
        </th>
        <th>
          <img src="assets/images/cards/3.png" alt="Playing card 3" class="playCard" />
        </th>
        <th>
          <img src="assets/images/cards/5.png" alt="Playing card 5" class="playCard" />
        </th>
        <th>
          <img src="assets/images/cards/8.png" alt="Playing card 8" class="playCard" />
        </th>
        <th>
          <img src="assets/images/cards/13.png" alt="Playing card 13" class="playCard" />
        </th>                              
        <th>
          <img src="assets/images/cards/Inf.png" alt="Playing card Inf" class="playCard" />
        </th>   
        <th>
          <img src="assets/images/cards/Question.png" alt="Playing card ?" class="playCard" />
        </th>               
      </tr>
    </table>
  </div>
</body>
</html>