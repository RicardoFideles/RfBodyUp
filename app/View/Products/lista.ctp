<?php   $this->set(array(
	    'title_for_layout' => $category['Category']['name']
	));
?>

<div class="row rowFixHorizScroll marginTopD marginBotC bkgD hidden-print">
	<div class="container">
		<div class="col-xs-12">
			<?php 
				$idioma = Configure::read('lang');
				
				$slug = $category['Category']['slug'];
				$link = array('controller' => 'products', 'action' => 'lista', 'slug'=> $slug);
				
			?>
			
			<p class="InternaTitulo fonteDosis400">
				<a href="<?php echo $this->Html->url($link); ?>">
					<?php
						if ($idioma == "en") {
					?>
						<?php echo $category['Category']['name_en']; ?>
					<?php	
						} else {
					?>
						<?php echo $category['Category']['name']; ?>
					<?php
						}
					?>
				</a>
			</p>
			<br>
		</div>
		<div class="col-sm-10 col-xs-12">
			<p class="fonteDosis500 text-right ProdutosOrdenar">
				ORDENAR POR:  
				<a href="#" class="LkProdutosOrdenar">VALOR MENOR</a>  |  
				<a href="#" class="LkProdutosOrdenar">VALOR MAIOR</a>  |  
				<a href="#" class="LkProdutosOrdenar">MAIS VENDIDOS</a>
			</p>
		</div>
		
		<div class="col-sm-2 col-xs-12">
			<p class="fonteDosis500 text-right ProdutosOrdenar">EXIBIR: 
				<?php
					$link_1 = array('controller'=>'products', 'action'=> 'lista', 'slug' => $slug, 'page' => 1);
					$link_2 = array('controller'=>'products', 'action'=> 'lista', 'slug' => $slug, 'page' => 1, 'quantidade' => 2);
					$link_3 = array('controller'=>'products', 'action'=> 'lista', 'slug' => $slug, 'page' => 1, 'quantidade' => 3);
					
				?>
				<a href="<?php echo $this->Html->url($link_1); ?>" class="LkProdutosOrdenar">8</a>  |  
				<a href="<?php echo $this->Html->url($link_2); ?>" class="LkProdutosOrdenar">16</a>  |  
				<a href="<?php echo $this->Html->url($link_3); ?>" class="LkProdutosOrdenar">TODOS</a>
			</p>
		</div>
	</div>
</div>

<div class="row rowFixHorizScroll marginTopA marginBotD">
	<div class="container">
		
		<?php foreach ($products as $product): ?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ProdutosHome">
				<?php
					$link = array('controller' => 'products', 'action' => 'view', 'slug' => $this->Link->makeLink($product['Product']['slug'], $product['Product']['id']));
				?>
				<a href="<?php echo $this->Html->url($link); ?>" class="LkProdutosHomeTit fonteDosis500">
					
					<?php if (!empty($product['Photo'])): ?>
						<div class="ProdutosHomeImg">
							<?php $url = $product['Photo'][0]['categoriaCapa']; ?>
							<img src="<?php echo $this->Html->url($url); ?>" class="img-responsive">
						</div>
					<?php endif; ?>
					
					<div class="ProdutosHomeTit">
						<?php 
							$idioma = Configure::read('lang');
							
							if ($idioma == "en") {
						?>
							<?php echo $product['Product']['name_en']; ?>
						<?php	
							} else {
						?>
							<?php echo $product['Product']['name']; ?>
						<?php
							}
						?>
					</div>
				</a>
				<div class="ProdutosHomeRefValor">
					<div class="ProdutosHomeRef">REF. <?php echo $product['Product']['referencia'] ?></div>
					<div class="ProdutosHomeValor">
						<?php 
							$idioma = Configure::read('lang');
							
							if ($idioma == "en") {
						?>
							$<?php echo $product['Product']['valor_en']; ?>
						<?php	
							} else {
						?>
							R$ <?php echo $product['Product']['valor']; ?>
						<?php
							}
						?>
						
					</div>
				</div>
				<div class="ProdutosHomeHR"><hr></div>
				<div class="ProdutosHomeDesejCarrinho">
					<div class="ProdutosHomeListDesej">
						<a href="#" class="LkProdutosHomeListDesej fonteDosis500">
							<img src="<?php echo $this->Html->url('/imagens/icon_shop_desejos.jpg'); ?> ">
							Adicionar à Lista de Desejos
						</a>
					</div>
					<div class="ProdutosHomeCarrinho">
						<a href="#" class="LkProdutosHomeCarrinho fonteDosis500">
							<img src="<?php echo $this->Html->url('/imagens/icon_shop_carrinho.jpg'); ?>">
							Adicionar ao Carrinho
						</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="row rowFixHorizScroll marginTopA marginBotD">
	<div class="container">
		<div class="col-xs-12">
			<ul class="paginacao fonteDosis200 text-center">
				<?php
					$this->Paginator->options(array(
					    'url' => array(
					        'controller' => 'products', 'action' => 'lista', 'slug' => $slug,
					    )
					));
				?>
				
				<?php
		            echo $this->Paginator->prev('ANTERIOR ', array('tag' => 'li' , 'class'=> 'previous'), null, array('class' => 'disable', 'tag' => 'li'));
				?> 
				| 
				<?php
		            echo $this->Paginator->numbers(array('separator' => ' | ', 'tag' => 'li'));
		            $this->Paginator->current(null, null, null);
				?> 
				| 
				<?php
		            echo $this->Paginator->next(' PRÓXIMA', array('tag' => 'li', 'class'=> 'next'), null, array('class' => 'disable','tag' => 'li'));
		        ?>
			</ul>
			<br>
		</div>
	</div>
</div>