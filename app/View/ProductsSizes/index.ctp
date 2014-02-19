<div class="productsSizes index">
	<h2><?php echo __('Products Sizes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('size_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productsSizes as $productsSize): ?>
	<tr>
		<td><?php echo h($productsSize['ProductsSize']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsSize['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsSize['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productsSize['Size']['name'], array('controller' => 'sizes', 'action' => 'view', $productsSize['Size']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productsSize['ProductsSize']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsSize['ProductsSize']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsSize['ProductsSize']['id']), null, __('Are you sure you want to delete # %s?', $productsSize['ProductsSize']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Products Size'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>
