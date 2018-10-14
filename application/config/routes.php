<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

// $route['default_controller'] = "welcome";
	$route['default_controller'] = "frontend/controller_index";
	$route['404_override'] = '';
	$route['frontend/ajax/verificarEmail'] 			= "frontend/controller_ajax/verificarEmail";

//Ajax
	$route['frontend/ajax/agregarProducto'] 		= "frontend/controller_ajax/agregarProducto";
	$route['frontend/ajax/eliminaItemCarro']		= "frontend/controller_ajax/eliminaItemCarro";
	$route['frontend/ajax/eliminaCarro'] 			= "frontend/controller_ajax/eliminaCarro";
	$route['frontend/ajax/actualizarCotizacion'] 	= "frontend/controller_ajax/actualizarCotizacion";
	$route['frontend/ajax/verificarEmail'] 			= "frontend/controller_ajax/verificarEmail";
//frontend

//empresa
	$route["empresa"] = "frontend/controller_empresa";

//clientes
	$route["clientes"] = "frontend/controller_clientes";
	$route["clientes/([0-9]+)"] = "frontend/controller_clientes";

//album
	$route["album"] = "frontend/controller_album";
	$route["album/([0-9]+)"] = "frontend/controller_album";
	$route["album/([0-9]+)-(.*)"] = "frontend/controller_album/detalle_album/$1/$2";

// cotizacion
	$route["cotizacion"] = "frontend/controller_cotizacion";
	$route["cotizacion/detalle"] = "frontend/controller_cotizacion/detalle";
	$route["cotizacion/completar"] = "frontend/controller_cotizacion/completar";
	$route["cotizacion/enviar"] = "frontend/controller_cotizacion/enviar";
	$route["cotizacion/enviado"] = "frontend/controller_cotizacion/enviado";

//articulos
	$route["articulos"] = "frontend/controller_articulos";
	$route["articulos/([0-9]+)"] = "frontend/controller_articulos";
	$route["articulos/([0-9]+)-(.*)"] = "frontend/controller_articulos/detalle_articulos/$1/$2";

//detalle de productos
	$route["productos/(.*)/([0-9]+)-(.*)"] = "frontend/controller_productos/detalle_productos/$1/$2/$3";
	//$route["productos/([0-9]+)-(.*)/([0-9]+)"] = "frontend/controller_productos/productos/$1/$2";
	//$route["productos"] = "frontend/controller_productos";
	//$route["productos/([0-9]+)"] = "frontend/controller_productos";
	//$route["productos/([0-9]+)-(.*)"] = "frontend/controller_productos/detalle_productos/$1/$2";

// contacto
	$route["contacto"] = "frontend/controller_contacto";
	$route["contacto/send"] = "frontend/controller_contacto/send";

// ubicanos
	//$route['ubicanos'] = "frontend/controller_ubicanos";
	$route['ajax/cargaContenido'] = "frontend/controller_ajax/cargaContenido";

//LOGIN
	$route["login"] = "frontend/controller_login";
	$route["login/_valid_login"] = "frontend/controller_login/_valid_login";
	$route["login/valid_login_ajax"] = "frontend/controller_login/valid_login_ajax";
	$route["login/logout"] = "frontend/controller_login/logout";
	$route["login/recuperar"] = "frontend/controller_login/recuperar";
	$route["login/recuperarClave"] = "frontend/controller_login/recuperarClave";

//REGISTRO
	$route["registro"] = "frontend/controller_registro";
	$route["registro/grabar"] = "frontend/controller_registro/grabar";
	$route["registro/verificarEmail"] = "frontend/controller_registro/verificarEmail";

//categorias
	$route["productos"] = "frontend/controller_productos";
	$route["productos/([0-9]+)"] = "frontend/controller_productos";

//categorias impresion
	$route["impresiones"] = "frontend/controller_impresiones";
	$route["impresiones/([0-9]+)"] = "frontend/controller_impresiones";

