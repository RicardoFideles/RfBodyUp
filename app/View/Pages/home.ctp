<?php
	$locale = Configure::read('Config.language');
	
	echo $this->element('home/categorias/'. Configure::read('lang') .'/index');
	
	echo $this->element('home/news_letter/'. Configure::read('lang') .'/index');
	
	echo $this->element('home/destaque/'. Configure::read('lang') .'/index');
	echo $_SERVER["DOCUMENT_ROOT"]
?>