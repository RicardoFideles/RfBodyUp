<div class="productsSizes form">
<?php echo $this->Form->create('ProductsSize'); ?>
	<fieldset>
		<legend><?php echo __('Edit Products Size'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('size_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductsSize.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductsSize.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products Sizes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>
