<!--
    Created by Josh Tyra
    10/13/2018
-->

<?php
class User_model extends CI_model
{


<<<<<<< HEAD
// Insert into user database.
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
public function register_user($user)
{


  $this->db->insert('user', $user);

}
<<<<<<< HEAD
// Login system email and password.
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
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
<<<<<<< HEAD
// Check if email exsit in database
=======
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
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


}


?>