<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
//$routes->setDefaultController('UsuariosController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'UsuariosController::login');
$routes->get('/', 'Home::index');
$routes->add('login', 'UsuariosController::valida', ['as' => 'login']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

//unidades
$routes->get('verunidades','UnidadesController::unidades');
$routes->get('eliminar_unidades/(:num)','UnidadesController::eliminar/$1');
$routes->get('localizar_modificar_unidades/(:num)','UnidadesController::localizar/$1');
$routes->post('guardar_unidades','UnidadesController::guardar');
$routes->post('modificar_unidades','UnidadesController::modificar');
//categorias
$routes->get('vercategorias','CategoriasController::categoria');
$routes->get('eliminar_categorias/(:num)','CategoriasController::eliminar/$1');
$routes->get('localizar_modificar_categorias/(:num)','CategoriasController::localizar/$1');
$routes->post('guardar_categorias','CategoriasController::guardar');
$routes->post('modificar_categorias','CategoriasController::modificar');
//productos
$routes->get('verproductos','ProductosController::producto');
$routes->get('eliminar_productos/(:num)','ProductosController::eliminar/$1');
$routes->get('localizar_modificar_productos/(:num)','ProductosController::localizar/$1');
$routes->post('guardar_productos','ProductosController::guardar');
$routes->post('modificar_productos','ProductosController::modificar');
//clientes
$routes->get('verclientes','ClientesController::clientes');
$routes->get('eliminar_clientes/(:num)','ClientesController::eliminar/$1');
$routes->get('localizar_modificar_clientes/(:num)','ClientesController::localizar/$1');
$routes->post('guardar_clientes','ClientesController::guardar');
$routes->post('modificar_clientes','ClientesController::modificar');
//configuración
$routes->get('verconfiguracion','ConfiguracionController::configuracion');
$routes->get('eliminar_configuracion/(:num)','ConfiguracionController::eliminar/$1');
$routes->get('localizar_modificar_configuracion/(:num)','ConfiguracionController::localizar/$1');
$routes->post('guardar_configuracion','ConfiguracionController::guardar');
$routes->post('modificar_configuracion','ConfiguracionController::modificar');
//usuarios
$routes->get('verusuarios','UsuariosController::usuarios');
$routes->get('eliminar_usuarios/(:num)','UsuariosController::eliminar/$1');
$routes->get('localizar_modificar_usuarios/(:num)','UsuariosController::localizar/$1');
$routes->post('guardar_usuarios','UsuariosController::guardar');
$routes->post('modificar_usuarios','UsuariosController::modificar');
//cajas
$routes->get('vercajas','CajasController::cajas');
$routes->get('eliminar_cajas/(:num)','CajasController::eliminar/$1');
$routes->get('localizar_modificar_cajas/(:num)','CajasController::localizar/$1');
$routes->post('guardar_cajas','CajasController::guardar');
$routes->post('modificar_cajas','CajasController::modificar');
//roles
$routes->get('verroles','RolesController::roles');
$routes->get('eliminar_roles/(:num)','RolesController::eliminar/$1');
$routes->get('localizar_modificar_roles/(:num)','RolesController::localizar/$1');
$routes->post('guardar_roles','RolesController::guardar');
$routes->post('modificar_roles','RolesController::modificar');