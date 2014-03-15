<div class="col-md-12">
	<h2>
		Adicionar Produto
	</h2>    
	
	<div class="panel-body">
      <button type="button" class="btn btn-default"><a href="<?php
			$link = array('controller' => 'products', 'action' => 'index');
			echo $this->Html->url($link); ?>" class="btn btn_book">Voltar</a>
		</button>
		<?php echo $this->Form->create('Product', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Nome')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Referência</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('referencia', array('class' => 'form-control', 'id' => 'inputName3')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome em inglês</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('name_en', array('class' => 'form-control', 'id' => 'inputName3', 'placeholder' => 'Nome em inglês')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('category_id', array('class' => 'form-control', 'id' => 'inputUser3')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Quantidade</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('qtd', array('class' => 'form-control', 'id' => 'inputEmail3')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Peso em KG</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('peso', array('class' => 'form-control', 'id' => 'inputEmail3')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Destaque</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('destaque', array('options' => array('sim__' => 'Sim', 'nao__' => 'Não'), 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Exibir produto no Brasil</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('disponibilidade', array('options' => array('sim' => 'Sim', 'nao' => 'Não'), 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Exibir produto no Exterior</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('disponibilidade_en', array('options' => array('sim_' => 'Sim', 'nao_' => 'Não'), 'class' => 'form-control')); ?>

				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Valor em Real (R$) (Dentro do Brasil)</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('valor', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Valor em dóllar ($) (Fora do Brasil) </label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('valor_en', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desconto em Real (R$) (Dentro do Brasil)</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('desconto', array('class' => 'form-control', 'value' => '0')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desconto em dóllar ($) (Fora do Brasil) </label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('desconto_en', array('class' => 'form-control', 'value' => '0')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Descrição em português</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('descricao', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Descrição em inglês</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('descricao_en', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Especificação em português</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('especificacao', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Especificação em inglês</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('especificacao_en', array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Cores</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('Color', array('class' => 'form-control', 'id' => 'inputPassword3')); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Tamanhos</label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('Size', array('class' => 'form-control', 'id' => 'inputPassword3')); ?>
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
