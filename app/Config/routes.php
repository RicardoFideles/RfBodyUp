<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/en', array('controller' => 'pages', 'action' => 'display', 'home_en'));
	
	
	Router::connect('/sobre', array('controller' => 'pages', 'action' => 'display', 'sobre'));
	Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
	
	Router::connect('/contato', array('controller' => 'pages', 'action' => 'display', 'contato'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'contact'));
	
	Router::connect('/lojas', array('controller' => 'pages', 'action' => 'display', 'lojas'));
	Router::connect('/stores', array('controller' => 'pages', 'action' => 'display', 'stores'));
	
	Router::connect('/produtos', array('controller' => 'pages', 'action' => 'display', 'produtos'));
	Router::connect('/products', array('controller' => 'pages', 'action' => 'display', 'products'));
	
	Router::connect('/politica-de-privacidade', array('controller' => 'pages', 'action' => 'display', 'politica-de-privacidade'));
	Router::connect('/privacy-policy', array('controller' => 'pages', 'action' => 'display', 'privacy-policy'));
	
	Router::connect('/duvidas-frequentes', array('controller' => 'pages', 'action' => 'display', 'duvidas-frequentes'));
	Router::connect('/customer-service', array('controller' => 'pages', 'action' => 'display', 'customer-service'));
	
	Router::connect('/termos-e-condicoes-uso', array('controller' => 'pages', 'action' => 'display', 'termos-e-condicoes-uso'));
	Router::connect('/conditions-of-use', array('controller' => 'pages', 'action' => 'display', 'conditions-of-use'));
	
	
	Router::connect('/busca', array('controller' => 'pages', 'action' => 'display', 'busca'));
	Router::connect('/carrinho', array('controller' => 'pages', 'action' => 'display', 'carrinho'));
	
	Router::connect('/calculaFrete', array('controller' => 'correios', 'action' => 'frete'));
	
	
	
	Router::connect('/categoria/:slug', array(
        'controller' => 'products',
        'action' => 'lista'), array(
            'pass' => array('slug'),        
            'slug' => '[a-z\-\.]+'
            
    ));
	
	Router::connect('/categoria/:slug/:page', array(
        'controller' => 'products',
        'action' => 'lista'), array(
            'pass' => array('slug','page'),        
            'slug' => '[a-z\-\.]+',
            'page' => '[0-9.]+'
    ));
	
	Router::connect('/categoria/:slug/:page/:quantidade', array(
        'controller' => 'products',
        'action' => 'lista'), array(
            'pass' => array('slug','page','quantidade'),        
            'slug' => '[a-z\-\.]+',
            'page' => '[0-9.]+',
            'quantidade' => '[0-9.]+'
    ));
	
	
	#rotas dinâmicas
    Router::connect('/produto/:slug', array(
        'controller' => 'products',
        'action' => 'view'), array(
            'pass' => array('slug'),        
            'slug' => '[a-z0-9\-\.]+'
    ));
	
	
	
	
	# Rotas do painel de controle
    Router::connect('/admin', array('controller' => 'users', 'action' => 'dashboard', 'admin' => true));
    Router::connect('/admin/login', array('controller' => 'users', 'action' => 'login', 'admin' => true));
    Router::connect('/admin/logout', array('controller' => 'users', 'action' => 'logout', 'admin' => true));
	
	
	# Rotas do painel de controle
    Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout', 'guest' => true));
	Router::connect('/painel', array('controller' => 'users', 'action' => 'dashboard', 'guest' => true));
	
	#registra compra
	Router::connect('/registrar', array('controller' => 'transactions', 'action' => 'registrar'));
	
	
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
