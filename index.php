<?php
require 'vendor/autoload.php';
require 'data/AccessControlGateway.php';
require 'data/ConsumerGateway.php';
require 'data/ReferenceGateway.php';

$app = new \Slim\Slim();

//TWIG view engine settings begin
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);
//TWIG view engine setting end

//Load controllers begin
require 'controllers/accessController.php';
require 'controllers/consumerController.php';
require 'controllers/referenceController.php';
require 'controllers/examplesController.php';
//Load controllers end


$app->get('/', function () use  ($twig)  {
    echo $twig->render('index.twig');
});


$app->run();