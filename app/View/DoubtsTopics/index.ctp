<div class="doubtsTopics index">
	<h2><?php echo __('Doubts Topics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('doubt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('topic_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doubtsTopics as $doubtsTopic): ?>
	<tr>
		<td><?php echo h($doubtsTopic['DoubtsTopic']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($doubtsTopic['Doubt']['name'], array('controller' => 'doubts', 'action' => 'view', $doubtsTopic['Doubt']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($doubtsTopic['Topic']['id'], array('controller' => 'topics', 'action' => 'view', $doubtsTopic['Topic']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doubtsTopic['DoubtsTopic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doubtsTopic['DoubtsTopic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doubtsTopic['DoubtsTopic']['id']), null, __('Are you sure you want to delete # %s?', $doubtsTopic['DoubtsTopic']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Doubts Topic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('controller' => 'doubts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
