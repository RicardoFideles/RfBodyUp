<?php
	$slug = "privacy-policy";
	$pagina = $this->requestAction(array('controller' => 'paginas', 'action' => 'getPagina', $slug));
?>

<?php 
	if (!empty($pagina)) {
?>


<div class="row rowFixHorizScroll marginTopD marginBotF bkgD">
	<div class="container">
		<div class="col-xs-12">
			<p class="InternaTitulo fonteDosis400"><?php echo $pagina['Pagina']['name'] ?></p>
            <br />
            <?php echo $pagina['Pagina']['texto'] ?>
		</div>
	</div>
</div>

<?php
	}
?>