<div class="productsColors view">
<h2><?php echo __('Products Color'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productsColor['ProductsColor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsColor['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsColor['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsColor['Color']['name'], array('controller' => 'colors', 'action' => 'view', $productsColor['Color']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Color'), array('action' => 'edit', $productsColor['ProductsColor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Color'), array('action' => 'delete', $productsColor['ProductsColor']['id']), null, __('Are you sure you want to delete # %s?', $productsColor['ProductsColor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Colors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Color'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
	</ul>
</div>
