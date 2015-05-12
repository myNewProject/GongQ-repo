<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Central extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->database();
		//$this->load->model('category_model');
		log_message('debug', 'central 초기화');
	}

	public function index()
	{
		$this->_head('');

		$this->_footer();

	}	


	public function about_us() {
		$this->_head('about_us');

		$this->load->view('about_us');

		$this->_footer();
	}

	public function news() {
		$this->_head('news');

		$this->load->view('news');

		$this->_footer();
	}

	public function forum() {
		$this->_head('forum');

		$this->load->view('forum');

		$this->_footer();
	}

	public function ksw_business() {
		$this->_head('business');

		$this->load->view('ksw_business');

		$this->_footer();
	}

	public function hr() {
		$this->_head('hr');

		$this->load->view('hr');

		$this->_footer();
	}

	public function joinus() {
		$this->_head('');

		$this->load->view('joinus');

		$this->_footer();
	}

	
}
?>
