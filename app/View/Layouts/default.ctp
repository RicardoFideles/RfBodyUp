<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="imagens/favicon_pc.png" rel="icon" type="image/png" />
	<link href="imagens/favicon_apple.png" rel="apple-touch-icon-precomposed"/>
	
	<!-- Bootstrap -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<link href="<?php echo $this->Html->url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo $this->Html->url('/css/css_bodyup.css'); ?>" rel="stylesheet">
	<link href="<?php echo $this->Html->url('/css/css_bodyup_print.css'); ?>" rel="stylesheet" media="print">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	
	<title>BodyUp</title>
</head>

<body>
	<?php echo $this->element('header/index'); ?>
  		<div id="wrap">
  			<div class="container">
  				
  				<?php
  				
  					Configure::read('lang');
					
				?>
				<?php echo $this->fetch('content'); ?>
  			</div>
  		</div>
  		
  		
		<div id="footer">
			<div class="container">
				<p class="text-muted">Place sticky footer content here.</p>
			</div>
		</div>
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>

