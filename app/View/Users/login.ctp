<div class="container">
		 <?php echo $this->Session->flash() ?>
        <?php echo $this->Session->flash('auth') ?>
      	<?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'login', 'guest' => 'true',
													'class' => 'form-horizontal formCadastreSe', 
													 'role' => 'form',
													 'inputDefaults' => array(
													        'label' => false,
													    ))); ?>

            <div class="col-xs-12">
                  <p class="InternaTitulo fonteDosis400">LOGIN</p>
            </div>


            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-xs-12 marginBotA">
                                  <label class="control-label">User</label>
                                  <?php 
										echo $this->Form->input('username', array ('class' => 'form-control' , 'id' => 'inputUser') );
									?>
                            </div> 
                            <div class="col-xs-12 marginBotA">
                                  <label class="control-label">Senha</label>
                                 <?php 
										echo $this->Form->input('password', array ('class' => 'form-control' , 'id' => 'inputEmail') );
									?>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12 marginBotA"><a href="#" class="LkEsqueciSenha">Esqueci minha senha</a></div> 
                            <div class="col-xs-12">
                                    <button type="submit" class="btn btn-ButtonA">Enviar</button>
                            </div>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
      
      
      
      
   
      
      
      
      
      
      </div>