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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
>>>>>>> 1de051c77295534e73a37d80059ba2a0e130395d
<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
  <div class="topnav">
      <a class="active" href="">Home</a>
      <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
      <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
      <a href="">About</a>
  </div> 
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<!-- Some Change -->
<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
  <div class="topnav">
      <a class="active" href="">Home</a>
      <a href="">Planning Poker</a>
      <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
      <a href=<?php echo site_url();?>/Welcome/aboutIndex">About</a>
  </div> 
=======
<<<<<<< HEAD
<!-- Some Change -->
<body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
  <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#news">Planning Poker</a>
      <a href="index.php/Welcome/contactUS">Contact</a>
      <a href="index.php/Welcome/aboutIndex">About</a>
  </div> 
=======
<!-- change -->
<body class="bg" background="assets/images/Home.jpg">
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">Planning Poker</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div> 
>>>>>>> 33856b05e813a888b47a77ae34b33df4aa2acd8b
>>>>>>> c57ee953e999e0fa4ce462e8fc1105950c896c7a
<!--
	Experimental Buttons concept.
	<div class="buttons-flex">
  	<div><button class="btn blue">About</button></div><div><button class="btn blue">Login</button></div><div><button class="btn blue">Register</button></div><div><button class="btn blue">Contact Us</button></div>
	</div>
-->
<br>
>>>>>>> a76f7aa8028498f140e24debbfec5aaf5d96166a
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
>>>>>>> 1de051c77295534e73a37d80059ba2a0e130395d
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