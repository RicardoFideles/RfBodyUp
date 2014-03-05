<div class="col-md-12">
	<div class="panel-body">
		<div class="action-buttons">
			<h2>Adicionar Foto</h2>
		</div>
		<?php echo $this->Form->create('Photo', array('type' => 'file','class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<?php echo $this->Form->input('id'); ?>
			<div class="form-group">
				<div class="col-sm-1">
					<label for="inputEmail3" class="col-sm-2 control-label">Imagem</label>
				</div>
				<div class="col-sm-11">
					<?php echo $this->Form->input('photo' , array('type' => 'file', 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-1">
					<label for="inputEmail3" class="col-sm-2 control-label">Legenda</label>
				</div>
				<div class="col-sm-11">
					<?php echo $this->Form->input('legenda', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-1">
					<label for="inputEmail3" class="col-sm-2 control-label">Produto</label>
				</div>
				<div class="col-sm-11">
					<?php echo $this->Form->input('product_id', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
