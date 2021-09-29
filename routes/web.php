<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method'=>'homeAction'), array()));

//admin panel home
$routes->add('admin', new Route(constant('URL_SUBFOLDER') . '/admin', array('controller' => 'AdminController', 'method'=>'indexAction'), array()));

//admin panel categories
$routes->add('category', new Route(constant('URL_SUBFOLDER') . '/admin-categories', array('controller' => 'CategoryController', 'method'=>'categoryAction'), array()));
$routes->add('categoryDelete', new Route(constant('URL_SUBFOLDER') . '/admin-categories?delete={id}', array('controller' => 'CategoryController', 'method'=>'deleteAction'), array('id' => '[0-9]+')));
$routes->add('categoryUpdate', new Route(constant('URL_SUBFOLDER') . '/admin-categories?update={id}', array('controller' => 'CategoryController', 'method'=>'updateAction'), array('id' => '[0-9]+')));