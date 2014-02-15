<!DOCTYPE html>
<html>
  <head>
    <title>Painel Administrativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo $this->Html->url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/style.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
  </head>
  <body>

  		<?php echo $this->element('menu'); ?>
  		
  		<div id="wrap">
  			<div class="container">
  				<?php echo $this->Session->flash() ?>
				<?php echo $this->fetch('content'); ?>
  			</div>
  		</div>
		<div id="footer">
			<div class="container">
				<p class="text-muted">Place sticky footer content here.</p>
			</div>
		</div>
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->Html->url('/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>

