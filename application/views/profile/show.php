<div class="row show-grid">
  <div class="col-lg-12" style="padding-left: 8%;padding-top: 2%;padding-right: 6%;">
      
        <fieldset>
        <legend><?php echo $this->session->userdata('user_name'); ?></legend>

        <div class="form-group">
          <label class="col-lg-2 control-label">Full Name</label>
          <div class="col-lg-10">
            <label class="col-lg-10 control-label"><?php echo $this->session->userdata('user_full_name'); ?></label>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-2 control-label">Reg</label>
          <div class="col-lg-10">
            <label class="col-lg-10 control-label"><?php echo $this->session->userdata('user_reg'); ?></label>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <label class="col-lg-10 control-label"><?php echo $this->session->userdata('user_email'); ?></label>
          </div>
        </div>

      
  </fieldset>
  </br></br></br>
  <legend>Participated Past Contests (Total: 3)</legend>
  <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Contest Name</th>
            <th>Date</th>
            <th>Rank</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>3</td>
            <td>PHP Practise Contest for CSE 2012 Batch </td>
            <td>9 PM,30 October,2014</td>
            <td>12</td>
          </tr>
          <tr>
            <td>2</td>
            <td>PHP Practise Contest for CSE 2012 Batch </td>
            <td>9 PM,30 October,2014</td>
            <td>10</td>
          </tr>
          <tr>
            <td>1</td>
            <td>PHP Practise Contest for CSE 2012 Batch </td>
            <td>9 PM,30 October,2014</td>
            <td>5</td>
          </tr>
        </tbody>
      </table>

  </div>
  <!--
    <div class="col-lg-5" style="padding-top: 4%;padding-right: 2%;">
      
      <div class="panel panel-default">
      <div class="panel-heading">Upcoming Contests</div>
        <div class="panel-body">
            <ol>
              <li><a href="<?php echo base_url(); ?>contest/show/1">PHP Practise Contest for CSE 2012 Batch</a> [9 PM,30 October,2014]</li>
              <li><a href="<?php echo base_url(); ?>contest/show/1">Java Practise Contest for CSE 2012 Batch</a> [9 PM,30 October,2014]</li>
            </ol>
        </div>
      </div>
    
    </div> -->
</div>