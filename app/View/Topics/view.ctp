<div class="topics view">
<h2><?php echo __('Topic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($topic['Topic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($topic['Topic']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($topic['Topic']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Topic'), array('action' => 'edit', $topic['Topic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Topic'), array('action' => 'delete', $topic['Topic']['id']), null, __('Are you sure you want to delete # %s?', $topic['Topic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('controller' => 'doubts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doubts'); ?></h3>
	<?php if (!empty($topic['Doubt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Name En'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($topic['Doubt'] as $doubt): ?>
		<tr>
			<td><?php echo $doubt['id']; ?></td>
			<td><?php echo $doubt['name']; ?></td>
			<td><?php echo $doubt['name_en']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doubts', 'action' => 'view', $doubt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doubts', 'action' => 'edit', $doubt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doubts', 'action' => 'delete', $doubt['id']), null, __('Are you sure you want to delete # %s?', $doubt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doubt'), array('controller' => 'doubts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
