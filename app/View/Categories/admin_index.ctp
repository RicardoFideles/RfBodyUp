<div class="col-md-12">
	<h2>
		Lista de Categorias
	</h2>    
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Categorias</h3>
  		</div>
  		<div class="panel-body">
	      <button type="button" class="btn btn-default"><a href="<?php
				$link = array('controller' => 'categories', 'action' => 'add');
				echo $this->Html->url($link); ?>" class="btn btn_book">Adicionar</a></button>
		</div>
		
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th><?php echo $this->Paginator->sort('Nome'); ?></th>
					<th><?php echo $this->Paginator->sort('Status'); ?></th>
					<th class="actions"><?php echo __('Ações'); ?></th>
				</tr>
				<?php foreach ($categories as $category): ?>
					<tr>
						<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['status']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Adicionar/Alterar Imagem'), array('action' => 'view', $category['Category']['id'])); ?>&nbsp;&nbsp;
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $category['Category']['id'])); ?>
							<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
		<ul class="pager">
			<li>
				<?php echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled')); ?>
			</li>
			<li>
				<?php echo $this->Paginator->numbers(array('separator' => '')); ?>
			</li>
			<li>
				<?php echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled')); ?>
			</li>			
		</div>
	
	</div>
</div>	
	
