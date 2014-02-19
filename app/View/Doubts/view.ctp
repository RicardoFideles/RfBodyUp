<div class="doubts view">
<h2><?php echo __('Doubt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doubt['Doubt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($doubt['Doubt']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name En'); ?></dt>
		<dd>
			<?php echo h($doubt['Doubt']['name_en']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doubt'), array('action' => 'edit', $doubt['Doubt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doubt'), array('action' => 'delete', $doubt['Doubt']['id']), null, __('Are you sure you want to delete # %s?', $doubt['Doubt']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doubts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doubt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Topics'); ?></h3>
	<?php if (!empty($doubt['Topic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doubt['Topic'] as $topic): ?>
		<tr>
			<td><?php echo $topic['id']; ?></td>
			<td><?php echo $topic['texto']; ?></td>
			<td><?php echo $topic['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'topics', 'action' => 'view', $topic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'topics', 'action' => 'edit', $topic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'topics', 'action' => 'delete', $topic['id']), null, __('Are you sure you want to delete # %s?', $topic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
