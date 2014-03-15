<div class="col-md-12">
	<h2>
		Configurações
	</h2>    
	
	<div class="panel-body">
      <button type="button" class="btn btn-default"><a href="<?php
			$link = array('controller' => 'settings', 'action' => 'index');
			echo $this->Html->url($link); ?>" class="btn btn_book">Voltar</a>
		</button>
		<?php echo $this->Form->create('Setting', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<?php echo $this->Form->input('id'); ?>
			<?php 
				$name = $this->request->data['Setting']['name'];
				echo $this->Form->input('name', array('type' => 'hidden','value' =>$name)); 
			?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<?php echo $name; ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Link do Facebook</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('link_facebook', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Link do Facebook')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Link do Twitter</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('link_twitter', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Link do Twitter')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Link do Instagram</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('link_instagram', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Link do Instagram')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Link do Pinterest</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('link_pinterest', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Link do Pinterest')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Link do Google+</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('link_googleplus', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Link do Google+')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email de contato</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Email de contato')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">CEP da loja</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('cep', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Email de contato')); ?>
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
