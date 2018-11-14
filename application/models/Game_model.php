<?php

class Game_model extends CI_Model
{

	function getUserName()
	{
		$name = "John";
		return $name->result();
	}

	function setAdminInfo()
	{
		$userInfo = array(
			'userName' => $name,
			'userVote' => '0',
			'isAdmin' => '1'
		);
	}

	function setUserInfo()
	{
		$userInfo = array(
			'userName' => $name,
			'userVote' => '0',
			'isAdmin' => '0'
		);
	}
}