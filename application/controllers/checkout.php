<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		if($_SESSION['login']){
			$this->load->view('header',$pageData);
			$this->load->view('checkout',$pageData);
		}
		else {
			$_SESSION["page"]="checkout";
			echo "<script>window.location = '" . base_url() . "login'</script>";
		}
	}
	public function checkout(){
			unset($_SESSION["cart_item"]);
			unset($_SESSION["total"]);
	}
}
