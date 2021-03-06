<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>HCMP|Password Recovery</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <link href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" rel="stylesheet"/> 
    <link href="<?php echo base_url().'assets/css/offline.css'?>" type="text/css" rel="stylesheet"/> 
    <link href="<?php echo base_url().'assets/css/select2.css'?>" type="text/css" rel="stylesheet"/> 
    <link href="<?php echo base_url().'assets/css/offline-language-english.css'?>" type="text/css" rel="stylesheet"/> 
    <link rel="icon" href="<?php echo base_url().'assets/img/coat_of_arms.png'?>" type="image/x-icon" />
    <link href="<?php echo base_url().'assets/metro-bootstrap/docs/font-awesome.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/metro-bootstrap/css/metro-bootstrap.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/css/normalize.css'?>" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/pace-theme-flash.css'?>" />
  <script src="<?php echo base_url().'assets/scripts/jquery.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/jquery-1.8.0.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/boot-strap3/js/bootstrap.min.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/pace.js'?>" type="text/javascript"></script>
     <script src="<?php echo base_url().'assets/scripts/offline.js'?>" type="text/javascript"></script>
     <script src="<?php echo base_url().'assets/scripts/select2.js'?>" type="text/javascript"></script>
	<!--<script src="<?php echo base_url().'assets/scripts/alert.js'?>" type="text/javascript"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
    	h2{
    		font-size:1.6em;
    	}
    </style>
    <script>
   paceOptions = {
  ajax: false, // disabled
  document: true, // 
  eventLag: true // 
  
};
  </script>
  </head>  
  <body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true" style="padding: 0;">
	<div class="navbar  navbar-static-top" id="top-panel">
      
<a href="<?php echo base_url();?>">
	<img style="max-width: 9em; float: left; margin-right: 2px;" src="<?php echo base_url();?>assets/img/coat_of_arms.png" class="img-responsive " alt="Responsive image"></a>

				<div id="logo_text" style="margin-top: 3%">
					<span style="font-size: 1.7em;font-weight: bold">Ministry of Health</span><br />
					<span style="font-size: 1.3em">Health Commodities Management Platform (HCMP)</span>	
				</div>
				
				
	</div>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-4" style="">
				
			</div>
			<div class="col-md-4" style="">
				
				

 <?php 
if ($popup=="success") {
  
  echo  '<div class="alert alert-info alert-dismissable" style="text-align:center;">Please Check your email for a Reset Code.
<button type="button" class=" close" data-dismiss="alert" aria-hidden="true">×</button>
','</div>';
}elseif ($popup=="error") {
  echo  '<div class="alert alert-danger alert-dismissable" style="text-align:center;">Incorrect Code. Try Again.
<button type="button" class=" close" data-dismiss="alert" aria-hidden="true">×</button>
','</div>';
}elseif ($popup=="request_valid") {
  echo  '<div class="alert alert-info alert-dismissable" style="text-align:center;">You recently requested for a password recovery. A code was sent to your email. Please enter it below, to reset your account.
<button type="button" class=" close" data-dismiss="alert" aria-hidden="true">×</button>
','</div>';
}
unset($popup);

 ?>
			</div>
			<div class="col-md-4" style="">
				
				
			</div>
		</div>
		
	</div>
	
	
  	
  		   
<div class="container" style="margin-top: 3%;" id="containerlogin">
      
                
 <div class="row">
        <div class="col-md-4"></div>
  		<div class="col-md-4"> 
  			<div class="">
  <div id="contain_login" class="">
  	<h2><span style="margin-right: 0.5em;" class="glyphicon glyphicon-lock"></span>Password Recovery</h2>	
  	<?php 
    
	 echo form_open('User/confirm_code'); ?>
<div id="login" >

<div class="form-group" style="margin-top: 2.3em;">
    <label for="exampleInputEmail1">Username / Email </label>
    
    <p class="form-control-static">Password recovery for <strong><?php echo $user_email ?></strong>  </p>
    <input type="hidden" name="username" id="username" readonly="readonly" required="required" value="<?php echo $user_email ?>">
  </div>
		
  <div class="form-group" style="margin-top: 2.3em;">
    <label for="exampleInputreset_code">Enter Code</label>
    <input type="text" class="form-control input-lg" name="code" id="code" placeholder="Enter Code Eg 12345" required="required">
  </div>
  
   <input type="submit" class="btn btn-primary " name="reset" id="reset" value="Reset" style="margin-bottom: 3%;">
  <a class="btn btn-success" style="margin-left: 2%;margin-bottom: 3%;" href="<?php echo base_url().'Home'?>" id="modalbox">Home</a>
		
</div>

<?php 

		echo form_close();
		?>
</div></div></div>
  		<div class="col-md-4"></div>  
   
 </div><!-- .row -->
 </div><!-- .container -->
 <div id="footer">
      <div class="container">
        <p class="text-muted"> Government of Kenya &copy <?php echo date('Y');?>. All Rights Reserved</p>
      </div>
    </div>
      <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
    	
================================================== -->
		<script>
	$(document).ready(function() {});
		
		</script>

</body>
</html>
