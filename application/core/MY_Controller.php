<?php
class MY_Controller extends CI_Controller {


	public function __construct() {
		parent::__construct();
		//$this->load->database();
		//if (!$this->input->is_cli_request()) {
		//	$this->load->library('session');
		//}

		GLOBAL $pagenum;
		$pagenum = 'index';
	}


	function _head($parameter) {
		GLOBAL $pagenum;
		// $this->load->config('gdblogadmin');

		if ($parameter == 'index') {
			$pagenum = 'index';
		} else if($parameter == 'about_us') {
			$pagenum = 'about_us';
		} else if($parameter == 'news') {
			$pagenum = 'news';
		} else if($parameter == 'forum') {
			$pagenum = 'forum';
		} else if($parameter == 'business') {
			$pagenum = 'business';
		} else if ($parameter == 'hr') {
			$pagenum = 'hr';
		} else if ($parameter == 'education') {
			$pagenum = 'education';
		} else 
			$pagenum = '';

		$this->load->view('header', array('pagenum'=>$pagenum));
	}

	function _footer() {
		GLOBAL $pagenum;
		$this->load->view('footer', array('pagenum'=>$pagenum));

	}
	
}