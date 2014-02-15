<!--FAIXA_TOPO_IDIOMA-->
<div class="row bkgA faixaTopo rowFixHorizScroll hidden-xs">
	<div class="container">
		<div class="col-lg-11 col-md-11 col-sm-10 col-xs-12 text-right textColorC">
			<a href="#" class="LkMenuSuperior fonteDosis200">LOGIN</a>
			<a href="#" class="LkMenuSuperior fonteDosis200">CADASTRE-SE</a>
			<a href="#" class="LkMenuSuperior fonteDosis200">MINHA CONTA</a>
			<a href="#" class="LkMenuSuperior fonteDosis200">PEDIDOS</a>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 text-right textColorC">
			<?php echo $this->Html->link("BR", array('controller'=>'Settings','action' => 'setLanguage', "pt")); ?> • 
			<?php echo $this->Html->link("EN", array('controller'=>'Settings','action' => 'setLanguage', "en")); ?>
		</div>
	</div>
</div>
<!--FAIXA_TOPO_IDIOMA-->