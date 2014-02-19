<div class="col-md-12">
	<h2>
		Configuraçoes do Sistema
	</h2>    
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Configuraçoes</h3>
  		</div>
		<div class="table-responsive">
			<table class="table">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th class="actions"><?php echo __('Ações'); ?></th>
				</tr>
				<?php foreach ($settings as $setting): ?>
					<tr>
						<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
						<td><?php echo h($setting['Setting']['name']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $setting['Setting']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>	
	
