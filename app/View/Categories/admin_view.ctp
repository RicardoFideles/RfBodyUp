<?php
	$this->Html->addCrumb('Categorias', '/category/');
	$this->Html->addCrumb($category['Category']['name'], '/category/view/'+$category['Category']['id']);
?>

	<h2>
		<?php echo h($category['Category']['name']); ?>
	</h2>
	
	<table class="table table-striped table-bordered">
		<tr>
            <td >
                <b>ID</b>
            </td>
            <td>
            	<?php echo h($category['Category']['id']); ?>
			</td>
        </tr>
        <tr>
            <td >
                <b>NOME</b>
            </td>
            <td>
            	<?php echo h($category['Category']['name']); ?>
			</td>
        </tr>
	</table>
	
	<h3>
		Fotos Relacionadas
	</h3>
	
	<p>
		<?php
			$link = $link = array('controller' => 'Photos', 'action' => 'add_category',$category['Category']['id']);
		?>
		
		<a href="<?php echo $this->Html->url($link); ?>" class="btn btn-info btn-large">
			<span class="fa fa-pencil icon-white"></span> Adicionar Foto
		</a>
	</p>
	
	<div class="content-main">
		<?php if (!empty($category['Photo'])): ?>
			<div class="row">
				<?php foreach ($category['Photo'] as $foto): ?>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="<?php echo $this->Html->url($foto['categoriaCapa']); ?>" alt="...">
								<div class="caption">
									<p><?php echo $foto['legenda']; ?></p>
									<p>
										<?php 
											$editLink =  array('controller' => 'photos', 'action' => 'edit_category', $foto['id'], $category['Category']['id']);
											$url_delete = array('controller' => 'photos', 'action' => 'delete_category', $foto['id'],$category['Category']['id']);
											
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
