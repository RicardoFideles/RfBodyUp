<div class="transactions view">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $transaction['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($transaction['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Referencia'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Name En'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Qtd'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Destaque'); ?></th>
		<th><?php echo __('Disponibilidade'); ?></th>
		<th><?php echo __('Disponibilidade En'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Valor En'); ?></th>
		<th><?php echo __('Desconto'); ?></th>
		<th><?php echo __('Desconto En'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Descricao En'); ?></th>
		<th><?php echo __('Especificacao'); ?></th>
		<th><?php echo __('Especificacao En'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($transaction['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['referencia']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['parent_id']; ?></td>
			<td><?php echo $product['lft']; ?></td>
			<td><?php echo $product['rght']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['name_en']; ?></td>
			<td><?php echo $product['slug']; ?></td>
			<td><?php echo $product['qtd']; ?></td>
			<td><?php echo $product['peso']; ?></td>
			<td><?php echo $product['destaque']; ?></td>
			<td><?php echo $product['disponibilidade']; ?></td>
			<td><?php echo $product['disponibilidade_en']; ?></td>
			<td><?php echo $product['valor']; ?></td>
			<td><?php echo $product['valor_en']; ?></td>
			<td><?php echo $product['desconto']; ?></td>
			<td><?php echo $product['desconto_en']; ?></td>
			<td><?php echo $product['descricao']; ?></td>
			<td><?php echo $product['descricao_en']; ?></td>
			<td><?php echo $product['especificacao']; ?></td>
			<td><?php echo $product['especificacao_en']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
