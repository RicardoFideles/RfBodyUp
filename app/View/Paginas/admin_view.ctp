<div class="paginas view">
<h2><?php echo __('Pagina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($pagina['Pagina']['texto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pagina'), array('action' => 'edit', $pagina['Pagina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pagina'), array('action' => 'delete', $pagina['Pagina']['id']), null, __('Are you sure you want to delete # %s?', $pagina['Pagina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Paginas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagina'), array('action' => 'add')); ?> </li>
	</ul>
</div>
