<?php 
	$settings =  Configure::read('Config.settings');
?>

<!--RODAPE-->
<div class="row rowFixHorizScroll bkgA hidden-print">
	<div class="container marginTopB marginBotB">
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 marginBotA">
			<a href="<?php echo $this->Html->url('/'); ?>">
				<img src="<?php echo $this->Html->url('/imagens/LogoBodyUpRodape.png'); ?>" class="img-responsive" />
			</a>
		</div>
                  
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 marginBotA fonteDosis500">
			<p class="RodapeTitulo">Institucional</p>
			<a href="<?php echo $this->Html->url('/sobre'); ?>" class="LkRodape">SOBRE</a><br />
			<a href="<?php echo $this->Html->url('/produtos'); ?>" class="LkRodape">O PRODUTOS</a><br />
			<a href="<?php echo $this->Html->url('/lojas'); ?>" class="LkRodape">LOJAS</a><br />
			<br />
			<p class="RodapeTitulo">Loja Online</p>
			<a href="#" class="LkRodape">BALLET</a><br />
			<a href="#" class="LkRodape">BEACH</a><br />
			<a href="#" class="LkRodape">FITNESS</a>
		</div>
  
		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 marginBotA fonteDosis500">
			<p class="RodapeTitulo">Central de Atendimento</p>
			<a href="<?php echo $this->Html->url('/duvidas-frequentes'); ?>" class="LkRodape">DÚVIDAS FREQUENTES</a><br />
			<a href="<?php echo $this->Html->url('/termos-e-condicoes-uso'); ?>" class="LkRodape">TERMOS E CONDIÇÕES DE USO</a><br />
			<a href="<?php echo $this->Html->url('/politica-de-privacidade'); ?>" class="LkRodape">POLÍTICA DE PRIVACIDADE</a><br />
		</div>
  
  		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 marginBotA">
  			<p class="RodapeTitulo fonteDosis500">Newsletter Body Up</p>
  			<form class="form-inline text-right" role="form">
  				<input type="busca" class="form-control CadastreSeCampoMail" id="exampleInputEmail2" placeholder="Seu email">
  				<br />
  				<button type="submit" class="btn btn-CadNews">Assinar</button>
			</form>
			<br />
			<p class="SigaNos fonteDosis500">SIGA-NOS:<br />
				<a href="<?php echo $settings['Setting']['link_facebook']; ?>" target="_blank">
					<img src="<?php echo $this->Html->url('/imagens/iconFacebook.png'); ?>" border="0" />
				</a>
				<a href="<?php echo $settings['Setting']['link_twitter']; ?>" target="_blank">
					<img src="<?php echo $this->Html->url('/imagens/iconTwitter.png'); ?>" />
				</a>
				<a href="<?php echo $settings['Setting']['link_instagram']; ?>" target="_blank">
					<img src="<?php echo $this->Html->url('/imagens/iconInstagram.png'); ?>" />
				</a>
				<a href="<?php echo $settings['Setting']['link_pinterest']; ?>" target="_blank">
					<img src="<?php echo $this->Html->url('/imagens/iconPinterest.png'); ?>" />
				</a>
				<a href="<?php echo $settings['Setting']['link_googleplus']; ?>" target="_blank">
					<img src="<?php echo $this->Html->url('/imagens/iconGooglePlus.png'); ?>" />
				</a>
			</p>
			<br />
			
			<p class="RodapeTitulo fonteDosis500">Formas de Pagamento</p>
			<img src="<?php echo $this->Html->url('/imagens/formasPgto_ico_cartoes.png'); ?>" class="img-responsive bkgF RoundedCorner FormasPgto" />
		</div>                  
  
  		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
  			<div class="facebookResponsive">
  				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FBodyUp&amp;width=1000&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:1000px; height:230px;" allowTransparency="true"></iframe>
			</div>
		</div>
	
	</div>
</div>



<div class="row rowFixHorizScroll bkgC hidden-print">
  <div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 text-center Copyright">© 2014 Body Up. Todos os direitos reservados.</div>
  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 text-right">
  <a href="http://www.alexandre-rocha.com" target="_blank">
  <img src="imagens/LogoAlexandreRocha.png" class="LogoARcom hidden-xs" />
  <img src="imagens/LogoAlexandreRocha_icon.png" class="LogoARcom visible-xs" />
  </a></div>
  </div>
</div>
<!--RODAPE-->