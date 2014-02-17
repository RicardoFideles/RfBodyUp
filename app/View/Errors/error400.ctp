<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<div class="row rowFixHorizScroll marginTopD marginBotF bkgD">
      <div class="container">
            <div class="col-xs-12">
            <p class="InternaTitulo fonteDosis400">ERRO 404</p>
            <br />
            <p class="InternaSubTitulo fonteDosis400">Ops! Algo parece ter dado errado.</p>
            <br />
            <?php printf(
				__d('cake', 'A página %s não foi encontrada.'),
				"<strong>'{$url}'</strong>"
			); ?>
			 <br /><br />
            Sentimos muito que tenha ocorrido. Tente novamente por favor ou entre em contato nossa Central de Atendimento.
            <br /><br /><br /><br /><br /><br /><br />
            <?php
				if (Configure::read('debug') > 0):
					echo $this->element('exception_stack_trace');
				endif;
			?>
            
            </div>
      </div>
</div>
