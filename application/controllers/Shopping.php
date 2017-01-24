<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

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
		$this->load->view('header',$pageData);
		$this->load->view('shopping',$pageData);
	}

	public function item($item_name)
	{
		$pageData = array(
			'current_lang' => $_SESSION['user_lang'],
			'item_name' => $item_name,
			'css_files'	   => array(
				"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css",
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
		$this->load->view("item",$pageData);
	}

	public function cart($action)
	{
		switch ($action) {
			case 'add':
			$item = $_POST["item_name"]."_".$_POST["size"];

			$itemArray = array($item=>array('quantity'=>$_POST["quantity"]));
			if(!empty($_SESSION["cart_item"])) {
				if(array_key_exists($item,$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($item == $k)	$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
					} else $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				} else 	$_SESSION["cart_item"] = $itemArray;
				$_SESSION["total"] += $_POST["quantity"]*70;
			break;
			case 'list':
				if ($_SESSION["total"]!=0) {
				foreach ($_SESSION["cart_item"] as $item_name => $value) {
					if (strlen($item_name)<14) {
						$output=explode("_", $item_name);
							if ($value["quantity"]>0) {
								echo ' 					<div class="panel-body">
																<div class="row">
																<div class="col-xs-2"><img class="img-responsive" src="'.base_url().'images/portfolio/'.$output[0].'.jpg" width="100" height="70" >
																</div>
																<div class="col-xs-5">
																	<h4 class="product-name"><strong>Macbook sticker design '.$output[0].'</strong></h4><h4><small>This sticker is for '.$output[1].'" macbook</small></h4>
																</div>
																<div class="col-xs-5">
																	<div class="col-xs-6 text-right">
																		<h6><strong>$70.00 <span class="text-muted">x</span></strong></h6>
																	</div>
																	<div class="col-xs-4">
																		<input type="text" class="form-control input-sm" value="'.$value["quantity"].'">
																	</div>
																	<div class="col-xs-2">
																		<button type="button" onclick="delete_item(\''.$item_name.'\')" class="btn btn-link btn-xs">
																			<span class="glyphicon glyphicon-trash"> </span>
																		</button>
																	</div>
																</div>
															</div>
															<hr>
															</div>';
							}
					}
					else {
						echo ' 					<div class="panel-body">
														<div class="row">
														<div class="col-xs-2"><img class="img-responsive" src="'.base_url().substr($item_name,2).'" width="100" height="70" >
														</div>
														<div class="col-xs-5">
															<h4 class="product-name"><strong>Macbook sticker design (customize)</strong></h4><h4><small>This sticker is design by you</small></h4>
														</div>
														<div class="col-xs-5">
															<div class="col-xs-6 text-right">
																<h6><strong>$70.00 <span class="text-muted">x</span></strong></h6>
															</div>
															<div class="col-xs-4">
																<input type="text" class="form-control input-sm" value="'.$value["quantity"].'">
															</div>
															<div class="col-xs-2">
																<button type="button" onclick="delete_item(\''.$item_name.'\')" class="btn btn-link btn-xs">
																	<span class="glyphicon glyphicon-trash"> </span>
																</button>
															</div>
														</div>
													</div>
													<hr>
													</div>';
					}
				}
				echo '    				<div class="panel-footer">
											<div class="row text-center">
												<div class="col-xs-9">
													<h4 class="text-right">Total <strong>$'.$_SESSION['total'].'</h4>
												</div>
												<div class="col-xs-3">
													<a href="'.base_url().'checkout"><button type="button" class="btn btn-success btn-block">
														Checkout
													</button>
													</a>
												</div>
											</div>
										</div>
										';
			}
				else {
				echo ' 					<div class="panel-body">
												<div class="row">
												<div class="col-xs-12"><center><strong> There\'s nothing in the cart yet!</strong></center>
												</div>
											</div>
											</div>
											<div class="panel-footer">
																		<div class="row text-center">
																			<div class="col-xs-9">
																				<h4 class="text-right">Total <strong>$'.$_SESSION['total'].'</h4>
																			</div>
																			<div class="col-xs-3">
																				<a><button onclick="empty_cart_warning()" type="button" class="btn btn-success btn-block">
																					Checkout
																				</button>
																				</a>
																			</div>
																		</div>
																	</div>';
			}
			break;
			case 'checkout':
			if ($_SESSION["total"]!=0) {
				foreach ($_SESSION["cart_item"] as $item_name => $value) {
					$output=explode("_", $item_name);
						if ($value["quantity"]>0) {
							echo ' 					<div class="panel-body">
															<div class="row">
															<div class="col-xs-2"><img class="img-responsive" src="'.base_url().'images/portfolio/'.$output[0].'.jpg" width="100" height="70" >
															</div>
															<div class="col-xs-5">
																<h4 class="product-name"><strong>Macbook sticker design '.$output[0].'</strong></h4><h4><small>This sticker is for '.$output[1].'" macbook</small></h4>
															</div>
															<div class="col-xs-5">
																<div class="col-xs-6 text-right">
																	<h6><strong>$70.00 <span class="text-muted">x</span></strong></h6>
																</div>
																<div class="col-xs-4">
																	<input type="text" class="form-control input-sm" value="'.$value["quantity"].'">
																</div>
																<div class="col-xs-2">
																	<button type="button" onclick="delete_item(\''.$item_name.'\')" class="btn btn-link btn-xs">
																		<span class="glyphicon glyphicon-trash"> </span>
																	</button>
																</div>
															</div>
														</div>
														<hr>
														</div>';
						}
				}
				echo '    				<div class="panel-footer">
											<div class="row text-center">
												<div class="col-xs-12">
													<h4 class="text-right">Total <strong>$ '.$_SESSION['total'].'</h4>
												</div>
											</div>
										</div>
										';
			}
			else {
				echo ' 					<div class="panel-body">
												<div class="row">
												<div class="col-xs-12"><center><strong> There\'s nothing in the cart yet!</strong></center>
												</div>
											</div>
											</div>
											<div class="panel-footer">
																		<div class="row text-center">
																			<div class="col-xs-12">
																				<h4 class="text-right">Total <strong>$ '.$_SESSION['total'].'</h4>
																			</div>
																		</div>
																	</div>';
			}
			break;
			case 'remove':
			if(!empty($_SESSION["cart_item"]&&isset($_POST['item_name']))) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST['item_name'] == $k){
						$_SESSION["total"]-=$_SESSION["cart_item"][$k]["quantity"]*70;
						unset($_SESSION["cart_item"][$k]);
					}
					if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
				}
			}
			break;
			case 'clean':
				unset($_SESSION["cart_item"]);
				$_SESSION["total"]=0;
			break;
		}
	}
}
