<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Card.php';
	require_once __DIR__.'/../src/Player.php';
	require_once __DIR__.'/../src/Game.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function(){return 'Hello, World!';});


	return $app;

?>
