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
<<<<<<< HEAD
// Insert into user database.
=======
<<<<<<< HEAD
// Insert into user database.
=======
<<<<<<< HEAD
// Insert into user database.
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
public function register_user($user)
{


  $this->db->insert('user', $user);

}
<<<<<<< HEAD
// Login system email and password.
=======
<<<<<<< HEAD
// Login system email and password.
=======
<<<<<<< HEAD
// Login system email and password.
=======
<<<<<<< HEAD
// Login system email and password.
=======

>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
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
<<<<<<< HEAD
// Check if email exsit in database
=======
<<<<<<< HEAD
// Check if email exsit in database
=======
<<<<<<< HEAD
// Check if email exsit in database
=======
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
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