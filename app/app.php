<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Card.php';
	require_once __DIR__.'/../src/Player.php';
	require_once __DIR__.'/../src/Game.php';

	session_start();
	if(empty($_SESSION['game'])){
		$_SESSION['game']= new Game(array(
			new Player('Joe', true),
			new Player('computer')
		));
		$_SESSION['game']->deal();
	}

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get("/", function() use ($app){
		// print_r($_SESSION['game']);
	});

	// $app->get('/new_game', function(){
	// 	$_SESSION['game']->save();
	// });


	return $app;

?>
