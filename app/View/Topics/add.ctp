<div class="topics form">
<?php echo $this->Form->create('Topic'); ?>
	<fieldset>
		<legend><?php echo __('Add Topic'); ?></legend>
	<?php
		echo $this->Form->input('texto');
		echo $this->Form->input('status');
		echo $this->Form->input('Doubt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Topics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('controller' => 'doubts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
	</ul>
</div>
