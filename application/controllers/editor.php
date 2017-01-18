<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('home',$_SESSION['user_lang']);
		$this->lang->load('shopping',$_SESSION['user_lang']);
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
		$this->load->view('editor',$pageData);
	}
	public function file_handler()
	{
		$img = $_POST["img"];
		echo str_replace("data:image/png;base64,","",$img);

		$content = base64_decode(str_replace("data:image/png;base64,","",$img));

		$file = fopen("./img/test_img.png", "wb");

		fwrite($file, $content);
 		fclose($file);
	}
}
