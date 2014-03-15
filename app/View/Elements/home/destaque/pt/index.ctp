<?php 
	$products = $this->requestAction(array('controller' => 'products', 'action' => 'destaque_home'));
	
?>

<div class="row rowFixHorizScroll marginTopA marginBotH">
	<div class="container">
		<?php foreach($products as $key => $product): ?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ProdutosHome simpleCart_shelfItem">
				
				<?php
					$link = array('controller' => 'products', 'action' => 'view', 'slug' => $this->Link->makeLink($product['Product']['slug'], $product['Product']['id']));
				?>
				
				<a href="<?php echo $this->Html->url($link); ?>" class="LkProdutosHomeTit fonteDosis500">
					<?php if (!empty($product['Photo'])): ?>
						<div class="ProdutosHomeImg">
							<?php 
								$url = $product['Photo'][0]['categoriaCapa'];
								$url_thumb = $product['Photo'][0]['imageSmall']; 
							?>
							<img src="<?php echo $this->Html->url($url); ?>" class="img-responsive">
						</div>
						<div class="item_thumb" style="display: none"><?php echo $this->Html->url($url_thumb); ?></div>
						<div class="item_idproduto" style="display: none"><?php echo $product['Product']['id']; ?></div>
						<div class="item_weight" style="display: none"><?php echo $product['Product']['peso']; ?></div>
					<?php endif; ?>
					<div class="ProdutosHomeTit item_name">
						<?php echo $product['Product']['name']; ?>
					</div>
				</a>
				
				<div class="ProdutosHomeRefValor">
					<div class="ProdutosHomeRef">REF. <?php echo $product['Product']['referencia']; ?></div>
					<div class="ProdutosHomeValor item_price">R$ <?php echo $product['Product']['valor']; ?></div>
				</div>
				
				<div class="ProdutosHomeHR"><hr></div>
				
				<div class="ProdutosHomeDesejCarrinho">
					<div class="ProdutosHomeListDesej">
						<a href="#" class="LkProdutosHomeListDesej fonteDosis500">
							<img src="<?php echo $this->Html->url('/imagens/icon_shop_desejos.jpg'); ?>">
							Adicionar à Lista de Desejos
						</a>
					</div>
					<div class="ProdutosHomeCarrinho">
						<a href="javascript:;" class="LkProdutosHomeCarrinho fonteDosis500 item_add">
							<img src="<?php echo $this->Html->url('/imagens/icon_shop_carrinho.jpg'); ?>">
							Adicionar ao Carrinho
						</a>
						</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>