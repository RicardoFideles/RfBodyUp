<div class="col-md-12">
	<h2>
		Lista de Páginas do Sistema
	</h2>    
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Páginas</h3>
  		</div>
  		<div class="panel-body">
	      <button type="button" class="btn btn-default"><a href="<?php
				$link = array('controller' => 'paginas', 'action' => 'add');
				echo $this->Html->url($link); ?>" class="btn btn_book">Adicionar</a></button>
		</div>
		
		<div class="table-responsive">
			<table class="table">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th class="actions"><?php echo __('Ações'); ?></th>
				</tr>
				<?php foreach ($paginas as $pagina): ?>
					<tr>
						<td><?php echo h($pagina['Pagina']['id']); ?>&nbsp;</td>
						<td><?php echo h($pagina['Pagina']['name']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pagina['Pagina']['id'])); ?>
							<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $pagina['Pagina']['id']), null, __('Are you sure you want to delete # %s?', $pagina['Pagina']['id'])); ?>
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
	