//productos * categorias
	$route["subcategorias/([0-9]+)-(.*)"] = "frontend/controller_productos/subcategorias/$1/$2";
	$route["subcategorias/([0-9]+)-(.*)/([0-9]+)"] = "frontend/controller_productos/subcategorias/$1/$2";

	$route["productos/([0-9]+)-(.*)"] = "frontend/controller_productos/productos/$1/$2";
	$route["productos/([0-9]+)-(.*)/([0-9]+)"] = "frontend/controller_productos/productos/$1/$2";

//impresiones * categorias impresion
	$route["subcategorias_impresion/([0-9]+)-(.*)"] = "frontend/controller_impresiones/subcategorias/$1/$2";
	$route["subcategorias_impresion/([0-9]+)-(.*)/([0-9]+)"] = "frontend/controller_impresiones/subcategorias/$1/$2";

	$route["impresiones/([0-9]+)-(.*)"] = "frontend/controller_impresiones/impresiones/$1/$2";
	$route["impresiones/([0-9]+)-(.*)/([0-9]+)"] = "frontend/controller_impresiones/impresiones/$1/$2";

//detalle de impresiones impresion
	$route["impresiones/(.*)/([0-9]+)-(.*)"] = "frontend/controller_impresiones/detalle_impresiones/$1/$2/$3";

/*//impresiones
	$route["impresiones"] = "frontend/controller_productos/impresiones";
	$route["impresiones/([0-9]+)"] = "frontend/controller_productos/impresiones";*/
	$route["impresiones/send"] = "frontend/controller_contacto/impresiones";

/**************************************main panel***************************************************/
/********************************************************************************************/

// administracion del mainpanel
	$route["mainpanel"] = "mainpanel/controller_login";
	$route["MAINPANEL"] = "mainpanel/controller_login";
	$route["RAYRO/MAINPANEL"] = "mainpanel/controller_login";
	$route["mainpanel/login"] = "mainpanel/controller_login/login";
	$route["mainpanel/validar"] = "mainpanel/controller_login/validar";
	$route["mainpanel/logout"] = "mainpanel/controller_login/logout";

// Modificar datos
	$route["mainpanel/mis-datos"] = "mainpanel/controller_datos";

// config
	$route["mainpanel/configuracion/listado"] = "mainpanel/controller_config/listado";
	$route["mainpanel/configuracion/edit/([0-9]+)"] = "mainpanel/controller_config/edit/$1";
	$route["mainpanel/configuracion/actualizar"] = "mainpanel/controller_config/actualizar";

// banners
	$route["mainpanel/banners"] = "mainpanel/controller_banner";
	$route["mainpanel/banners/nuevo"] = "mainpanel/controller_banner/nuevo";
	$route["mainpanel/banners/grabar"] = "mainpanel/controller_banner/grabar";
	$route["mainpanel/banners/edit/([0-9]+)"] = "mainpanel/controller_banner/edit/$1";
	$route["mainpanel/banners/actualizar"] = "mainpanel/controller_banner/actualizar";
	$route['mainpanel/banners/delete/([0-9]+)'] = "mainpanel/controller_banner/delete/$1";
	$route["mainpanel/banner_pagina"] = "mainpanel/controller_banner_pagina";
	$route["mainpanel/banner_pagina/edit/([0-9]+)"] = "mainpanel/controller_banner_pagina/edit/$1";
	$route["mainpanel/banner_pagina/actualizar"] = "mainpanel/controller_banner_pagina/actualizar";

// Secciones
	$route["mainpanel/secciones/listado"] = "mainpanel/controller_secciones/listado";
	$route['mainpanel/secciones/edit/([0-9]+)'] = "mainpanel/controller_secciones/edit/$1";
	$route['mainpanel/secciones/actualizar'] = "mainpanel/controller_secciones/actualizar";

