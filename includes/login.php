<div class="modal " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title">Login </h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
              <i class="is-icon-cross" aria-hidden="true"></i>
              </button>
          </div>
          <div class="modal-body">
                <form action="login_submit.php" method="POST" role="form" id="modal-login-form">
                  <input type="hidden" name="csrf_test_name" value="ca472541f01935331cf951b3a6984a5d" />
                  <div class="form-group">
                      <label for="email" class="control-label">Email</label>
                      <input type="email" class="form-control" id="modal_email" tabindex="1" name ="email" placeholder="john@example.com">
                  </div>
                  <div class="form-group">
                      <label for="password" class="control-label">Password</label>
                      <input type="password" class="form-control" id="modal_password" tabindex="2" name="password" placeholder="Must be atleast 6 characters">
                  </div>
                  <div class="forgot_password">
                      <a href="#" id="forgot-password" style="color: blue;">Forgot password?</a>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary col-12 offset-md-4 col-sm-4" style="margin-top: 10px;" id="modal_login_submit" tabindex="3">Login</button>
                  </div>
                  <div class="form-group new_to_c@r">
                  <label for="signup" id="register-link">
                  New to Code@Random?  <a href='#' style="color: blue;"> Register</a>
                  </label>
                  </div>
                </form>
          </div>
      </div>
  </div>
</div>