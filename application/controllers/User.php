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
  	$this->load->helper('url');
    $this->load->helper('html');
  	$this->load->model('User_model');
    $this->load->library('session');
    

}
public function index()
{
	$this->load->view('register.php');
}

public function register_user()
{
 
      $user=array(
      'userName'=>$this->input->post('userName'),
      'email'=>$this->input->post('email'),
      'password'=>sha1($this->input->post('password'))
        );
        print_r($user);
 
$email_check=$this->User_model->email_check($user['email']);
 
if($email_check)
{
  $this->User_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('/User/login_view');
 
}
else
{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('User');
 
 
}
 
}


public function login_view()
{
 
	$this->load->view('login.php');
 
}


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

 public function user_profile()
{
 
	$this->load->view('user_profile.php',$data);
 
}

public function user_logout()
{
 
  $this->session->sess_destroy();
  redirect('/User/login_view', 'refresh');
}

}
?>