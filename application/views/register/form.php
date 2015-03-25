<div class="row show-grid">
  <div class="col-lg-8" style="padding-left: 8%;padding-top: 2%;">
      
        <?php  
        $attributes = array('class' => 'form-horizontal');
        echo form_open('register/process', $attributes);
        ?>
        <fieldset>
        <?php //echo validation_errors('<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
        <legend>Registration Form</legend>

        <div class="form-group">
          <?php echo form_error('email','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="email" class="col-lg-2 control-label">Email*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="email" name="email"  value="<?php echo set_value('email'); ?>" placeholder="Type your Email ID">
          </div>
        </div>

        <div class="form-group">
          <?php echo form_error('password','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="password" class="col-lg-2 control-label">Password*</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Type your desired Password">
          </div>
        </div>

        <div class="form-group">
          <?php echo form_error('reg','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="reg" class="col-lg-2 control-label">Reg No*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="reg" name="reg" value="<?php echo set_value('reg'); ?>" placeholder="Type your SUST Registration No">
          </div>
        </div>

        <div class="form-group">
          <?php echo form_error('real_name','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="real_name" class="col-lg-2 control-label">Full Name*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="real_name" name="real_name" value="<?php echo set_value('real_name'); ?>" placeholder="Type your Full Name according to your ID Card">
          </div>
        </div>

        <div class="form-group">
          <?php echo form_error('user_name','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="user_name" class="col-lg-2 control-label">User Name*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="Type your desired Username; Example: java_coder, php_eol">
            <p>Don't use your Real Name in Username</p>
          </div>
        </div>

  
  
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
    <div class="col-lg-4" style="padding-top: 4%;padding-right: 2%;">
      <div class="panel panel-default">
      <div class="panel-heading">Registration Intruction</div>
      <div class="panel-body">
        <ol>
          <li>You must have to be a Student of SUST</li>
        </ol>
        </div>
      </div>
    </div>
</div>