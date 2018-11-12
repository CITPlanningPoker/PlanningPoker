
<!DOCTYPE html>
<?php
	echo link_tag('assets/css/navBar2.css');
	echo link_tag('assets/css/sessionStyle.css');
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Planning Poker Create or Join Session</title>
</head>

<body>
<!-- Nav bar -->
	<div class="navBackground"></div>
  <div class="navbar">
      <a href="<?php echo site_url();?>/User/index">Home</a>
      <a class="active" href="">Create game</a>
      <a href="<?php echo site_url();?>/User/PlanningPoker"">Planning Poker</a>
      <a href="<?php echo site_url();?>/User/contactUS">Contact</a>
      <a href="<?php echo site_url();?>/User/aboutPage">About</a>
      <a href="<?php echo site_url();?>/User/user_profile">Profile</a>
      <a href="<?php echo site_url();?>/User/testGame">Test</a>
  </div> 
			
	<div class="main">
		<div class="createContainer">
			<form role="form" action="<?php echo site_url('/GameControl/startAdminGame'); ?>">
				<div class="header">
					<label for="sessionHeader">Create a session</label>
				</div>
				<?php 
					if ($viewID != null){
						echo $viewID;
					}
				?>
				<div class="body">
					<input type="submit" name="createSession" value="Create Session">
				</div>
			</form>
		</div>

		<div class="joinContainer">
			<form role="form" action="<?php echo site_url('/GameControl/startPlayerGame'); ?>">
				<div class="header">
					<label for="joinHeader">Join a session</label>
				</div>
				<div class="body">					
					<input type="submit" name="joinSession" value="Join Session">
				</div>
			</form>
		</div>
	</div>
</body>
</html>