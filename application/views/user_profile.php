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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/contact_us.png">
<h2 style="text-align:center">User Dashboard</h2>
<h1 style="text-align:center">Welcome <?php echo $this->session->userdata('userName'); ?>!</h1>
<br><br>
<form method="POST" action="<?php echo site_url('/User/addplayers');?>">
<table align="center" class="panel panel-primary" width="1100" border="1" cellspacing="5" cellpadding="5" style="overflow-x:auto;">
                    <tr style="background:#CCC">
                      <th class="panel-heading">User ID</th>
                      <th class="panel-heading">UserName</th>
                      <th class="panel-heading">Status</th>
                      <th class="panel-heading">Session ID</th>
                      <th class="panel-heading">Add to Game</th>
                    </tr>
                    <?php $i = 1 ?>
                  <?php foreach ($activeUsers as $row): ?>
                    <tr>
                    <td align="center"><?php echo $i; ?></td>
                    <td align="center"><?php echo $row->User; ?></td>
                    <td align="center" style="color: green">Active</td>
                    <td align="center"><?php echo $row->id; ?></td>
                    <td align="center"><input type= "checkbox" name="checkbox[]" value="<?php echo $row->id; ?>"/></td>
                  </tr>
                  <?php $i++ ?>
                  <?php endforeach; ?>
                  </table>
                  <p align="center"><button value="submit">Add Players</button></p>
                  <p align="center"><a href="<?php echo site_url('/User/user_logout');?>"><button>Log Out</button></p></a>
                </form>
</body>
</html>