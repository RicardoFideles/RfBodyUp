<?php
	$cakeDescription = __d('cake_dev', 'BodyUp');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php echo $this->Html->url('/imagens/favicon_pc.png'); ?>" rel="icon" type="image/png" />
	<link href="<?php echo $this->Html->url('/imagens/favicon_apple.png'); ?>" rel="apple-touch-icon-precomposed"/>
	
	<!-- Bootstrap -->
	<link href="<?php echo $this->Html->url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo $this->Html->url('/css/css_bodyup.css'); ?>" rel="stylesheet">
	<link href="<?php echo $this->Html->url('/css/css_bodyup_print.css'); ?>" rel="stylesheet" media="print">
	
	<script type="text/javascript" src="<?php echo $this->Html->url('https://code.jquery.com/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $this->Html->url('/js/simpleCart.js'); ?>"></script>
	
	<?php 
		$link = array('controller' => 'transactions', 'action' => 'registrar');
	?>
	

	<script>
		simpleCart({
			currency: "BRL",
			cartColumns: [
				{ view: "image" , attr:'thumb', label: false, className: "col-lg-1 col-md-1 col-sm-2 col-xs-6 PedidosPrint" },
		        { attr: "name" , label: "PRODUTO", className : "col-lg-5 col-md-5 col-sm-5 ColunasTit hidden-sm", classNameRow: "col-lg-5 col-md-5 col-sm-10 col-xs-6 PedidosPrint" } ,
		        { view: "quantidade", attr: "quantity" , label: "QTDE", className : "col-lg-1 col-md-1 col-sm-3 ColunasTit" } ,
		        { attr: "price" , label: "VALOR UNITÁRIO", view: 'currency', className : "col-lg-2 col-md-2 col-sm-3 ColunasTit", classNameRow: "col-lg-2 col-md-2 col-sm-3 col-xs-6 ValorUnit PedidosPrint"} ,
		        { attr: "total" , label: "VALOR", view: 'currency', className: "col-lg-2 col-md-2 col-sm-2 ColunasTit", classNameRow: "col-lg-2 col-md-2 col-sm-2 col-xs-6 ValorSoma PedidosPrint" } ,
		        { view: "remover" , text: "Remover" , label: 'REMOVER', className : "col-lg-1 col-md-1 col-sm-2 ColunasTit" }
		    ],
		    checkout: { 
		        type: "SendForm" , 
		        url: "<?php echo $this->Html->url('/registrar'); ?>" 
		    } 
		});
	</script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
</head>

<body>
	<?php echo $this->element('header/index'); ?>
	
	<?php echo $this->fetch('content'); ?>
  		
	<?php echo $this->element('footer/'. Configure::read('lang') .'/index'); ?>
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>

