<?php
use Cake\Routing\Router;

Router::plugin('Queue', ['path' => '/queue'], function ($routes) {
	$routes->connect('/:controller');
});
