<div class="transactionsProducts view">
<h2><?php echo __('Transactions Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transactionsProduct['TransactionsProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transactionsProduct['Transaction']['id'], array('controller' => 'transactions', 'action' => 'view', $transactionsProduct['Transaction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transactionsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $transactionsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd'); ?></dt>
		<dd>
			<?php echo h($transactionsProduct['TransactionsProduct']['qtd']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transactions Product'), array('action' => 'edit', $transactionsProduct['TransactionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transactions Product'), array('action' => 'delete', $transactionsProduct['TransactionsProduct']['id']), null, __('Are you sure you want to delete # %s?', $transactionsProduct['TransactionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transactions Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
