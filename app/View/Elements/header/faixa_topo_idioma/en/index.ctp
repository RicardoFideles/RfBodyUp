<!--FAIXA_TOPO_IDIOMA-->
<div class="row bkgA faixaTopo rowFixHorizScroll hidden-xs">
	<div class="container">
		<div class="col-lg-11 col-md-11 col-sm-10 col-xs-12 text-right textColorC">
			<a href="<?php echo $this->Html->url('/dashboard') ?>" class="LkMenuSuperior fonteDosis200">LOGIN</a>
			<a href="<?php echo $this->Html->url('/register') ?>" class="LkMenuSuperior fonteDosis200">REGISTER</a>
			<a href="<?php echo $this->Html->url('/account') ?>" class="LkMenuSuperior fonteDosis200">MY ACCOUNT</a>
			<a href="<?php echo $this->Html->url('/orders') ?>" class="LkMenuSuperior fonteDosis200">ORDERS</a>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 text-right textColorC">
			<?php echo $this->Html->link("BR", array('controller'=>'Settings','action' => 'setLanguage', "pt")); ?> • 
			<?php echo $this->Html->link("EN", array('controller'=>'Settings','action' => 'setLanguage', "en")); ?>
		</div>
	</div>
</div>
<!--FAIXA_TOPO_IDIOMA-->