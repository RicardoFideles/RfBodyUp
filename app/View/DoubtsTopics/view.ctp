<div class="doubtsTopics view">
<h2><?php echo __('Doubts Topic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doubtsTopic['DoubtsTopic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doubt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doubtsTopic['Doubt']['name'], array('controller' => 'doubts', 'action' => 'view', $doubtsTopic['Doubt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Topic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doubtsTopic['Topic']['id'], array('controller' => 'topics', 'action' => 'view', $doubtsTopic['Topic']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doubts Topic'), array('action' => 'edit', $doubtsTopic['DoubtsTopic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doubts Topic'), array('action' => 'delete', $doubtsTopic['DoubtsTopic']['id']), null, __('Are you sure you want to delete # %s?', $doubtsTopic['DoubtsTopic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doubts Topics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubts Topic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('controller' => 'doubts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
