<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends MY_Controller {
 	public function __construct()
    	{
        		parent::__construct();
    	}

    	public function login() {
		$this->_head();

		$this->load->view('login');
    		$this->_footer();
    	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('/Central'));
	}

    	public function register() {
                $this->_head();

                $this->load->library('form_validation');
 
                $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
                $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[3]|max_length[20]');
                $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
                $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
             
                if($this->form_validation->run() === false){
                    $this->load->view('joinus');    
                } else {
                    if(function_exists('password_hash')) {
                        $this->load->helper('password');
                    }
                    $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

                    $this->load->model('user_model');
                    $this->user_model->add(array(
                        'email'=>$this->input->post('email'),
                        'password'=>$hash,
                        'nickname'=>$this->input->post('nickname')
                        ));
                    $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
                    redirect(site_url('/Central'));
                }
         
             
                $this->_footer();   
            }

    	public function authentication() {
    		$this->load->model('user_model');
                  $user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
                  if(function_exists('password_hash')) {
                        $this->load->helper('password');
                    }
                    
    		if ( $this->input->post('email') == $user->email ) {
                          $this->session->set_userdata('is_login', true);
                          $returnURL = $this->input->get('returnURL');
                          log_message('info', $returnURL);
                          redirect($returnURL ? $returnURL : site_url('/Central'));
                    
    		} else {
    			$this->session->set_flashdata('message', '로그인에 실패 했습니다.');
    			redirect(site_url('/').'auth/login');
    		}
    	}

    }