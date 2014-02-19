<?php echo $this->element('editor/index'); ?>

<div class="col-md-12">
	<h2>
		Lista de Páginas
	</h2>    
	
	<div class="panel-body">
      <button type="button" class="btn btn-default"><a href="<?php
			$link = array('controller' => 'paginas', 'action' => 'index');
			echo $this->Html->url($link); ?>" class="btn btn_book">Voltar</a>
		</button>
		<?php echo $this->Form->create('Pagina', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<?php echo $this->Form->input('id'); ?>
			<?php 
				$name = $this->request->data['Pagina']['name'];
				echo $this->Form->input('name', array('type' => 'hidden','value' =>$name)); 
			?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<?php echo $name; ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Texto</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('texto', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor2', 'id'=> 'editor2')); ?>
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
