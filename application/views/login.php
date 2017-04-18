<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="modal-dialog modal-md" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="login_modal"><?php echo lang('login')?></h4>
      </div>
      <div class="modal-body">
    <div class="row">
        <div class="col-xs-6">
            <div class="well">
                <form id="login-warning-form" action="/login/login" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                              <div class="form-group">
                                  <label for="username" class="control-label"><?php echo lang('username')?></label>
                                  <input type="text" class="form-control" name="username" value="" required title="Username/E-mail" placeholder="Username/E-mail" required>
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
<div class="modal fade" id="forgot_password_warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo lang('forgot_password')?></h4>
      </div>
      <div class="modal-body">
        <form id="forgot-password-warning-form" action="/login/forgot_password" method="post">
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
       $('#forgot-password-warning-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "/login/forgot_password",
                type: "POST",
                data: $("#forgot-password-warning-form").serialize(),
                success: function(data){
                    alert("Successfully submitted.")
                    $('#forgot_password_warning').modal('toggle')
                }
            });
       });

       $('#login-warning-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "/login/login",
                type: "POST",
                data: $("#login-warning-form").serialize(),
                success: function(data){
                    window.open(data,"_self")
                }
            });
       });
    });
</script>
<?php if ($_SESSION['error_msg']){ ?>
  <center><font color="red">
    <?php
  if ($_SESSION['error_msg'] == 2) {
    echo lang('login_warning');
    }
  if ($_SESSION['error_msg'] == 1){
    echo lang('login_fail');
  }
  unset($_SESSION['error_msg']);
  ?>
  </font><center>
    <?php
}
     ?>
