<!DOCTYPE html>
<html>
  <head>
    <title>Painel Administrativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo $this->Html->url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/style.css'); ?>" rel="stylesheet">

    
  </head>
  <body>

  		<div id="wrap">
  			<div class="container">
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