/*************************************************************************************/
	$route['mainpanel/controller_ajax/cargaOrdenProducto'] = "mainpanel/controller_ajax/cargaOrdenProducto";
	$route['mainpanel/controller_ajax/cargaSubcategorias'] = "mainpanel/controller_ajax/cargaSubcategorias";
	$route['mainpanel/controller_ajax/cargaSubcategoriasImpresion'] = "mainpanel/controller_ajax/cargaSubcategoriasImpresion";

// empresa
	$route['mainpanel/empresa'] = "mainpanel/controller_secciones/edit_somos";
	$route['mainpanel/empresa/quienes-somos'] = "mainpanel/controller_secciones/edit_somos";
	$route["mainpanel/secciones/actualizar-empresa"] = "mainpanel/controller_secciones/actualizar_empresa";
	$route["mainpanel/secciones/actualizar_quienes_somos"] = "mainpanel/controller_secciones/actualizar_quienes_somos";
	$route['mainpanel/empresa/nuevo'] = "mainpanel/controller_empresa/nuevo";
	$route['mainpanel/empresa/delete/([0-9]+)'] = "mainpanel/controller_empresa/delete/$1";
	$route['mainpanel/empresa/edit/([0-9]+)'] = "mainpanel/controller_empresa/edit/$1";
	$route['mainpanel/empresa/actualizar'] = "mainpanel/controller_empresa/actualizar";
	$route['mainpanel/empresa/grabar'] = "mainpanel/controller_empresa/grabar";

//Galeria 
	$route["mainpanel/galeria/listar"] = "mainpanel/controller_galeria/listar";
	$route["mainpanel/fotos/listado/([0-9]+)"] = "mainpanel/controller_fotos/listado/$1";
	$route["mainpanel/fotos/nuevo/([0-9]+)"] = "mainpanel/controller_fotos/nuevo/$1";
	$route["mainpanel/fotos/grabar"] = "mainpanel/controller_fotos/grabar";
	$route["mainpanel/fotos/edit/([0-9]+)"] = "mainpanel/controller_fotos/edit/$1";
	$route["mainpanel/fotos/actualizar"] = "mainpanel/controller_fotos/actualizar";

//Articulos
	$route["mainpanel/articulos/listar"] = "mainpanel/controller_articulos/listar";
	$route["mainpanel/articulos/nuevo"] = "mainpanel/controller_articulos/nuevo";
	$route["mainpanel/articulos/edit/([0-9]+)"] = "mainpanel/controller_articulos/edit/$1";
	$route["mainpanel/articulos/grabar"] = "mainpanel/controller_articulos/grabar";
	$route["mainpanel/articulos/actualizar"] = "mainpanel/controller_articulos/actualizar";
	$route["mainpanel/articulos/borrar/([0-9]+)"] = "mainpanel/controller_articulos/borrar/$1";

//Contacto
	$route["mainpanel/seccion/contacto"] = "mainpanel/controller_secciones/edit_contacto";
	$route["mainpanel/secciones/actualizar-contacto"] = "mainpanel/controller_secciones/actualizar_contacto";

//suscribete
	$route['mainpanel/suscribete/recibidos'] = "mainpanel/controller_suscribete/recibidos";
	$route['mainpanel/suscribete/detalle_recibido/([0-9]+)'] = "mainpanel/controller_suscribete/detalle_recibido/$1";
	$route['mainpanel/suscribete/delete/([0-9]+)'] = "mainpanel/controller_suscribete/delete/$1";

// mensajes	
	$route['mainpanel/mensajes/recibidos'] = "mainpanel/controller_mensajes/recibidos";
	$route['mainpanel/mensajes/detalle_recibido/([0-9]+)'] = "mainpanel/controller_mensajes/detalle_recibido/$1";
	$route['mainpanel/mensajes/delete/([0-9]+)'] = "mainpanel/controller_mensajes/delete/$1";

