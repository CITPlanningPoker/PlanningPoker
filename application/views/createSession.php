<!DOCTYPE html>
<?php
	echo link_tag('assets/css/navBar.css');
?>
<html>
<head>
	<title>Planning Poker Create or Join Session</title>
</head>

<body>
<!-- Nav bar -->
  <div class="navbar">
      <a href="">Planning Poker</a>
      <!-- This could be added if multiple sessions are implemented
        <a href="">Sessions></a>-->
      <a href="">Contact Us</a>
      <a href="">About</a>
  </div> 

	<div class="createSession">
		<form role="form">
			<label for="sessionName">Session name:</label>
		</form>
	</div>

	<div class="joinSession">
	</div>
	
</body>

</html>