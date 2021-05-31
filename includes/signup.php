<div class="modal " id="register_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title">Register </h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <i class="is-icon-cross" aria-hidden="true"></i>
              </button>
          </div>
          <div class="modal-body">
            <form action="user_registration.php" method="POST" role="form" id="registration-form">
              <input type="hidden" name="csrf_test_name" value="8a80a0a1bdbeedc8fd23ca4ac8731544" />
              <input type="hidden" value="" name="utm_source" >
              <input type="hidden" value="" name="utm_medium" >
              <input type="hidden" value="" name="utm_campaign" >
              <input type="hidden" name="csrf_test_name" value="ca472541f01935331cf951b3a6984a5d" />
                  <div class="row">
                    <div class="col-6" id="first_name_container">
                        <div class="form-group">
                            <label for="first_name" class="control-label">First Name <span style="color: red;"> *</span></label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-6" id="last_name_container">
                        <div class="form-group">
                            <label for="last_name" class="control-label">Last Name  <span style="color: red;"> *</span></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-6" id="class_container">
                    <div class="form-group">
                      <label for="class"> Select Education  <span style="color: red;"> *</span></label>
                      <select name="class" class="form-control" name="class" required>
                        <option>Select..</option>
                        <option>6th</option>
                        <option>7th</option>
                        <option>8th</option>
                        <option>9th</option>
                        <option>10th</option>
                        <option>11th</option>
                        <option>12th</option>
                        <option>Graduation</option>
                        <option>Post Graduation</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6" id="board_container">
                    <div class="form-group">
                      <label for="board"> Select Board/University Name  <span style="color: red;"> *</span></label>
                      <select name="board" class="form-control" required>
                        <option> </option>
                        <option>ICSE</option>
                        <option>CBSE</option>
                        <option>State Board</option>
                        <option>College Level</option>
                        <option>Others</option>
                      </select>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-12" id="phone_container">
                  <div class="form-group">
                  <label for="phone_no">Whatsapp Mobile No  <span style="color: red;"> *</span></label>
                  <input type="tel" class="form-control" size="10" id="phone_no" name ="phone" placeholder="Mobile-No" 
                  required="true" pattern="[0-9]{10}">
                  </div>
                 </div>
                </div>
                <div class="row">
                  <div class="col-12" id="state_container">
                    <div class="form-group">
                      <label for="state"> Select Your State/UT </label>
                      <select name="state" class="form-control">
                        <option><Select:disabled>Select..</Select:disabled></option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                         <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>

                      </select>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                      <label for="email">Email  <span style="color: red;"> *</span></label>
                      <input type="email" class="form-control" id="modal_email" name ="email" placeholder="Email" 
                      required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                  </div>
                  <div class="form-group">
                      <label for="password">Password <span style="color: red;"> *</span></label>
                      <input type="password" class="form-control" id="modal_password" name="password" 
                      placeholder="Password" required = "true">
                  </div>
                  <div class="form-group">
                    <label for="password"> Confirm Password <span style="color: red;"> *</span></label>
                    <input type="password" class="form-control" id="modal_password" name="password_confirm"
                    placeholder="Confirm Password" required= "true"  title="Your password should be same as above">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                  </div>
                  <div class="form-group">
                      <input type="checkbox" tabindex="2" name="agree" required> I agree to all 
                      <a href="termsandconditions.php" id="forgot-password" style="color: blue;">Terms and Conditions</a>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary col-12 offset-md-4 col-sm-4" style="margin-top: 10px;" id="modal_login_submit" tabindex="3">Register</button>
                  </div>
                </form>
          </div>
      </div>
  </div>
</div>