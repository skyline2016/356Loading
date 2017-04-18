<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('home',$_SESSION['user_lang']);
		if (!isset($_SESSION["cart_item"]))	$_SESSION["cart_item"]=array();
		if (!isset($_SESSION["total"]))	$_SESSION["total"]=0;
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
		$this->load->view('home',$pageData);
		$this->load->view('footer',$pageData);
	}

	public function lang_switch()
	{
		if ($_SESSION['user_lang'] == 'en'){
			$_SESSION['user_lang'] = 'zh';
		}else {
			$_SESSION['user_lang'] = 'en';
		}
		echo "<script>window.location = '" . base_url() . "'</script>";
	}
}
