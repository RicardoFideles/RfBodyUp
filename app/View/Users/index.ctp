<div class="col-md-12">
	<h2>
		Lista de Administradores
	</h2>    
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Administradores</h3>
  		</div>
  		<div class="panel-body">
	      <button type="button" class="btn btn-default"><a href="<?php
				$link = array('controller' => 'users', 'action' => 'add');
				echo $this->Html->url($link); ?>" class="btn btn_book">Adicionar</a></button>
		</div>
		
		<div class="table-responsive">
			<table class="table">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th class="actions"><?php echo __('Ações'); ?></th>
				</tr>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
							<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
	
