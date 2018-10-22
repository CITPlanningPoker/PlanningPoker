<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
      <div class="topnav">
        <a class="active" href="">Home</a>
        <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
        <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
        <a href="">About</a>
      </div>
<span style="background-color:red;">
  <br><br><br><br><br><br><br><br>
  <div align="center" class="container"><!-- container class is used to centered the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
<<<<<<< HEAD
                  if($error_msg)
                  {
=======
<<<<<<< HEAD
                  if($error_msg)
                  {
=======
<<<<<<< HEAD
                  if($error_msg)
                  {
=======
<<<<<<< HEAD
                  if($error_msg)
                  {
=======
                  if($error_msg){
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
                    echo $error_msg;
                  }
                   ?>
                      <form role="form" method="post" action="<?php echo site_url('/User/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
<<<<<<< HEAD
                                  <input class="form-control" placeholder="User" name="userName" type="text" autofocus>
=======
<<<<<<< HEAD
                                  <input class="form-control" placeholder="User" name="userName" type="text" autofocus>
=======
<<<<<<< HEAD
                                  <input class="form-control" placeholder="User" name="userName" type="text" autofocus>
=======
                                  <input class="form-control" placeholder="Name" name="userName" type="text" autofocus>
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>
<<<<<<< HEAD
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" name="passwordconfirmation" type="password" value="">
                              </div>
=======
<<<<<<< HEAD
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" name="passwordconfirmation" type="password" value="">
                              </div>
=======
<<<<<<< HEAD
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" name="passwordconfirmation" type="password" value="">
                              </div>
=======
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register">
                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b><br></b><a href="<?php echo site_url('/User/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>