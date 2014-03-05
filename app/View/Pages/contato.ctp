<script src="<?php echo $this->Html->url('/js/contato.js'); ?>" type="text/javascript" charset="utf-8"></script>

<div class="row rowFixHorizScroll marginTopD marginBotF bkgD">
	<div class="container">
		<div class="col-xs-12">
			<p class="InternaTitulo fonteDosis400">CONTATO</p>
			<br>
			A BodyUp busca oferecer o melhor a seus clientes e nada melhor do que ouvi-los. Fale conosco, preencha o formulário abaixo.
			<br><br><br>
		</div>
		
		<div id="resultado_envio"></div>

		<form action="<?php echo $this->Html->url('/Contatos/enviar') ?>" method="post" accept-charset="utf-8" class="form-horizontal" role="form" id="form-envio">
			<div class="col-sm-6 col-xs-12">
				
				<div class="form-group col-sm-12">
					<label for="inputNome" class="control-label">Nome</label>
					<input type="text" class="form-control" name="name">
				</div> 
				
				<div class="form-group col-sm-12">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="email" class="form-control" id="inputEmail" name="email">
				</div>
				
				<div class="form-group col-sm-12">
					<label for="inputAssunto" class="control-label">Assunto</label>
					<select class="form-control" name="assunto">
						<option>Selecione o assunto</option>
						<option>Dúvidas</option>
						<option>Sugestões</option>
						<option>Reclamações</option>
					</select>
				</div>                                  
			</div>
			
			<div class="col-sm-6 col-xs-12">
				<div class="form-group col-sm-12">
					<label for="inputMensagem" class="control-label">Mensagem</label>
					<textarea class="form-control" rows="9" id="inputMensagem" name="mensagem"></textarea>
				</div>
			</div>
			
			<div class="col-xs-12">
				<div class="form-group col-xs-12">
					<button type="submit" class="btn btn-ButtonA">Enviar</button>
				</div>
			</div>          
		</form>
	</div>
</div>