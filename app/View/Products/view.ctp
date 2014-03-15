<?php   $this->set(array(
	    'title_for_layout' => $category['Category']['name'] . ' ' . $product['Product']['name']
	));
?>
<div class="row rowFixHorizScroll marginTopD bkgD">
	<div class="container">
		<div class="col-xs-12">
			<p class="InternaTitulo fonteDosis400">
				<?php 
					$idioma = Configure::read('lang');
					
					$slug = $category['Category']['slug'];
					$link = array('controller' => 'products', 'action' => 'lista', 'slug'=> $slug);
				?> 
				
				<a href="<?php echo $this->Html->url($link); ?>">
					<?php
						if ($idioma == "en") {
					?>
							<?php echo $category['Category']['name_en']; ?>
					<?php	
						} else {
					?>
						<?php echo $category['Category']['name']; ?>
					<?php
						}
					?>
				</a>
			</p>
			<br>
		</div>
	</div>
</div>

<?php echo $this->element('social/sdk'); ?>

<div class="row rowFixHorizScroll marginTopA marginBotD">
	<div class="container">
		
		<?php if (!empty($product['Photo'])): ?>
			<?php 
				$fotos = $product['Photo'];
				$foto_principal = $fotos[0];
			?>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<img id="FotoColecao" src="<?php echo $this->Html->url($foto_principal['categoriaCapa']); ?>" data-zoom-image="<?php echo $this->Html->url($foto_principal['name']); ?>" class="img-responsive ProdImgBorder">
				
				<div class="row">
					<div class="col-xs-12 MouseMsg text-right"></div>
				</div>
				<div id="FotosGaleriaA" class="row marginTopB hidden-print">
					<?php foreach ($fotos as $foto): ?>
							<div class="col-xs-3">
								<a href="#" data-image="<?php echo $this->Html->url($foto['categoriaCapa']); ?>" data-zoom-image="<?php echo $this->Html->url($foto['name']); ?>">
									<img id="FotoColecao" src="<?php echo $this->Html->url($foto['categoriaCapa']); ?>" class="img-responsive ProdImgBorder">
								</a>
							</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="row ProdAberto">
				<div class="col-lg-12 Titulo fonteDosis500">
					<?php
						if ($idioma == "en") {
					?>
							<?php echo $product['Product']['name_en']; ?>
					<?php	
						} else {
					?>
						<?php echo $product['Product']['name']; ?>
					<?php
						}
					?>
				</div>
				
				<div class="col-xs-6">
					<p class="RefCode">REF: <?php echo $product['Product']['referencia']; ?></p>
					<p class="Disponib">Disponibilidade: <span class="Neg">Indisponível</span></p>
					<!--<p class="Disponib">Disponibilidade: <span class="Pos">Disponível</span></p>-->
				</div>

				<div class="col-xs-6 text-right socialplugins">
					<div id="share_twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweet</a>
					</div>
					<div id="share_facebook">
						<?php
							$link = array('controller' => 'products', 'action' => 'view', 'slug' => $this->Link->makeLink($product['Product']['slug'], $product['Product']['id'])); 
						?>
						<div class="fb-share-button" data-href="<?php $this->Html->url($link); ?>" data-width="200" data-type="button_count"></div>
						
					</div>
					
					<img src="<?php echo $this->Html->url('/imagens/iconEnviarMail.png'); ?>">
				</div>

				<div class="col-xs-12">
					<?php
						
						$desconto = 0;
						$valor = 0;
						$tem_desconto = false;
						if ($idioma == "en") {
								
							$desconto = $product['Product']['desconto_en'];
							$valor_original = $product['Product']['valor_en'];
							$valor_com_desconto = 0;
							
							if ($desconto > 0) {

								$tem_desconto = true;
								$valor_com_desconto =  $valor_original - $desconto;
							}
							$temp = "$";
							$temp.= $valor_original;
							$valor_original = $temp;
							
							$temp2 = "$";
							$temp2.= $valor_com_desconto;
							
							
						} else {
							$desconto = $product['Product']['desconto'];
							$valor_original = $product['Product']['valor'];
							$valor_com_desconto = 0;
							if ($desconto > 0) {
									
								$tem_desconto = true;
								$valor_com_desconto =  $valor_original - $desconto;
							}
							
							$temp = "R$";
							$temp.= $valor_original;
							$valor_original = $temp;
							
							$temp2 = "R$";
							$temp2.= $valor_com_desconto;
						}
						
						
						
						
						
					?>
					
					<?php
						if ($idioma == "en") {
					?>
						<p class="SubTitulo fonteDosis500">PRICE</p>
					<?php	
						} else {
					?>
					<p class="SubTitulo fonteDosis500">VALOR</p>
					<?php
						}
					?>
					
					
					<?php 
						if ($tem_desconto) {
					?>
					
					<span class="Valor">
						<?php echo $valor_com_desconto; ?>
					</span>
					<span class="ValorOriginal">
						<?php echo $valor_original; ?>
					</span>
					
					<?php
						} else {
					?>
					<span class="Valor">
						<?php echo $valor_original; ?>
					</span>
					<?php
						}
					?>
					
				</div>

				<div class="col-xs-12">
					<?php
						if ($idioma == "en") {
					?>
						<p class="SubTitulo fonteDosis500">DESCRIPTION</p>
							<?php echo $product['Product']['descricao_en']; ?>
					<?php	
						} else {
					?>
						<p class="SubTitulo fonteDosis500">DESCRIÇÃO</p>
						<?php echo $product['Product']['descricao']; ?>
					<?php
						}
					?>
					
					
					<?php
						if ($idioma == "en") {
					?>
						<p class="SubTitulo fonteDosis500">SPECIFICATIONS</p>
							<?php echo $product['Product']['especificacao_en']; ?>
					<?php	
						} else {
					?>
						<p class="SubTitulo fonteDosis500">ESPECIFICAÇÕES</p>
						<?php echo $product['Product']['especificacao']; ?>
					<?php
						}
					?>

				</div>

				<div class="col-lg-5 col-md-5 col-xs-12">
					<p class="SubTitulo fonteDosis500">TAMANHO</p>
					<select class="form-control">
						<option>Selecione um tamanho</option>
						<?php if (!empty($product['Size'])): ?>
							<?php foreach ($product['Size'] as $size): ?>
								<?php
									if ($idioma == "en") {
								?>
										<option value="<?php echo $size['id'];?>"><?php echo $size['name_en'];?></option>
								<?php	
									} else {
								?>
									<option value="<?php echo $size['id'];?>"><?php echo $size['name'];?></option>
								<?php
									}
								?>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>

				<div class="col-lg-5 col-md-5 col-xs-12">
					<p class="SubTitulo fonteDosis500">COR</p>
					<select class="form-control">
						<option>Selecione uma cor</option>
						<?php if (!empty($product['Color'])): ?>
							<?php foreach ($product['Color'] as $color): ?>
								
								<?php
									if ($idioma == "en") {
								?>
										<option value="<?php echo $color['id'];?>"><?php echo $color['name_en']; ?></option>
								<?php	
									} else {
								?>
									<option value="<?php echo $color['id'];?>"><?php echo $color['name']; ?></option>
								<?php
									}
								?>
							<?php endforeach; ?>
						<?php endif; ?>

					</select>
				</div>

				<div class="col-lg-2 col-md-2 col-xs-12">
					<p class="SubTitulo fonteDosis500">QUANTIDADE</p>
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<input type="text" class="form-control">
						</div>
					</div> 
				</div>
 
				<div class="col-lg-6 col-md-6 col-xs-12">                                    
					<p class="SubTitulo fonteDosis500">GUIA DE TAMANHOS</p>

					<div class="GuiaTamanhos">
						<table class="table">
							<tbody>
							<tr class="active">
							<td class="Dest">INCH</td>
							<td class="Dest">S</td>
							<td class="Dest">M</td>
							<td class="Dest">L</td>
							</tr>
							<tr>
							<td class="Dest">Busto/Bust</td>
							<td>30-31</td>
							<td>32-34</td>
							<td>35.5-38</td>
							</tr>
							<tr>
							<td class="Dest">Cintura/Waist</td>
							<td>21.5-23</td>
							<td>24.5-26</td>
							<td>27.5-29</td>
							</tr>
							<tr>
							<td class="Dest">Quadril/Low Hip</td>
							<td>32-33.5</td>
							<td>35.5-38</td>
							<td>38.5-40</td>
							</tr>
							<tr class="active">
							<td class="Dest">CM</td>
							<td class="Dest">P</td>
							<td class="Dest">M</td>
							<td class="Dest">G</td>
							</tr>
							<tr>
							<td class="Dest">Busto/Bust</td>
							<td>76-79</td>
							<td>82-86</td>
							<td>90-96</td>
							</tr>
							<tr>
							<td class="Dest">Cintura/Waist</td>
							<td>55-58</td>
							<td>62-66</td>
							<td>70-74</td>
							</tr>
							<tr>
							<td class="Dest">Quadril/Low Hip</td>
							<td>82-85</td>
							<td>90-94</td>
							<td>98-102</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
					<button type="submit" class="btn btn-ButtonLisDesejos">Adicionar ao Carrinho de Compras</button>
					<br><br>
					<button type="submit" class="btn btn-ButtonCarrinhoComp">Adicionar à Lista de Desejos</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!--ZOOM-->
<script src='<?php echo $this->Html->url('/js/zoom/jquery-1.8.3.min.js'); ?>'></script>
<script src='<?php echo $this->Html->url('/js/zoom/jquery.elevatezoom.js'); ?>'></script>

<script>   
//initiate the plugin and pass the id of the div containing gallery images
//$("#img_01").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

$("#FotoColecao").elevateZoom({gallery:'FotosGaleriaA', cursor: '', galleryActiveClass: 'active', easing : true, zoomType: "inner", zoomWindowFadeIn: 400, zoomWindowFadeOut: 400}); 

//pass the images to Fancybox
$("#FotoColecao").bind("click", function(e) {  
  var ez =   $('#FotoColecao').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});   
</script>