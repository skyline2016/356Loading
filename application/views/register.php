<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="modal-dialog modal-md" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="login_modal">Login</h4>
      </div>
      <div class="modal-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="well">
                <form id="register-form" action="/register/register" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username/E-mail</label>
                                  <input type="text" class="form-control" name="username" value="" required title="Username/E-mail" placeholder="Username/E-mail" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">password</label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="password" value="" required="" title="password" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">confirm password</label>
                                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password" value="" required="" title="confirm password" required>
                                  <span class="help-block"></span>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><input id="submit" type="submit" value="Register" class="btn btn-success btn-block" /></div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
  </div>
</div>

<script>
    var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    $(function(){
       $('#register-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "/register/register",
                type: "POST",
                data: $("#register-form").serialize(),
                success: function(data){
                    window.open("/","_self")
                }
            });
       });
    });
</script>
