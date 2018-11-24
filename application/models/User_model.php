<!--
    Created by Josh Tyra
    10/13/2018
-->

<?php
class User_model extends CI_model
{


// Insert into user database.
public function register_user($user)
{


  $this->db->insert('user', $user);

}
// Sets users onilne status to 1, meaning the user is online and store username.
public function setuserOnline($ci_regenerate,$user)
{

  $this->db->select('*');
  $this->db->from('ci_sessions');
  $this->db->set('Online', 'Online+1', FALSE);
  $this->db->set('User', $user);
  $this->db->where('id',$ci_regenerate);
  $this->db->where('Online','0');
  $this->db->update("ci_sessions");

}
// Sets users onilne status to 0, meaning the user is Offline.
public function setuserOffline($ci_regenerate)
{

  $this->db->select('*');
  $this->db->from('ci_sessions');
  $this->db->set('Online', 'Online-1', FALSE);
  $this->db->where('id',$ci_regenerate);
  $this->db->where('Online','1');
  $this->db->update("ci_sessions");

}
//Store card value in database
public function setcardValue($ci_regenerate,$value)
{

  //var_dump($value);
  //die();
  $this->db->select('*');
  $this->db->from('ci_sessions');
  $this->db->set('userVote', 'userVote+3', FALSE);
  $this->db->where('id',$ci_regenerate);
  $this->db->where('userVote','0');
  $this->db->update("ci_sessions");


}
// Get active users to display in dashboard.
public function displayUsers()
{
  $this->load->helper('array');
  $this->db->select('User');
  $this->db->select('id');
  $this->db->from('ci_sessions');
  $this->db->where('Online','1');

  $query = $this->db->get()->result();

  //var_dump($query);
  //die();

    return $query;

}
public function displaygameUsers($id)
{
  
  $this->load->helper('array');
  $this->db->select('User');
  $this->db->from('ci_sessions');
  $this->db->where_in('id',$id);

  $query = $this->db->get()->result();

  //var_dump($query);
  //die();

 //  foreach ($query as $row)
 //  {

  //    return $row;
  // }

  return $query;

}
// Used to display all session Ids of active users.
public function displaySessions()
{

  $this->load->helper('array');

  $this->db->select('id');
  $this->db->from('ci_sessions');
  $this->db->where('Online','1');

  $query = $this->db->get()->result();

  //var_dump($users);
  //die();

    return $query;


}

// Login system email and password.
public function login_user($email,$pass)
{

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $this->db->where('password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else
  {
    return false;
  }


}
// Check if email exsit in database
public function email_check($email)
{

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);

  $query=$this->db->get();

  if($query->num_rows()>0)
  {
    return false;
  }
  else
  {
    return true;
  }

}

public function getonlineUsers()
{
  $this->db->where('Online','1');
  $query = $this->db->get('ci_sessions');

  return $query->num_rows();



}

}


?>