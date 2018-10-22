<!--
    Created by Josh Tyra
    10/13/2018
-->
<?php
if(!$email)
{

  redirect('/User/login_view');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
</div>
  </body>
</html>