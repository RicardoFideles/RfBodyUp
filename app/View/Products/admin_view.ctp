<?php
	$this->Html->addCrumb('Produtos', '/produtcs/');
	$this->Html->addCrumb($product['Product']['name'], '/products/view/'+$product['Product']['id']);
?>

	<h2>
		<?php echo h($product['Product']['name']); ?>
	</h2>
	
	<table class="table table-striped table-bordered">
		<tr>
            <td >
                <b>ID</b>
            </td>
            <td>
            	<?php echo h($product['Product']['id']); ?>
			</td>
        </tr>
        <tr>
            <td >
                <b>NOME</b>
            </td>
            <td>
            	<?php echo h($product['Product']['name']); ?>
			</td>
        </tr>
	</table>
	
	<h3>
		Fotos Relacionadas
	</h3>
	
	<p>
		<?php
			$link = $link = array('controller' => 'Photos', 'action' => 'add_product',$product['Product']['id']);
		?>
		
		<a href="<?php echo $this->Html->url($link); ?>" class="btn btn-info btn-large">
			<span class="fa fa-pencil icon-white"></span> Adicionar Foto
		</a>
	</p>
	
	<div class="content-main">
		<?php if (!empty($product['Photo'])): ?>
			<div class="row">
				<?php foreach ($product['Photo'] as $foto): ?>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="<?php echo $this->Html->url($foto['imageSmall']); ?>" alt="...">
								<div class="caption">
									<p><?php echo $foto['legenda']; ?></p>
									<p>
										<?php 
											$editLink =  array('controller' => 'photos', 'action' => 'edit_product', $foto['id'], $product['Product']['id']);
											$url_delete = array('controller' => 'photos', 'action' => 'delete_product', $foto['id'],$product['Product']['id']);
										?>
										<a href="<?php echo $this->Html->url($editLink); ?>" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span> Alterar</a>
										<a href="<?php echo $this->Html->url($url_delete); ?>" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove"> Apagar</a>
 
										
									</p>
								</div>
							</div>
						</div>
				<?php endforeach; ?>    	
			</div>
		<?php endif; ?>
	</div>
	
	<h3>
		Produtos Relacionados
	</h3>
	
	<p>
		<?php
			$link = array('controller' => 'Products', 'action' => 'add_product_related',$product['Product']['id']);
		?>
		
		<a href="<?php echo $this->Html->url($link); ?>" class="btn btn-info btn-large">
			<span class="fa fa-pencil icon-white"></span> Relacionar Produto
		</a>
	</p>
	<div class="content-main">
		<?php if (!empty($product['ChildProduct'])): ?>
			<div class="row">
				<?php foreach ($product['Photo'] as $foto): ?>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="<?php echo $this->Html->url($foto['imageSmall']); ?>" alt="...">
								<div class="caption">
									<p><?php echo $foto['legenda']; ?></p>
									<p>
										<?php 
											$editLink =  array('controller' => 'photos', 'action' => 'edit_product', $foto['id'], $product['Product']['id']); 
										?>
										<a href="<?php echo $this->Html->url($editLink); ?>" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span> Alterar</a> 
										<a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove"> Apagar</a>
										
									</p>
								</div>
							</div>
						</div>
				<?php endforeach; ?>    	
			</div>
		<?php endif; ?>
	</div>
	
	<h3>
		Cores Relacionadas
	</h3>
	
	<p>
		<?php
			$link = array('controller' => 'Products', 'action' => 'edit',$product['Product']['id']);
		?>
		
		<a href="<?php echo $this->Html->url($link); ?>" class="btn btn-info btn-large">
			<span class="fa fa-pencil icon-white"></span> Relacionar Cor
		</a>
	</p>
	<div class="content-main">
		<?php if (!empty($product['Color'])): ?>
				<table class="table table-striped table-bordered">
					<tr>
						<th><?php echo __('Nome'); ?></th>
						<th><?php echo __('Nome em inglês'); ?></th>
					</tr>
					<?php foreach ($product['Color'] as $color): ?>
						<tr>
						<td><?php echo $color['name']; ?></td>
						<td><?php echo $color['name_en']; ?></td>
						</tr>
					<?php endforeach; ?>    	
				</table>
		<?php endif; ?>
	</div>
	
	<h3>
		Tamanhos Relacionadas
	</h3>
	
	<p>
		<?php
			$link = array('controller' => 'Products', 'action' => 'edit',$product['Product']['id']);
		?>
		
		<a href="<?php echo $this->Html->url($link); ?>" class="btn btn-info btn-large">
			<span class="fa fa-pencil icon-white"></span> Relacionar Tamanho
		</a>
	</p>
	<div class="content-main">
		<?php if (!empty($product['Color'])): ?>
				<table class="table table-striped table-bordered">
					<tr>
						<th><?php echo __('Tamanho'); ?></th>
					</tr>
					<?php foreach ($product['Size'] as $size): ?>
						<tr>
						<td><?php echo $size['name']; ?></td>
						</tr>
					<?php endforeach; ?>    	
				</table>
		<?php endif; ?>
	</div>

