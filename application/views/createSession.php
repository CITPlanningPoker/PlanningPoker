<!DOCTYPE html>
<?php
	echo link_tag('assets/css/navBar.css');
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
  	<div class="navbar" id="navBar">
		<a href="<?php echo site_url();?>/User/createSession">Planning Poker</a>
		<!-- This could be added if multiple sessions are implemented
		<a href="">Sessions></a>-->
		<a href="<?php echo site_url();?>/User/contact">Contact Us</a>
		<a href="<?php echo site_url();?>/User/about">About</a>
		<a href="<?php echo site_url();?>/User/login" class="login">Login</a>
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
		<div class="createContainer">
			<form role="form">
				<div class="header">
					<label for="sessionHeader">Create a session</label>
				</div>
				<div class="body">
					<label for="sessionName">Session name:</label><br>
					<input type="text" id="sessionName" name="sessionName"><br>
					<input type="button" id="createSession" name="createSession" value="Create Session">
				</div>
			</form>
		</div>

		<div class="joinContainer">
			<form role="form">
				<div class="header">
					<label for="joinHeader">Join a session</label>
				</div>
				<div class="body">
					<label for="joinName">Session ID:</label><br>
					<input type="text" id="sessionID" name="sessionID"><br>
					<input type="button" id="joinSession" name="joinSession" value="Join Session">
				</div>
			</form>
		</div>
	</div>
</body>
</html>