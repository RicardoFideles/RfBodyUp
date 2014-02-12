<div class="col-md-12">
	<h2>
		Lista de Administradores
	</h2>    
	
	<div class="panel-body">
      <button type="button" class="btn btn-default"><a href="<?php
			$link = array('controller' => 'users', 'action' => 'index');
			echo $this->Html->url($link); ?>" class="btn btn_book">Voltar</a>
		</button>
		<?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Nome')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('username', array('class' => 'form-control', 'id' => 'inputUser3', 'placeholder' => 'Usuário')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'id' => 'inputEmail3', 'placeholder' => 'Email')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Permissão</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('role', array('options' => array('admin' => 'Admin'), 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'inputPassword3', 'placeholder' => 'Password')); ?>
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
	
