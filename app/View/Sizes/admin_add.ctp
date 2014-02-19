<div class="col-md-12">
	<h2>
		Adicionar novo tamanho
	</h2>    
	
	<div class="panel-body">
      <button type="button" class="btn btn-default"><a href="<?php
			$link = array('controller' => 'sizes', 'action' => 'index');
			echo $this->Html->url($link); ?>" class="btn btn_book">Voltar</a>
		</button>
		<?php echo $this->Form->create('Size', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Nome')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
	
