<div class="productsSizes view">
<h2><?php echo __('Products Size'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productsSize['ProductsSize']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsSize['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsSize['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsSize['Size']['name'], array('controller' => 'sizes', 'action' => 'view', $productsSize['Size']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Size'), array('action' => 'edit', $productsSize['ProductsSize']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Size'), array('action' => 'delete', $productsSize['ProductsSize']['id']), null, __('Are you sure you want to delete # %s?', $productsSize['ProductsSize']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Sizes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Size'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>
