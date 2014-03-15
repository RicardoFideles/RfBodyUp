<?php

if (file_exists(APP . 'Vendor' . DS . 'RsCorreios.php')) {
	App::import('Vendor', 'RsCorreios');
}

class CorreiosController extends AppController {
	
	
	public function frete () {
		
		var_dump($this->request->data);
		exit;
		
		$cep_destino = $this->request->data['cep'];
		
		$peso = $this->request->data['peso'];
		
		$settings =  Configure::read('Config.settings');
		
		$cep_origem = $settings['Setting']['cep'];
		
		$frete = new RsCorreios();

		// Percorre todos as variáveis $_POST para setar os atributos necessários
		// Se você achar melhor pode fazer 1 a 1.
		// Ex.: $frete->setValue('sCepOrigem', $_POST['sCepOrigem']);
		// Aqui estou usando um foreach para economizar código
		/*
		foreach ($_POST as $key => $value) {
		    $frete->setValue($key, $value);
		}
		 **/
		
		$frete->setValue("sCepOrigem", $cep_origem);
		$frete->setValue("sCepDestino", $cep_destino);
		$frete->setValue("nVlPeso", $peso);
		$frete->setValue("nVlComprimento", 22);
		$frete->setValue("nVlAltura", 3);
		$frete->setValue("nVlLargura", 15);
		$frete->setValue("nCdServico", 41106);
		
		// Diâmetro
		$frete->getDiametro();
		
		// Chamado ao método getFrete, que irá se comunicar com os correios
		// e nos trazer o resultado
		$result = $frete->getFrete();
		
		
		// Retornamos a mensagem de erro caso haja alguma falha
		if ($result['erro'] != 0) {
		    $resultadoFrete = $result['msg_erro'];
		}
		// Caso não haja erros mostramos o resultado de cada variável retornada pelos correios.
		// Use apenas as que forem de seu interesse
		else {
			
			var_dump("deu certo");
			var_dump($result['valor']);
			exit;
			/*
			$resultadoFrete = "Código do Serviço: " . $result['servico_codigo'] . "<br />";
			$resultadoFrete .= "Valor do Frete: R$ " . $result['valor'] . "<br />";
			$resultadoFrete .= "Prazo de Entrega: " . $result['prazo_entrega'] . " dias <br />";
			$resultadoFrete .= "Valor p/ Mão Própria: R$ " . $result['mao_propria'] . "<br />";
			$resultadoFrete .= "Valor Aviso de Recebimento: R$ " . $result['aviso_recebimento'] . "<br />";
			$resultadoFrete .= "Valor Declarado: R$ " . $result['valor_declarado'] . "<br />";
			$resultadoFrete .= "Entrega Domiciliar: " . $result['en_domiciliar'] . "<br />";
			$resultadoFrete .= "Entrega Sábado: " . $result['en_sabado'] . "<br />";
			 * 
			 */
		}
	}
	
}

?>