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
//Load controllers end


$app->get('/', function () use  ($twig)  {
    echo $twig->render('index.twig');
});


$app->get('/access', function () use  ($twig)  {
    /*$params = Array("MarketCode" => "a3223",
               "ConsumerId" => "342234",
               "Password" => "adfasf");
    AccessControlGateway::setCredentials($params);
    */
    echo $twig->render('access/access.twig');
});



$app->get('/consumer', function () use  ($twig)  {
    //ServicesGateway::submitConsumer();
    echo $twig->render('consumer/consumer.twig');
});


$app->get('/reference', function () use  ($twig, $app)  {
    //ServicesGateway::submitRerence($app);
    echo $twig->render('reference/reference.twig');
});


$app->run();