<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/buttonStyle.css'); ?>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/loginStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<html>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/loginForm.js" ></script>
<head>
	<title>Planning Poker Home</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
  <div class="topnav">
      <a class="active" href="">Home</a>
      <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
      <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
      <a href="">About</a>
  </div> 
<br>
<br>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="">Sign In</a></p>
    </form>
    <form class="login-form" id="form-id" name="login" method="post">
      <input type="text" placeholder="Username" name="username" id="username" />
      <input type="password" placeholder="Password" name="password" id="password" />
      <button value="Login" id="submit" onclick="validate()">login</button>
      <p class="message">Not registered? <a href="">Create an account</a></p>
      <p class="message">Forgot Password? <a href="">Reset Password</a></p>
    </form>
  </div>
</div>
</body>
</html>