<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GameControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('html');
	}

	/**
	* Starts the game and asigns Admin status
	*** WIP: Lock this button after an Admin starts the game
	**/
	public function startAdminGame()
	{
		$name = $_SESSION['userName'];		
		
		$userInfo = array(
			'userID' => '1',
			'userName' => $name,
			'userVote' => '0',
			'isAdmin' => '1'
		);

		$this->db->insert('vote', $userInfo);

		//Loads the game
		$this->load->view('GameTest');
	}

	/** 
	* Allows other users to join the current game
	*** WIP: Lock this button until an Admin starts the game
	**/
	public function startPlayerGame()
	{
		$name = $_SESSION['userName'];		
		//$checkID = $this->db->get('vote', 'userID');
		$last_row=$this->db->select('userID')->order_by('userID', 'desc')->limit(1)->get('vote')->row();
		$nextID['viewID'] = $last_row;
		
/*
		$userInfo = array(
			'userID' => $nextID,
			'userName' => $name,
			'userVote' => '0',
			'isAdmin' => '0'
		);
*/
		//$this->db->insert('vote', $userInfo);

		$this->load->view('createSession', $nextID);
		//Loads the game
		//$this->load->view('GameTest');
	}


	public function setCard()
	{
		$name = $_SESSION['userName'];

		$this->db->where('userName', $name);
		
		$cardValue['card'] = $this->input->post('card');

		$this->load->view('GameTest', $last_row);

		/**
		* Select row by userID and/or userName
		* Insert new card value
		**/
	}

	public function revealCards()
	{
		/**
		* This function needs to be automatically called when all cards have been placed by the users.
		* It can also be manually called by the admin.			
		**/
	}

	public function resetGame()
	{
		/**
		* This function will reset all cards on the gameboard
		**/
	}

	public function endGame()
	{
		/**
		* This function will terminate the game by remove all users from the game page and return them to the dashboard.
		* It should also wipe clean the vote database for the next game that starts.
		**/
	}

}