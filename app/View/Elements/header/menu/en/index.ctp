<?php 
	$categorias = $this->requestAction(array('controller' => 'categories', 'action' => 'lista'));
?>
<!--MENU-->
<div class="row bkgB rowFixHorizScroll marginTopA marginBotA">
	<div class="container">
		<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12 hidden-xs">
			<a href="<?php echo $this->Html->url('/'); ?>" class="LkMenuSuperior fonteDosis200">HOME</a>
			<?php foreach($categorias as $key => $categoria): ?>
				<?php 
					$slug = $categoria['Category']['slug'];
					$link = array('controller' => 'products', 'action' => 'lista', 'slug'=> $slug); 
				?>
				<a href="<?php echo $this->Html->url($link); ?>" class="LkMenuSuperior fonteDosis200"><?php echo $categoria['Category']['name_en']; ?></a>
			<?php endforeach; ?>
		</div>
		<?php echo $this->element('/header/shopcart/en/index');?>
	</div>
</div>
<!--MENU-->

<!--LOGO_PRINT-->
<div class="row bkgB rowFixHorizScroll">
	<div class="container">
		<div class="col-xs-12 text-left visible-print">
			<img src="<?php echo $this->Html->url('/imagens/LogoBodyUpTopo2.png'); ?> " class="LogoMobile" />
			<br />
			<?php echo $this->Html->url('/en/'); ?>
		</div>
	</div>
</div>
<!--LOGO_PRINT-->