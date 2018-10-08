<!DOCTYPE html>
<?php echo link_tag('assets/css/buttonStyle.css'); ?>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/loginStyle.css'); ?>
<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
<!--
	Experimental Buttons concept.
	<div class="buttons-flex">
  	<div><button class="btn blue">About</button></div><div><button class="btn blue">Login</button></div><div><button class="btn blue">Register</button></div><div><button class="btn blue">Contact Us</button></div>
	</div>
-->
<br>
<br>
<br>
<br>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>