// Clientes
$route["mainpanel/clientes/listar"] = "mainpanel/controller_clientes/listar";
$route["mainpanel/clientes/detalle/([0-9]+)"] = "mainpanel/controller_clientes/detalle/$1";
$route["mainpanel/clientes/edit/([0-9]+)"] = "mainpanel/controller_clientes/edit/$1";
$route["mainpanel/clientes/grabar"] = "mainpanel/controller_clientes/grabar";
$route["mainpanel/clientes/actualizar"] = "mainpanel/controller_clientes/actualizar";
$route["mainpanel/clientes/borrar/([0-9]+)"] = "mainpanel/controller_clientes/borrar/$1";

// Ordenes
$route["mainpanel/ordenes/listar"] = "mainpanel/controller_ordenes/listar";
$route["mainpanel/ordenes/enviar_cotizacion"] = "mainpanel/controlador_ordenes/enviar_cotizacion";
$route["mainpanel/ordenes/revisado/([0-9]+)"] = "mainpanel/controller_ordenes/revisado/$1";
$route["mainpanel/ordenes/detalle/([0-9]+)"] = "mainpanel/controller_ordenes/detalle/$1";
$route["mainpanel/ordenes/cotizar/([0-9]+)"] = "mainpanel/controller_ordenes/cotizar/$1";
$route["mainpanel/ordenes/cotizada/([0-9]+)"] = "mainpanel/controller_ordenes/cotizada/$1";
$route["mainpanel/ordenes/borrar/([0-9]+)"] = "mainpanel/controller_ordenes/borrar/$1";

/*//impresiones
	$route["mainpanel/impresiones"] = "mainpanel/controller_impresiones";
	$route["mainpanel/secciones/actualizar-impresiones"] = "mainpanel/controller_secciones/actualizar_impresiones";*/

//categorias
	$route["mainpanel/categorias/listar"] = "mainpanel/controller_categorias/listar";
	$route["mainpanel/categorias/nuevo"] = "mainpanel/controller_categorias/nuevo";
	$route["mainpanel/categorias/edit/([0-9]+)"] = "mainpanel/controller_categorias/edit/$1";
	$route["mainpanel/categorias/grabar"] = "mainpanel/controller_categorias/grabar";
	$route["mainpanel/categorias/actualizar"] = "mainpanel/controller_categorias/actualizar";
	$route["mainpanel/categorias/borrar/([0-9]+)"] = "mainpanel/controller_categorias/borrar/$1";


// subcategorias
	$route["mainpanel/subcategorias/listar/([0-9]+)"] = "mainpanel/controller_subcategorias/listar/$1";
	$route["mainpanel/subcategorias/nuevo"] = "mainpanel/controller_subcategorias/nuevo";
	$route["mainpanel/subcategorias/grabar"] = "mainpanel/controller_subcategorias/grabar";
	$route["mainpanel/subcategorias/edit/([0-9]+)"] = "mainpanel/controller_subcategorias/edit/$1";
	$route["mainpanel/subcategorias/actualizar"] = "mainpanel/controller_subcategorias/actualizar";
	$route["mainpanel/subcategorias/borrar/([0-9]+)"] = "mainpanel/controller_subcategorias/borrar/$1";

//productos 	
	$route["mainpanel/productos/listado/([0-9]+)"] = "mainpanel/controller_productos/listado/$1";
	$route["mainpanel/productos/listar"] = "mainpanel/controller_productos/listar";
	$route['mainpanel/productos/listar/([0-9]+)'] = "mainpanel/controller_productos/listar/$1";
	$route['mainpanel/productos/nuevo'] = "mainpanel/controller_productos/nuevo";
	//$route["mainpanel/productos/nuevo/([0-9]+)"] = "mainpanel/controller_productos/nuevo/$1";
	$route["mainpanel/productos/grabar"] = "mainpanel/controller_productos/grabar";
	$route["mainpanel/productos/edit/([0-9]+)"] = "mainpanel/controller_productos/edit/$1";
	$route["mainpanel/productos/actualizar"] = "mainpanel/controller_productos/actualizar";
	$route["mainpanel/productos/borrar/([0-9]+)"] = "mainpanel/controller_productos/borrar/$1";

	$route["mainpanel/productos/destacado"] = "mainpanel/controller_productos/destacado";

