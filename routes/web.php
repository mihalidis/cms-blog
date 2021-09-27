<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method'=>'indexAction'), array()));
$routes->add('admin', new Route(constant('URL_SUBFOLDER') . '/admin', array('controller' => 'AdminController', 'method'=>'indexAction'), array()));
$routes->add('category', new Route(constant('URL_SUBFOLDER') . '/category', array('controller' => 'CategoryController', 'method'=>'showAction'), array()));