<div class="row show-grid">
  <div class="col-lg-8" style="padding-left: 8%;">
      
        <?php  
        $attributes = array('class' => 'form-horizontal');
        echo form_open('register/process', $attributes);
        ?>
        <fieldset>
        <?php //echo validation_errors('<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
        <legend>Submit</legend>

        <div class="form-group">
          <?php echo form_error('email','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="problem_id" class="col-lg-2 control-label">Problem ID*</label>
          <div class="col-lg-10">
            <select class="form-control" name="problem_id">
              <option>A</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <?php echo form_error('user_name','<div class="alert alert-dismissable alert-danger">', '</div>'); ?>
          <label for="user_name" class="col-lg-2 control-label">Source Code*</label>
          <div class="col-lg-10">
            <input type="file" class="form-control" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="Type your desired Username; Example: java_coder, php_eol">
            <p>Only Zip Format is Allowed</p>
          </div>
        </div>

  
  
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
    <div class="col-lg-4" style="padding-top: 2%;padding-right: 2%;">
      <div class="panel panel-default">
      <div class="panel-heading">Submission Intruction</div>
      <div class="panel-body">
        <ol>
          <li>Upload the Source Code as a Single Zip File</li>
        </ol>
        </div>
      </div>
    </div>
</div>