//categorias impresiones
	$route["mainpanel/categorias_impresion/listar"] = "mainpanel/controller_categorias_impresion/listar";
	$route["mainpanel/categorias_impresion/nuevo"] = "mainpanel/controller_categorias_impresion/nuevo";
	$route["mainpanel/categorias_impresion/edit/([0-9]+)"] = "mainpanel/controller_categorias_impresion/edit/$1";
	$route["mainpanel/categorias_impresion/grabar"] = "mainpanel/controller_categorias_impresion/grabar";
	$route["mainpanel/categorias_impresion/actualizar"] = "mainpanel/controller_categorias_impresion/actualizar";
	$route["mainpanel/categorias_impresion/borrar/([0-9]+)"] = "mainpanel/controller_categorias_impresion/borrar/$1";

// subcategorias impresion
	$route["mainpanel/subcategorias_impresion/listar/([0-9]+)"] = "mainpanel/controller_subcategorias_impresion/listar/$1";
	$route["mainpanel/subcategorias_impresion/nuevo"] = "mainpanel/controller_subcategorias_impresion/nuevo";
	$route["mainpanel/subcategorias_impresion/grabar"] = "mainpanel/controller_subcategorias_impresion/grabar";
	$route["mainpanel/subcategorias_impresion/edit/([0-9]+)"] = "mainpanel/controller_subcategorias_impresion/edit/$1";
	$route["mainpanel/subcategorias_impresion/actualizar"] = "mainpanel/controller_subcategorias_impresion/actualizar";
	$route["mainpanel/subcategorias_impresion/borrar/([0-9]+)"] = "mainpanel/controller_subcategorias_impresion/borrar/$1";

//impresiones	
	$route["mainpanel/impresiones/listado/([0-9]+)"] = "mainpanel/controller_impresiones/listado/$1";
	$route["mainpanel/impresiones/listar"] = "mainpanel/controller_impresiones/listar";
	$route['mainpanel/impresiones/listar/([0-9]+)'] = "mainpanel/controller_impresiones/listar/$1";
	$route['mainpanel/impresiones/nuevo'] = "mainpanel/controller_impresiones/nuevo";
	$route["mainpanel/impresiones/nuevo/([0-9]+)"] = "mainpanel/controller_impresiones/nuevo/$1";
	$route["mainpanel/impresiones/grabar"] = "mainpanel/controller_impresiones/grabar";
	$route["mainpanel/impresiones/edit/([0-9]+)"] = "mainpanel/controller_impresiones/edit/$1";
	$route["mainpanel/impresiones/actualizar"] = "mainpanel/controller_impresiones/actualizar";
	$route["mainpanel/impresiones/borrar/([0-9]+)"] = "mainpanel/controller_impresiones/borrar/$1";

//texto grafica impresiones
	$route["mainpanel/impresiones/texto-grafica"] = "mainpanel/controller_secciones/edit_grafica";
	$route["mainpanel/secciones/actualizar-grafica"] = "mainpanel/controller_secciones/actualizar_grafica";

//texto galeria impresiones
	$route["mainpanel/impresiones/texto-galeria"] = "mainpanel/controller_secciones/edit_album";
	$route["mainpanel/secciones/actualizar-album"] = "mainpanel/controller_secciones/actualizar_album";

