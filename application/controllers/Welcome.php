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
	
	//Default location when accessing the website
	//Change to login page when done testing
	public function index()
	{
		//$this->load->view('login');
		$this->load->view('game');
		//$this->load->view('createSession');		
	}

	public function planningPoker()
	{
		$this->load->view('createSession');	
	}

	public function contactUs()
	{
		$this->load->view('contact');
	}

	public function aboutPoker()
	{
		$this->load->view('about');
	}
}
