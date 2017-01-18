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
                <a class="navbar-brand" href="<?php echo base_url()?>"><img src="images/logo.png" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll"><a href="<?php echo base_url()?>"><?php echo lang('home')?></a></li>
                    <?php if ($_SESSION['login'] == FALSE){
                      echo '<li class="scroll"><a data-toggle="modal" data-target="#login_modal" style="cursor:pointer;">' . lang('login') . '</a></li>';
                    } else{
                      echo '<li class="scroll"><a href="'.base_url() . 'login/logout">Logout</a></li>';
                    }
                    ?>
                    <li class="scroll"><a href="<?php echo base_url() . 'design_sticker'?>"><?php echo lang('design_sticker')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'shopping'?>"><?php echo lang('shopping')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'welcome/lang_switch'?>"><?php if ($current_lang == 'en'){echo '繁中';}else {echo 'English';}?></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</body><!--/header-->

<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="login_modal">Login</h4>
      </div>
      <div class="modal-body">
    <div class="row">
        <div class="col-xs-6">
            <div class="well">
                <form id="login-form" action="/login/login" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username/E-mail</label>
                                  <input type="text" class="form-control" name="username" value="" required title="Username/E-mail" placeholder="Username/E-mail" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">password <a data-toggle="modal" data-target="#forgot_password" style="cursor:pointer;">(forgot password)</a></label>
                                  <input type="password" class="form-control" name="password" placeholder="password" value="" required="" title="password" required>
                                  <span class="help-block"></span>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input id="submit" type="submit" value="Login" class="btn btn-success btn-block" />
                        </div>
                        <div class="col-md-6">
                            <a href="/register">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
          <div class="col-xs-6">
              <h5>Login with social network account</h5>
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
        <h4 class="modal-title">Forgot password</h4>
      </div>
      <div class="modal-body">
        <form id="forgot-password-form" action="/login/forgot_password" method="post">
        <div class="row">
          <div class="col-sm-9">
            <input type="email" name="email" class="form-control" placeholder="Email address" required>
          </div>
          <input id="submit" type="submit" value="SUBMIT" class="btn btn-primary" />
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
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
                    location.reload();
                }
            });
       });
    });
</script>
