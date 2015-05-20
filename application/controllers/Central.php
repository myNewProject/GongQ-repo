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

	public function getForum($table) {
		switch ($table) {
			case '1':
				$table = "forum_schedule";
				break;
			case '2':
				$table = "HR";
				break;
			case '3':
				$table = "news";
				break;
			default:
				# code...
				break;
		}

		$this->load->model('forum_model');
		$data = $this->forum_model->gets($table);

		$HEADER_HTML = "
			<div class='col-sm-6 col-md-4 col-lg-4'>
				<div class='card-example post'>
					<div class='thumbnail'>";
		$FOOTER_HTML = "
					</div>
				</div>
			</div>
			";
		$return_html = "";
		foreach ($data as $items) {

			$return_html .= $HEADER_HTML;
			$return_html .= "
						<time> &nbsp;
						</time>
						<a href='#' class='capton'><img src='".site_url('/static/user')."/".$items->poster."'>
						<hr>
						<h4 class='list-group-item-heading'>".$items->title."</h4>
						<p class='list-group-item-text'>".$items->context."</p>
						</a>
						<hr>
						<p style='align-left'>".$items->forum_date."</p>
						";
			$return_html .= $FOOTER_HTML;
		}

		echo $return_html;
	}

	public function add_forum() {

		// 로그인 필요
		// 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

		if (!$this->session->userdata('is_login')) {
			$this->session->set_flashdata('message', '세션이 만료되었습니다.');
			redirect('/Central?returnURL='.rawurlencode(site_url('/Central')));
		}

		// 모델, form_validation 로드
		$this->load->model('forum_model');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('host', '주최자', 'required');
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('context', '본문', 'required');
		$this->form_validation->set_rules('forum_date', '포럼날짜', 'required');
		$this->form_validation->set_rules('day_night', '오전/오후', 'required');
		$this->form_validation->set_rules('hour', '포럼 시작 시간', 'required');
		$this->form_validation->set_rules('poster', '포스터');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('message', '양식 제출 실패.');
			$redirect(site_url('/Central/reg_forum'));
		} else {
			$file_name = $this->upload_receive();
			$this->forum_model->add($this->input->post('host'), $this->input->post('title'), $this->input->post('context'), $file_name, $this->input->post('forum_date'), $this->input->post('day_night'), $this->input->post('hour'));
			
			$this->session->set_flashdata('message', '포럼 등록에 성공했습니다.');
			redirect(site_url('/Central/forum'));
		}
		
	}

	public function forum() {
		$this->_head('forum');

		$this->load->view('forum');

		$this->_footer();
	}

	public function reg_forum() {

		// 로그인 필요
		// 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

		if (!$this->session->userdata('is_login')) {
			$this->session->set_flashdata('message', '로그인이 필요한 서비스 입니다.');
			redirect(site_url('/Central'));
		}

		$this->_head('forum');

		$this->load->view('reg_forum');

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

	public function intern() {
		$this->_head('hr');

		$this->load->view('intern');

		$this->_footer();
	}

	public function upload_receive() {
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './static/user';
		// gif,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '10000';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '1920';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '1080';
		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('poster')) {
			echo $this->upload->display_errors();
		} else {
			$data = $this->upload->data();
		}
		
		return $data['file_name'];
	}
}
?>
