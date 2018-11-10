<!--
    Created by Josh Tyra
    10/13/2018
-->
<?php echo link_tag('assets/css/bootstrap.css'); ?>
<?php echo link_tag('assets/css/dashboardStyle.css'); ?>
<?php echo link_tag('assets/css/font-awesome.min.css'); ?>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php
if(!$email)
{

  redirect('/User/login_view');
}

 ?>
 <!--
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <table class="table table-bordered table-striped">
        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('userName'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('email');  ?></td>
          </tr>
      </table>
    </div>
  </div>
<a href="<?php echo site_url('/User/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
<a href="<?php echo site_url('/User/planningPoker');?>" >  <button type="button" class="btn-primary">Game</button></a>
</div>
  </body>
</html>
-->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/contact_us.png">
<h2 style="text-align:center">User Dashboard</h2>
<div class="card">
  <h1>Welcome <?php echo $this->session->userdata('userName'); ?>!</h1>
  <p class="title">Dashboard</p>
  <p></p>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <p><a href="<?php echo site_url('/User/user_logout');?>"><button>Log Out</button></p>
 <p><a href="<?php echo site_url('/User/planningPoker');?>"><button>Game</button></p>
    <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>

</body>
</html>