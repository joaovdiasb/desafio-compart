<?php

use App\Service\Route\Route;

$route = new Route();

/**
 * Web Route
 */
$route->group(null);
$route->get('/', 'FormController:index');
$route->post('/form', 'FormController:form');

$route->dispatch();