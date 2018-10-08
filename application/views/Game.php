<!DOCTYPE html>
<?php 
  echo link_tag('assets/css/gameStyle.css'); 
?>

<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body class="bg" background="assets/images/Home.jpg">
  <!-- -->
  <div class="leftSide">
    <div class="buttons">
      <ul>
        <li>Reveal Cards</li>
        <li>Next Story</li>
        <li>End Session</li>
      </ul>
    </div>
    <!-- -->
    <div class="storyBox">
      <p>Information for the story will go here</p>
    </div>
  </div>
  <!-- -->

  <!-- -->
  <div class="rightSide">
    <div style="position: relative; left: 0; right: 0;">
        <img src="assets/images/pokerBoard.png" class="board" alt="board" />   
        <img src="assets/images/cards/back.png" class="cardBack" alt="cardBack" />
    </div>
    <div class="cardContainer">
      <table>
        <tr>
          <th>
            <img src="assets/images/cards/1.png" alt="Playing card 1" />
          </th>
          <th>
            <img src="assets/images/cards/2.png" alt="Playing card 2" />
          </th>
          <th>
            <img src="assets/images/cards/3.png" alt="Playing card 3" />
          </th>
          <th>
            <img src="assets/images/cards/5.png" alt="Playing card 5" />
          </th>
          <th>
            <img src="assets/images/cards/8.png" alt="Playing card 8" />
          </th>
          <th>
            <img src="assets/images/cards/13.png" alt="Playing card 13" />
          </th>                              
          <th>
            <img src="assets/images/cards/Inf.png" alt="Playing card Inf" />
          </th>   
          <th>
            <img src="assets/images/cards/Question.png" alt="Playing card ?" />
          </th>               
        </tr>
      </table>
    </div>
  </div>
</body>
</html>