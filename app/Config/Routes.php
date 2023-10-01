<?php

use CodeIgniter\Router\RouteCollection;


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);




/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal_ultimo', 'Home::principal');
$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/acercade', 'Home::acercade');
$routes->get('/registrar_usuario', 'Home::registrar_usuario');
$routes->get('/login', 'Home::login');

//Rutas del Registro de Usuario
$routes->get('/login', 'usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::guardar');


//rutas del login
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');


$routes->get('/catalogo', 'Home::catalogo');


//ABM de usuario
$routes->get('/ver_usuario', 'usuario_controller::verUsuarios');
$routes->get('/editar_usuario/(:num)', 'usuario_controller::editarUsuario/$1');
$routes->post('/actualizar', 'usuario_controller::actualizar');
$routes->get('/ver_usuario/delete/(:num)', 'Usuario_Controller::delete/$1');




