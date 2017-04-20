<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo lang('pageTitle')?></title>

<?php
foreach ($css_files as $css) {
  echo("<link href=\"".$css."\" rel=\"stylesheet\">");
}
?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="<?php echo base_url()?>js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/sweetalert.css">

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">

<body id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url() . 'images/logo.png'?>" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll"><a href="<?php echo base_url()?>"><?php echo lang('home')?></a></li>
                    <?php if ($_SESSION['login'] == FALSE){?>
                      <li class="scroll"><a data-toggle="modal" data-target="#login_modal" style="cursor:pointer;"><?php echo lang('login')?></a></li>
                    <?php } else{ ?>
                      <li class="scroll"><a href="<?php echo base_url()?>login/logout"><?php echo lang('logout')?></a></li>
                      <li class="scroll"><a href="<?php echo base_url()?>account"><?php echo lang('account')?></a></li>
                    <?php
                  }
                    ?>
                    <li class="scroll"><a href="<?php echo base_url() . 'design_sticker'?>"><?php echo lang('design_sticker')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'shopping'?>"><?php echo lang('shopping')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'welcome/lang_switch'?>"><?php if ($current_lang == 'en'){echo '繁中';}else {echo 'English';}?></a></li>
                    <li class="scroll"><a id="cart" data-toggle="modal" data-target="#cart_modal" style="cursor:pointer;"><i class="fa fa-shopping-cart"></i> <?php echo lang('cart')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'faq'?>" target="_blank"><?php echo lang('faq')?></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</body><!--/header-->

<!-- Login Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="login_modal"><?php echo lang('login')?></h4>
      </div>
      <div class="modal-body">
    <div class="row">
        <div class="col-xs-6">
            <div class="well">
                <form id="login-form" action="/login/login" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                              <div class="form-group">
                                  <label for="username" class="control-label"><?php echo lang('username')?></label>
                                  <input type="text" class="form-control" name="username" value="" required title="E-mail" placeholder="E-mail" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label"><?php echo lang('password')?><a data-toggle="modal" data-target="#forgot_password" style="cursor:pointer;"><?php echo lang('forget_password')?></a></label>
                                  <input type="password" class="form-control" name="password" placeholder="<?php echo lang('password')?>" value="" required="" title="password" required>
                                  <span class="help-block"></span>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input id="submit" type="submit" value="<?php echo lang('login')?>" class="btn btn-success btn-block" />
                        </div>
                        <div class="col-md-6">
                            <a href="/register"><?php echo lang('register')?></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
          <div class="col-xs-6">
              <h5><?php echo lang('other_login')?></h5>
                <ul class="list-unstyled list-social">
                    <li>
                        <a href="#" class="btn btn-lg btn-primary btn-block">
                            <i class="fa fa-google-plus"></i>
                            <span class="">Google</span>
                    </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-lg btn-default btn-block">
                            <i class="fa fa-facebook"></i>
                            <span class="">Facebook</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>


<!-- forgot password modal -->
<div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo lang('forgot_password')?></h4>
      </div>
      <div class="modal-body">
        <form id="forgot-password-form" action="/login/forgot_password" method="post">
        <div class="row">
          <div class="col-sm-9">
            <input type="email" name="email" class="form-control" placeholder="<?php echo lang('email')?>" required>
          </div>
          <input id="submit" type="submit" value="<?php echo lang('submit')?>" class="btn btn-primary" />
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Cart Modal -->
<div class="modal fade" id="cart_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    	<div class="row">
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<div class="panel-title">
    						<div class="row">
    							<div class="col-xs-6">
    								<h5><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo lang('shopping_cart')?></h5>
    							</div>
    							<div class="col-xs-6">
    								<button type="button" class="btn btn-primary btn-sm btn-block" data-dismiss="modal" aria-label="Close">
    									<span class="glyphicon glyphicon-share-alt"></span> <?php echo lang('continue')?>
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="cart-body">
    				</div>
    			</div>
    	</div>

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php echo '<script>var baseURL = "'. base_url() . '";</script>'; ?>
<script>
function change_quantity(item_name) {
  var quantity = $('#'+item_name).val();
  $.ajax({
      url: "/shopping/cart/modify/",
      type: "POST",
      data: {'item_name': item_name, 'quantity': quantity},
  });
}

function delete_item(item_name) {
  swal({
    title: "Are you sure?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    cancelButtonText: "No",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      $.ajax({
          url: "/shopping/cart/remove/",
          type: "POST",
          data: {'item_name': item_name},
          success: function(data){
              $("#cart_modal").find(".cart-body").load(baseURL+"shopping/cart/list");
          }
      });
      swal("Deleted!", "Your item has been removed.", "success");
    } else {
      swal("Cancelled", "Your item is safe there :)", "error");
    }
  });
}

function empty_cart_warning() {
  sweetAlert("Oops...", "Nothing in the cart yet", "error");
}

    $(function(){
       $('#forgot-password-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "/login/forgot_password",
                type: "POST",
                data: $("#forgot-password-form").serialize(),
                success: function(data){
                    alert("Successfully submitted.")
                    $('#forgot_password').modal('toggle')
                }
            });
       });

       $('#login-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "/login/login",
                type: "POST",
                data: $("#login-form").serialize(),
                success: function(data){
                    window.location = data;
                }
            });
       });

       $('#cart_modal').on('show.bs.modal', function(e){
         event.preventDefault();
         $(this).find(".cart-body").load(baseURL+"shopping/cart/list");
       });
    });
</script>
