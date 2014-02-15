<?php 
	$categorias = $this->requestAction(array('controller' => 'categories', 'action' => 'lista'));
?>

<!--MENU_MOBILE_E_LOGO-->
<!--VisibleXS-->
<div class="row bkgA rowFixHorizScroll marginTopA marginBotA visible-xs">
	<div class="container">
		<div class="col-xs-5 text-left">
			<a href="http://www.bodyup.com.br" target="_blank">
				<img src="imagens/LogoBodyUpTopo.png" class="LogoMobile" />
			</a>
		</div>
        <div class="col-xs-4 text-center">
        	<?php echo $this->Html->link("BR", array('controller'=>'Settings','action' => 'setLanguage', "pt")); ?> • 
        	<?php echo $this->Html->link("EN", array('controller'=>'Settings','action' => 'setLanguage', "en")); ?>
    	</div>
        <div class="col-xs-3 text-right">
			<!-- SingleButton -->
			<div class="btn-group">
				<button type="button" class="btn btn-ButtonB btn-sm dropdown-toggle" data-toggle="dropdown">
					MENU <span class="caret"></span>
				</button>
				<ul class="dropdown-menu right" role="menu">
					<li><a href="#">LOGIN</a></li>
					<li><a href="#">REGISTER</a></li>
					<li><a href="#">>MY ACCOUNT</a></li>
					<li><a href="#">ORDERS</a></li>
					<li class="divider"></li>
					<?php foreach($categorias as $key => $categoria): ?>
						<?php 
							$slug = $categoria['Category']['slug'];
							$link = array('controller' => 'categories', 'action' => 'view', 'slug'=> $slug); 
						?>
						
						<li><a href="#"><?php echo $categoria['Category']['name_en']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- SingleButton -->
		</div>            
	</div>
</div>
<!--VisibleXS-->

<!--VisibleXS-->
<div class="row bkgB rowFixHorizScroll visible-xs">
	<div class="container">
		<div class="col-xs-12 marginTopA text-right">
			<form class="form-inline text-right" role="form">
				<div class="form-group col-xs-9">
					<input type="busca" class="form-control BuscaInputBkg" id="exampleInputEmail2" placeholder="Search">
				</div>
				<div class="col-xs-3"><input type="image" src="<?php echo $this->Html->url('/imagens/icon_Buscar.png'); ?>" alt="Submit Form" /></div>
			</form>
		</div>
	</div>
</div>
<!--VisibleXS-->

<!--HiddenXS-->
<div class="row bkgB faixaLogo rowFixHorizScroll hidden-xs">
	<div class="container">
		<div class="col-lg-3 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 text-center">
			<a href="<?php echo $this->Html->url('/'); ?>">
				<img src="<?php echo $this->Html->url('/imagens/LogoBodyUpTopo.png'); ?>" class="LogoMobile" />
			</a>
		</div>
		<div class="col-lg-7 col-md-6 col-sm-8 text-right marginTopA">
			<form class="form-inline text-right" role="form" action="<?php echo $this->Html->url('/busca'); ?>">
				<div class="form-group col-lg-6 col-lg-offset-5 col-md-7 col-md-offset-3 col-sm-7 col-sm-offset-3">
					<input type="busca" class="form-control BuscaInputBkg" id="exampleInputEmail2" placeholder="Search" name="q">
				</div>
				<div class="col-lg-1 col-md-2 col-sm-2">
					<input type="image" src="<?php echo $this->Html->url('/imagens/icon_Buscar.png'); ?>" alt="Submit Form" />
				</div>
			</form>
        </div>
    	<div class="col-md-12 hrDivHeight"><hr /></div>
	</div>
</div>
<!--HiddenXS-->
<!--MENU_MOBILE_E_LOGO-->