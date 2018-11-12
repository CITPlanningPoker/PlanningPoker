<!DOCTYPE html>

<head>
	<title>Testing Game</title>
</head>

<body>								  
	<div class="display" id="display">
		<?php
			echo $card;
			echo "<br>";
		?>		
	</div>

	<div class="select" id="select">	
		<form role="form" method="post" action="<?php echo site_url('/GameControl/setCard'); ?>">
			<input type="submit" name="card" value="1">
			<input type="submit" name="card" value="2">
			<input type="submit" name="card" value="3">
			<input type="submit" name="card" value="4">
			<input type="submit" name="card" value="5">
			<input type="submit" name="card" value="6">
			<input type="submit" name="card" value="7">
			<input type="submit" name="card" value="8">
		</form>
	</div>

</body>

</html>