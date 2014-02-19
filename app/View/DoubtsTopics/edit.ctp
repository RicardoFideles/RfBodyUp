<div class="doubtsTopics form">
<?php echo $this->Form->create('DoubtsTopic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Doubts Topic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doubt_id');
		echo $this->Form->input('topic_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DoubtsTopic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DoubtsTopic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doubts Topics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('controller' => 'doubts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
