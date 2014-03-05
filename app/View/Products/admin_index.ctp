<div class="col-md-12">
	<h2>
		Lista de Produtos
	</h2>    
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Produtos</h3>
  		</div>
  		<div class="panel-body">
	      <button type="button" class="btn btn-default"><a href="<?php
				$link = array('controller' => 'Products', 'action' => 'add');
				echo $this->Html->url($link); ?>" class="btn btn_book">Adicionar</a></button>
		</div>
		
		<div class="table-responsive">
			<table class="table">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('Nome'); ?></th>
						<th><?php echo $this->Paginator->sort('Estoque'); ?></th>
						<th><?php echo $this->Paginator->sort('Disponível no Brasil'); ?></th>
						<th><?php echo $this->Paginator->sort('Disponível no Exterior'); ?></th>
						<th class="actions"><?php echo __('Ações'); ?></th>
				</tr>
				<?php foreach ($products as $product): ?>
					<tr>
						<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
						<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
						<td><?php echo h($product['Product']['qtd']); ?>&nbsp;</td>
						<td><?php echo h($product['Product']['disponibilidade']); ?>&nbsp;</td>
						<td><?php echo h($product['Product']['disponibilidade_en']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Adicionar Imagens / Produtos Relacionados'), array('action' => 'view', $product['Product']['id'])); ?>&nbsp;&nbsp;
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $product['Product']['id'])); ?>&nbsp;&nbsp;
							<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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
	
