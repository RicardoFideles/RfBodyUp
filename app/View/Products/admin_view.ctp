<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['ParentProduct']['name'], array('controller' => 'products', 'action' => 'view', $product['ParentProduct']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($product['Product']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($product['Product']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($product['Product']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disponibilidade'); ?></dt>
		<dd>
			<?php echo h($product['Product']['disponibilidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disponibilidade En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['disponibilidade_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($product['Product']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['valor_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo h($product['Product']['desconto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['desconto_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($product['Product']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['descricao_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especificacao'); ?></dt>
		<dd>
			<?php echo h($product['Product']['especificacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especificacao En'); ?></dt>
		<dd>
			<?php echo h($product['Product']['especificacao_en']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($product['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['name']; ?></td>
			<td><?php echo $photo['product_id']; ?></td>
			<td><?php echo $photo['dir']; ?></td>
			<td><?php echo $photo['mimetype']; ?></td>
			<td><?php echo $photo['filesize']; ?></td>
			<td><?php echo $photo['created']; ?></td>
			<td><?php echo $photo['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($product['ChildProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Name En'); ?></th>
		<th><?php echo __('Slug'); ?></th>
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
	<?php foreach ($product['ChildProduct'] as $childProduct): ?>
		<tr>
			<td><?php echo $childProduct['id']; ?></td>
			<td><?php echo $childProduct['category_id']; ?></td>
			<td><?php echo $childProduct['parent_id']; ?></td>
			<td><?php echo $childProduct['lft']; ?></td>
			<td><?php echo $childProduct['rght']; ?></td>
			<td><?php echo $childProduct['name']; ?></td>
			<td><?php echo $childProduct['name_en']; ?></td>
			<td><?php echo $childProduct['slug']; ?></td>
			<td><?php echo $childProduct['disponibilidade']; ?></td>
			<td><?php echo $childProduct['disponibilidade_en']; ?></td>
			<td><?php echo $childProduct['valor']; ?></td>
			<td><?php echo $childProduct['valor_en']; ?></td>
			<td><?php echo $childProduct['desconto']; ?></td>
			<td><?php echo $childProduct['desconto_en']; ?></td>
			<td><?php echo $childProduct['descricao']; ?></td>
			<td><?php echo $childProduct['descricao_en']; ?></td>
			<td><?php echo $childProduct['especificacao']; ?></td>
			<td><?php echo $childProduct['especificacao_en']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $childProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $childProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $childProduct['id']), null, __('Are you sure you want to delete # %s?', $childProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($product['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['customer_id']; ?></td>
			<td><?php echo $transaction['status']; ?></td>
			<td><?php echo $transaction['created']; ?></td>
			<td><?php echo $transaction['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
