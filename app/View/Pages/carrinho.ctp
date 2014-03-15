<script>
	
	urlAjaxFrete = "<?php echo $this->Html->url('/calculaFrete'); ?>"; 
	$(document).ready(function() {
	  //	calculaFrete();
	});

	var itens_carrinho = new Object();
	itens_carrinho = simpleCart.items();
	
	function goBack() {
		window.history.back()
	}
	
	
	function calculaFrete() {
		$('#calcularCEP').click(function (event) {
			var cep = $('#cep').val();
			event.preventDefault;
			
				
			var data1 = { cep: cep, time: "2pm" } ;
			var urlAjax = "<?php echo $this->Html->url('/registrar'); ?>";
			
			var resultado = $('#resultado_envio');
			
			$.ajax({
				cache: false,
				type : "post",
				contentType : "application/x-www-form-urlencoded; charset=UTF-8",
				url: urlAjax,
				data: data1,
				success: function(data) {
					var resul = "<h4 class='textColorB'>" + data + "</h4>";
					
					resultado.append(resul);
			  	},
			  	error: function() {
			  		var resul = "<h4 class='textColorB'>Ocorreu um erro inesperado, tente novamente.</h4>";
			  		resultado.append(resul);
			  	}
			});
	
			
	});
}
	
	
</script>

<script type="text/javascript" src="<?php echo $this->Html->url('/js/carrinho.js'); ?>"></script>


<div class="row rowFixHorizScroll marginTopD marginBotF bkgD">
      <div class="container ProShopCart">

            <div class="row bkgD">
            <div class="col-xs-12">
                  <p class="InternaTitulo fonteDosis400">MINHA CONTA - CARRINHO DE COMPRAS</p>
            </div>
            </div>
            
           	<div class="simpleCart_display"></div>
           	
            <br>

            <div class="row">
            <hr class="hrShopCart">
            </div>
            
            <div class="row marginBotA TxtCalculos">
            <div class="col-lg-8 col-md-8 col-sm-7 text-right"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-7 text-right marginTopA">SUBTOTAL</div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 ValorSubtotal text-right"><div class="simpleCart_total"></div></div>
            </div>

            <div class="row">
            <hr class="hrShopCart">
            </div>

            <div class="row marginBotA TxtCalculos">
            <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 text-right">CALCULE O FRETE. <br>DIGITE O CEP DE ENTREGA</div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7 text-right">
            	<input type="text" class="form-control" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" name="cep" id="cep">
        	</div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-5 text-right">
            	<button type="submit" class="btn btn-ButtonCalc simpleCart_frete" >CALCULAR</button>
        	</div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 ValorSubtotal text-right">
            	<div class="simpleCart_shipping"></div></div>
            </div>

            <div class="row marginBotA TxtCalculos">
            <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 text-right marginTopA">CÓDIGO PROMOCIONAL</div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7 text-right"><input type="text" class="form-control"></div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-5 text-right"><button type="submit" class="btn btn-ButtonCalc">CALCULAR</button></div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 ValorSubtotal text-right">- R$ 0,00</div>
            </div>

            <div class="row">
            <hr class="hrShopCart">
            </div>

            <div class="row marginBotA TxtCalculos">
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 text-right">ENVIAR COMO PRESENTE &nbsp;&nbsp;<input type="checkbox"></div>
            <div class="col-lg-2 col-md-2 col-sm-3"></div>
            </div>

            <div class="row">
            <hr class="hrShopCart">
            </div>

            <div class="row marginBotA TxtCalculos">
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 text-right marginTopA">TOTAL</div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 text-right ValorFinal"><div class="simpleCart_grandTotal"></div></div>
            </div>

            <div class="row">
            <hr class="hrShopCart">
            </div>

            <div class="row marginBotF">
            <div class="col-lg-3 col-lg-offset-6 col-md-3 col-md-offset-6 col-sm-4 col-sm-offset-4 col-xs-12 marginBotA">
                    <button type="submit" class="btn btn-ContCompras fonteDosis500" onclick="goBack()">Continuar Comprando</button>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-FinalCompras fonteDosis500 simpleCart_checkout">Finalizar Compra</button>
            </div>
            </div>
            
      </div>
</div>
