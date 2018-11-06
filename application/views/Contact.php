<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<?php echo link_tag('assets/css/contact_us_formStyle.css'); ?>
<html>
<head>
	<title>Planning Poker Home</title>
</head>
<body class="bg" background="<?php echo base_url();?>/assets/images/contact_us.png">
	  <div class="topnav">
      <a href="<?php echo site_url();?>/User/index">Home</a>
      <a href="<?php echo site_url();?>/User/planningPoker">Planning Poker</a>
      <a class="active" href="">Contact</a>
      <a href="<?php echo site_url();?>/User/aboutPage">About</a>
  </div>
  <br><br><br><br><br>
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
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
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
</body>
</html>