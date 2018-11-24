<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<?php echo link_tag('assets/css/bootstrap.css'); ?>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/detectMobile.js"></script>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body onload="mobileAndTabletcheck()" class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
      <div class="topnav">
        <a class="active" href="">Home</a>
        <a href="<?php echo site_url();?>/User/planningPoker">Planning Poker</a>
        <a href="<?php echo site_url();?>/User/contactUS">Contact</a>
        <a href="<?php echo site_url();?>/User/aboutPage">About</a>
      </div>
<span style="background-color:red;">
  <br><br><br><br><br><br>
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
                  if($error_msg)
                  {
                    echo $error_msg;
                  }
                   ?>
                      <form role="form" method="post" action="<?php echo site_url('/User/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="User" name="userName" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm E-mail" name="emailconfirmation" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" name="passwordconfirmation" type="password" value="">
                              </div>
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