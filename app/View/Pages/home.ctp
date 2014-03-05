<?php
	$locale = Configure::read('Config.language');
	
	echo $this->element('home/categorias/'. Configure::read('lang') .'/index');
		
	echo $locale;
?>