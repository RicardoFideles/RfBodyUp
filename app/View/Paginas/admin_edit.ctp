<?php echo $this->element('editor/index'); ?>


<div class="paginas form">
<?php echo $this->Form->create('Pagina'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pagina'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('texto', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor2', 'id'=> 'editor2'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pagina.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pagina.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Paginas'), array('action' => 'index')); ?></li>
	</ul>
</div>
