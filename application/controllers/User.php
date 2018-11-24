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
  	$this->load->helper(array('form', 'url'));
    $this->load->helper('html');
  	$this->load->model('User_model');
    $this->load->library('session');
    

}

// Our Home Page Method
public function index()
{
	$this->load->view('register.php');
}

// Register our user to database
public function register_user()
{
      $this->load->library('form_validation');

      $this->form_validation->set_rules('userName', 'Username', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('emailconfirmation', 'Email', 'required|matches[email]');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passwordconfirmation', 'Password', 'required|matches[password]');

  // Validate our form first "it could be blank"
if ($this->form_validation->run() == FALSE)
{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.'); 
        redirect('User');
}
 
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
  $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
  redirect('/User/login_view');
 
}
else
{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('User');
 
 
}


 
}

// Load our login view
public function login_view()
{
 
	$this->load->view('login.php');
 
}

// Log us in.
 public function login_user()
{
  $user_login=array(
 
  'email'=>$this->input->post('user_email'),
  'password'=>sha1($this->input->post('user_password'))
 
    );

    

    $data = $this->User_model->login_user($user_login['email'],$user_login['password']);
      
      if($data)
      { 
        $this->session->set_userdata('userName',$data['userName']);
        $this->session->set_userdata('email',$data['email']);
        //This sets the session ID and the user in the database.
        $this->User_model->setuserOnline(session_id(),$data['userName']);
        //This just gets the count of online users.
        $this->session->set_userdata('online_users',$this->User_model->getonlineUsers());

        $this->session->set_userdata('sessionID',session_id());

        //$this->session->set_userdata('activeUsers',$this->User_model->activeUsers());
        $data['activeUsers'] = $this->User_model->displayUsers();
        $data['allSessions'] = $this->User_model->displaySessions();

       // var_dump($data['activeUsers']);
       // die();

        $this->load->view('user_profile.php',$data);
        
 
      }
      else
      {
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('login.php');
 
      }
 
}
// Our game page.
public function planningPoker()
{
  $this->load->view('Game.php');

}
//Call our About page from controller
public function aboutPage()
{

  $this->load->view('About.php');

}
//Call our contactus page from controller
public function contactUS()
{

  $this->load->view('Contact.php');

}
//Call our start game
public function addPlayers()
{
      if ($this->input->post()) 
      {
        //echo "<pre>"; print_r($this->input->post()); exit();
        $game['ids'] = $this->input->post();


 //       if ($game['ids']== session_id()) 
  //      {

  //        $game['ids'] = NULL;

  //      }

        foreach ($game['ids'] as $value) 
        {

          $game['players'] = $this->User_model->displaygameUsers($value);
          
        }

        //$this->session->set_userdata('gamePlayers',$game['players']);
      }


       

      //This test is if the user checks there own row in the dashboard table.
      // If so we ignore there selection.

    $this->session->set_userdata('gamePlayers',$game['players']);

    $this->load->view('Game');

      
}
//Set our card value
public function setCard3()
{

  $this->User_model->setcardValue(session_id(),'3');
  redirect('/User/planningPoker');


}
//Set our card value
public function setCard5()
{

  $this->User_model->setcardValue(session_id(),'5');
  redirect('/User/planningPoker');


}
// Log out
public function user_logout()
{
  $this->User_model->setuserOffline(session_id());
  $this->session->sess_destroy();
  redirect('/User/login_view', 'refresh');
}

}
?>