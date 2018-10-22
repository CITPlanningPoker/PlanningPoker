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
<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<?php echo link_tag('assets/css/contact_us_formStyle.css'); ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<!DOCTYPE html>
<<<<<<< HEAD
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<?php echo link_tag('assets/css/contact_us_formStyle.css'); ?>
=======
<?php echo link_tag('assets/css/buttonStyle.css'); ?>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/loginStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
>>>>>>> c57ee953e999e0fa4ce462e8fc1105950c896c7a
>>>>>>> a76f7aa8028498f140e24debbfec5aaf5d96166a
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/contact_us.png">
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
	  <div class="topnav">
      <a href="<?php echo site_url();?>/User/index">Home</a>
      <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
      <a class="active" href="">Contact</a>
      <a href="">About</a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
	  <div class="topnav">
      <a href="index">Home</a>
      <a href="">Planning Poker</a>
      <a class="active" href="">Contact</a>
      <a href="<?php echo site_url();?>/Welcome/aboutIndex">About</a>
>>>>>>> a76f7aa8028498f140e24debbfec5aaf5d96166a
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
  </div>
  <?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit']))
{
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message))
    {
        
<<<<<<< HEAD
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
=======
<<<<<<< HEAD
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
=======
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }
        else
        {
            // Recipient email
            $toEmail = 'joshuatyra@student.bpcc.edu';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers))
            {
                $statusMsg = 'Your contact request has been submitted successfully !';
                $msgClass = 'succdiv';
            }
            else
            {
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }
    else
    {
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
<div align="center">
  <h2>Contact Us</h2>
<div class="contactFrm">
    <?php if(!empty($statusMsg))
    { ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <div align="center">
    <form action="" method="post">
        <h4>Name</h4>
        <input type="text" name="name" placeholder="Your Name" required="">
        <h4>Email </h4>
        <input type="email" name="email" placeholder="Email Address" required="">
        <h4>Subject</h4>
        <input type="text" name="subject" placeholder="Write subject" required="">
        <h4>Message</h4>
        <textarea name="message" placeholder="Write your message here" required=""></textarea>
        <br>
        <input type="submit" name="submit" value="Submit">
        <div class="clear"> </div>
    </form>
</div>
</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> c57ee953e999e0fa4ce462e8fc1105950c896c7a
>>>>>>> a76f7aa8028498f140e24debbfec5aaf5d96166a
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
</body>
</html>