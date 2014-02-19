<div class="doubts form">
<?php echo $this->Form->create('Doubt'); ?>
	<fieldset>
		<legend><?php echo __('Add Doubt'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('name_en');
		echo $this->Form->input('Topic');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doubts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