//texto cotizacion impresiones
	$route["mainpanel/impresiones/texto-cotizacion"] = "mainpanel/controller_secciones/edit_cotizacion";
	$route["mainpanel/secciones/actualizar-cotizacion"] = "mainpanel/controller_secciones/actualizar_cotizacion";
	$route["mainpanel/impresiones/listado"] = "mainpanel/controller_impresiones/listado";
	$route["mainpanel/impresiones/nuevo"] = "mainpanel/controller_impresiones/nuevo";
	$route["mainpanel/impresiones/grabar"] = "mainpanel/controller_impresiones/grabar";
	$route["mainpanel/impresiones/edit/([0-9]+)"] = "mainpanel/controller_impresiones/edit/$1";
	$route["mainpanel/impresiones/actualizar"] = "mainpanel/controller_impresiones/actualizar";
	$route["mainpanel/impresiones/borrar/([0-9]+)"] = "mainpanel/controller_impresiones/borrar/$1";

/******************************************************************************************************************************************************/
/* Servicios
	$route["mainpanel/seccion/servicios"] = "mainpanel/controller_secciones/edit_servicios";
	$route["mainpanel/secciones/actualizar-servicios"] = "mainpanel/controller_secciones/actualizar_servicios";
	$route['mainpanel/servicios/listado'] = "mainpanel/controller_servicios/listado";
	$route['mainpanel/servicios/nuevo'] = "mainpanel/controller_servicios/nuevo";
	$route['mainpanel/servicios/delete/([0-9]+)'] = "mainpanel/controller_servicios/delete/$1";
	$route['mainpanel/servicios/edit/([0-9]+)'] = "mainpanel/controller_servicios/edit/$1";
	$route['mainpanel/servicios/actualizar'] = "mainpanel/controller_servicios/actualizar";
	$route['mainpanel/servicios/grabar'] = "mainpanel/controller_servicios/grabar";

//clientes
	$route["mainpanel/seccion/clientes"] = "mainpanel/controller_secciones/edit_clientes";
	$route["mainpanel/secciones/actualizar-clientes"] = "mainpanel/controller_secciones/actualizar_clientes";
	$route['mainpanel/clientes/listado'] = "mainpanel/controller_clientes/listado";
	$route['mainpanel/clientes/nuevo'] = "mainpanel/controller_clientes/nuevo";
	$route['mainpanel/clientes/delete/([0-9]+)'] = "mainpanel/controller_clientes/delete/$1";
	$route['mainpanel/clientes/edit/([0-9]+)'] = "mainpanel/controller_clientes/edit/$1";
	$route['mainpanel/clientes/actualizar'] = "mainpanel/controller_clientes/actualizar";
	$route['mainpanel/clientes/grabar'] = "mainpanel/controller_clientes/grabar";*/

//Contización
	/*$route["mainpanel/seccion/cotizacion"] = "mainpanel/controller_cotizacion/recibidos";
	$route["mainpanel/secciones/actualizar-cotizacion"] = "mainpanel/controller_secciones/actualizar_cotizacion";*/
	$route['mainpanel/cotizacion/recibidos'] = "mainpanel/controller_cotizacion/recibidos";
	$route['mainpanel/cotizacion/detalle_recibido/([0-9]+)'] = "mainpanel/controller_cotizacion/detalle_recibido/$1";
	$route['mainpanel/cotizacion/delete/([0-9]+)'] = "mainpanel/controller_cotizacion/delete/$1";

/* suscríbete
	$route['mainpanel/suscribete/recibidos'] = "mainpanel/controller_suscribete/recibidos";
	$route['mainpanel/suscribete/detalle_recibido/([0-9]+)'] = "mainpanel/controller_suscribete/detalle_recibido/$1";
	$route['mainpanel/suscribete/delete/([0-9]+)'] = "mainpanel/controller_suscribete/delete/$1";*/

// ubicanos
	$route['mainpanel/ubicanos/listado'] = "mainpanel/controller_mapa/listado";
	$route['mainpanel/ubicanos/editar/([0-9]+)'] = "mainpanel/controller_mapa/editar/$1";
	$route['mainpanel/ubicanos/actualizar'] = "mainpanel/controller_mapa/actualizar";
	$route["(.*)"] = "frontend/controller_subseccion/index/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */