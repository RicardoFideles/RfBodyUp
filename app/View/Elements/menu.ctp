<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>">Painel de Controle</a>
		</div>
		
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo $this->Html->url('/'); ?>">Home</a></li>
				<li><a href="<?php $link = array('controller' => 'users', 'action' => 'index');
            						echo $this->Html->url($link);
                        			?>">Administradores
        			</a>
    			</li>
    			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Logs', array('controller' => 'users', 'action' => 'cakelog')) ?></li>
					</ul>
				</li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo AuthComponent::user('name'); ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')) ?></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>