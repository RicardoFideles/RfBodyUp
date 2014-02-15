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
					$link = array('controller' => 'categories', 'action' => 'view', 'slug'=> $slug); 
				?>
				<a href="#" class="LkMenuSuperior fonteDosis200"><?php echo $categoria['Category']['name_en']; ?></a>
			<?php endforeach; ?>
		</div>
		<div class="col-lg-4 col-lg-offset-2 col-md-5 col-sm-6 col-xs-12 text-right">
			<a href="#" class="LkMenuSuperior fonteDosis200">WISHLIST (<span class="fonteDosis500"> 20 </span>)</a>
			<a href="#" class="LkMenuSuperior fonteDosis200">CART (<span class="fonteDosis500"> 16 </span>)</a>
		</div>
	</div>
</div>
<!--MENU-->