<?php
	$categories = $this->requestAction(array('controller' => 'categories', 'action' => 'lista'));
?>

<div class="row rowFixHorizScroll HomeDestaquesBKG hidden-xs">
	<div class="container">
		<?php foreach($categories as $key => $category): ?>
			
			<?php
				$link = array('controller' => 'products', 'action' => 'lista', 'slug' => $category['Category']['slug']); 
			?>
			
			<div class="col-sm-4 bkgE marginTopA2 marginBotA2">
				<div class="faixaDestaquesHomeContainer">
					<a href="<?php echo $this->Html->url($link); ?>" class="LkHomeDestaques fonteDosis200">
						<?php if (!empty($category['Photo'])): ?>
							<?php foreach ($category['Photo'] as $foto): ?>
								<img src="<?php echo $this->Html->url($foto['categoriaCapa']); ?>" class="img-responsive" alt="<?php echo $foto['legenda'] ?>">
							<?php endforeach; ?>
						<?php endif; ?>							
						<div class="faixaDestaquesHomeTitulo text-center">
							<p class="categoria"><?php echo $category['Category']['name_en'] ?></p>
							<p class="categoriaFrase"><?php echo $category['Category']['descricao_en'] ?></p>
						</div>
						<div class="faixaDestaquesBkg"></div>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>