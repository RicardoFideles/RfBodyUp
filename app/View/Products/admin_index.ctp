<div class="products index">
	<h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('disponibilidade'); ?></th>
			<th><?php echo $this->Paginator->sort('disponibilidade_en'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_en'); ?></th>
			<th><?php echo $this->Paginator->sort('desconto'); ?></th>
			<th><?php echo $this->Paginator->sort('desconto_en'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao_en'); ?></th>
			<th><?php echo $this->Paginator->sort('especificacao'); ?></th>
			<th><?php echo $this->Paginator->sort('especificacao_en'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['category_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['ParentProduct']['name'], array('controller' => 'products', 'action' => 'view', $product['ParentProduct']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['lft']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['rght']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name_en']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['slug']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['disponibilidade']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['disponibilidade_en']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['valor']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['valor_en']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['desconto']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['desconto_en']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['descricao_en']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['especificacao']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['especificacao_en']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
