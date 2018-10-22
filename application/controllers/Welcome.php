<!--
    Created by Josh Tyra
    10/13/2018
-->

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('html');

	}
	public function index()
	{
		$this->load->view('Home');
	}
	public function aboutIndex()
	{

	}
		public function contactUS()
	{

		$this->load->view('Contact');

	}
	public function planningPoker()
	{
		$this->load->view('Game');

	}
	public function adduserName()
	{
		
	}
}
