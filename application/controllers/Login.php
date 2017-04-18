<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('home',$_SESSION['user_lang']);
	}
	public function index()
	{
		$pageData = array(
			'current_lang' => $_SESSION['user_lang'],
			'css_files'	   => array(
				base_url() . 'css/bootstrap.min.css',
				base_url() . 'css/font-awesome.min.css',
				base_url() . 'css/animate.min.css',
				base_url() . 'css/owl.carousel.css',
				base_url() . 'css/owl.transitions.css',
				base_url() . 'css/prettyPhoto.css',
				base_url() . 'css/main.css',
				base_url() . 'css/responsive.css',
			),
		);
		$this->load->view('header',$pageData);
		$this->load->view('login',$pageData);

	}

	public function login(){
		if($_POST){

				$this->load->model('User');

			$UserData=array(
				'account'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

			$loginResult=$this->User->login($UserData);
			if ($loginResult==TRUE) {
				$_SESSION['login'] = TRUE; // Initializing Session
				$_SESSION['username']=$_POST['username'];
				if(isset($_SESSION["page"])){
					echo base_url().$_SESSION["page"];
				}
			}else {
				$_SESSION['login'] = FALSE;
				$_SESSION['error_msg'] = 1; //1 for login fail
				$_SESSION['page'] = "login";
				echo base_url().$_SESSION['page'];
			}

		}
		else
			echo "failed";
	}

	public function logout(){
		$_SESSION['login'] = FALSE;
		session_unset();
		 echo "<script>window.location = '" . base_url() . "'</script>";
	}

	public function forgot_password()
	{
		if($_POST)
			echo "success";
		else
			echo "failed";
	}

}
