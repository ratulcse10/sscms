<title>SUST Software Contest Management System ::. <?php echo $title; ?></title>

<link href="<?php echo base_url(); ?>design/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>design/css/bootswatch.min.css" rel="stylesheet">

<script type="text/javascript" src="<?php echo base_url(); ?>design/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>design/js/bootswatch.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery-1.9.1.min.js" ></script>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand">SUST Software Contest Management System</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
           <?php 
            if($this->session->userdata('logged_in')){

             // if( ($this->session->userdata('user_role_id') == 2) || $this->session->userdata('user_role_id') == 3){
                echo "<li><a href=".base_url()."admin/contest>Contest</a></li>";
            //  }
            //  else{
                echo "<li><a href=".base_url()."contest>Contest</a></li>";
                echo "<li><a href=".base_url()."ranklist>Ranklist</a></li>";
                echo "<li><a href=".base_url()."submission>Submission</a></li>";
           //   }
              
            }
            else{
                
            }
            ?>
 
          </ul>


          <ul class="nav navbar-nav navbar-right">
            <?php 
            if($this->session->userdata('logged_in')){
                echo "<li><a href=".base_url()."profile/show/".$this->session->userdata('user_name').">".$this->session->userdata('user_full_name')."</a></li>";
                echo "<li><a href=".base_url()."logout>Logout</a></li>";
            }
            else{
                echo "<li><a href=".base_url()."login>Login</a></li>";
                echo "<li><a href=".base_url()."register>Register</a></li>";
            }
            ?>
          </ul>

        </div>
      </div>
    </div>


