$(document).ready(function() {
  	email();
});


function email() {
	$('#form-envio').submit(function (event) {
		event.preventDefault;
		var form = $(this);
		console.log(form);
		
		console.log(validarFormEnvioEmail(form));
		
		if (validarFormEnvioEmail(form)) {
			
		var data1 = $(this).serialize(), urlAjax = $(this).attr('action');
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
		}

		limparFormulario(form);
		
		return false;
	});
}

function validarForm(form, regras, mensagens) {
	var $form = $(form);
	var validou = true;
	
	$form.find("input, textarea").each(function (i, campo) {
		
		var $campo = $(campo);
		var regra = regras[$campo.attr("name")];
		var classe = $campo.attr("name");
		var mensagem = mensagens[$campo.attr("name")];
		
		if(regra && mensagem) {
			
			var erro;
			if(regra.obrigatorio && mensagem.obrigatorio 
				&& $campo.val().trim() == "") {
				erro = mensagem.obrigatorio;
			} else if(regra.tamanhoMin && mensagem.tamanhoMin 
					&& $campo.val().trim().length < regra.tamanhoMin) {
				erro = mensagem.tamanhoMin;
			} else if(regra.tamanhoMax && mensagem.tamanhoMax 
					&& $campo.val().trim().length > regra.tamanhoMax) {
				erro = mensagem.tamanhoMax;
			} else if(regra.email && mensagem.email 
					&& !isEmail($campo.val().trim())) {
				erro = mensagem.email;
			}
			
			var span = $campo.siblings('.' + classe);
			
			span.html('');
			 
			if(erro) {
				span.html(erro);
				span.show();
				validou = false;
			} else {
				span.hide();
			}
			
		}
	});
	
	return validou;
}

function isEmail(valor) {
	return valor.match("^[\\w-]+(\\.[\\w-]+)*@([\\w-]+\\.)+[a-zA-Z]{2,3}$");
}

function validarFormEnvioEmail(form) {
	var regras = {
		"name":{obrigatorio: true, tamanhoMin: 3},
	    "email":{obrigatorio: true, email: true},
	};
	
	var mensagens = {
	    "name":{obrigatorio: "Digite o seu nome", tamanhoMin: "Nome inv&aacute;lido"},
	    "email":{obrigatorio: "Email Inv&aacute;lido", email: "Email Inv&aacute;lido"}
	};	
	return validarForm(form, regras, mensagens);
} 

function limparFormulario(form) {
	var $form = $(form);
	$form.find("input, textarea").each(function (i, campo) {
		
		var $campo = $(campo);
		
		if ($campo.attr("name") != "submit") {
			$campo.val("");
		}
		
	});
}