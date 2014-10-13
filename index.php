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


$app->get('/', function () use  ($twig)  {
    echo $twig->render('index.twig');
});


$app->get('/access', function () use  ($twig)  {
    $p = Array("MarketCode" => "a3223",
               "ConsumerId" => "342234",
               "Password" => "adfasf");
    AccessControlGateway::setCredentials($p);
    echo $twig->render('access.twig');
});


$app->get('/consumer', function () use  ($twig)  {
    //ServicesGateway::submitConsumer();
    echo $twig->render('consumer.twig');
});


$app->get('/reference', function () use  ($twig, $app)  {
    //ServicesGateway::submitRerence($app);
    echo $twig->render('reference.twig');
});


$app->run();