<!--
    Created by Josh Tyra
    10/13/2018
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{

public function __construct()
{

    parent::__construct();
<<<<<<< HEAD
  	$this->load->helper(array('form', 'url'));
=======
<<<<<<< HEAD
  	$this->load->helper(array('form', 'url'));
=======
<<<<<<< HEAD
  	$this->load->helper(array('form', 'url'));
=======
  	$this->load->helper('url');
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
    $this->load->helper('html');
  	$this->load->model('User_model');
    $this->load->library('session');
    

}
<<<<<<< HEAD
// Our Home Page Method
=======
<<<<<<< HEAD
// Our Home Page Method
=======
<<<<<<< HEAD
// Our Home Page Method
=======
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
public function index()
{
	$this->load->view('register.php');
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
// Register our user to database
public function register_user()
{
      $this->load->library('form_validation');

      $this->form_validation->set_rules('userName', 'Username', 'required');
<<<<<<< HEAD
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passwordconfirmation', 'Password', 'required|matches[password]');
=======
<<<<<<< HEAD
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passwordconfirmation', 'Password', 'required|matches[password]');
=======
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780

  // Validate our form first "it could be blank"
if ($this->form_validation->run() == FALSE)
{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.'); 
        redirect('User');
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======

public function register_user()
{
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
 
      $user=array(
      'userName'=>$this->input->post('userName'),
      'email'=>$this->input->post('email'),
      'password'=>sha1($this->input->post('password'))
        );
        print_r($user);
 
$email_check=$this->User_model->email_check($user['email']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780

if($email_check)
{
  $this->User_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
 
if($email_check)
{
  $this->User_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
  redirect('/User/login_view');
 
}
else
{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('User');
 
 
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780


 
}

// Load our login view
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
 
}


>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
public function login_view()
{
 
	$this->load->view('login.php');
 
}

<<<<<<< HEAD
// Log us in.
=======
<<<<<<< HEAD
// Log us in.
=======
<<<<<<< HEAD
// Log us in.
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
 public function login_user()
{
  $user_login=array(
 
  'email'=>$this->input->post('user_email'),
  'password'=>sha1($this->input->post('user_password'))
 
    );
 
    $data=$this->User_model->login_user($user_login['email'],$user_login['password']);

 //   var_dump($data);
  //  die();


      if($data)
      { 
        $this->session->set_userdata('userName',$data['userName']);
        $this->session->set_userdata('email',$data['email']);
 
        $this->load->view('user_profile.php',$data);
 
      }
      else
      {
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('login.php');
 
      }
 
 
}
<<<<<<< HEAD
// Load our user profile "dashboard"
=======
<<<<<<< HEAD
// Load our user profile "dashboard"
=======
<<<<<<< HEAD
// Load our user profile "dashboard"
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
 public function user_profile()
{
 
	$this->load->view('user_profile.php',$data);
 
}
<<<<<<< HEAD
// Log out
=======
<<<<<<< HEAD
// Log out
=======
<<<<<<< HEAD
// Log out
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
public function user_logout()
{
 
  $this->session->sess_destroy();
  redirect('/User/login_view', 'refresh');
}

}
?>