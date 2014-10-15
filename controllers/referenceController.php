<?php

$app->get('/reference', function () use  ($twig, $app)  {
    echo $twig->render('reference/reference.twig');
});



$app->get('/reference/getBrandAmbassadors', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getBrandAmbassadors($params);
    }

    echo $twig->render('reference/getBrandAmbassadors.twig', array('title' => 'Get Brand Ambassadors',
        'Header' => "Get Brand Ambassadors",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getBrands', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getBrands($params);
    }

    echo $twig->render('reference/getBrands.twig', array('title' => 'Get Brands',
        'Header' => "Get Brands",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');


$app->get('/reference/getCampaigns', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getCampaigns($params);
    }

    echo $twig->render('reference/getCampaigns.twig', array('title' => 'Get Campaigns',
        'Header' => "Get Campaigns",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getCities', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getCities($params);
    }

    echo $twig->render('reference/getCities.twig', array('title' => 'Get Cities',
        'Header' => "Get Cities",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');




$app->get('/reference/getStates', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getStates($params);
    }

    echo $twig->render('reference/getStates.twig', array('title' => 'Get States',
        'Header' => "Get States",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getStreetTypes', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getStreetTypes($params);
    }

    echo $twig->render('reference/getStreetTypes.twig', array('title' => 'Get Street Types',
        'Header' => "Get Street Types",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getGIIDTypes', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getGIIDTypes($params);
    }

    echo $twig->render('reference/getGIIDTypes.twig', array('title' => 'Get GIID Types',
        'Header' => "Get GIID Types",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');




$app->get('/reference/getMobileProviders', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getMobileProviders($params);
    }

    echo $twig->render('reference/getMobileProviders.twig', array('title' => 'Get Mobile Providers',
        'Header' => "Get Mobile Providers",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getVenues', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getVenues($params);
    }

    echo $twig->render('reference/getVenues.twig', array('title' => 'Get Venues',
        'Header' => "Get Venues",
        'MarketCode' => $app->getCookie('MarketCode'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');



$app->get('/reference/getAddressReferenceData', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "DisplayOnExternalSystem" => $app->request->post('DisplayOnExternalSystem'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getAddressReferenceData($params);
    }

    echo $twig->render('reference/getAddressReferenceData.twig', array('title' => 'Get Address Reference Data',
        'Header' => "Get Address Reference Data",
        'MarketCode' => $app->getCookie('MarketCode'),
        'DisplayOnExternalSystem' => $app->getCookie('DisplayOnExternalSystem'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');


$app->get('/reference/getReferenceData', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "DisplayOnExternalSystem" => $app->request->post('DisplayOnExternalSystem'),
            "CampaignType" => $app->request->post('CampaignType'),
            "LastEditDate" => $app->request->post('LastEditDate'));
        ReferenceGateway::getReferenceData($params);
    }

    echo $twig->render('reference/getReferenceData.twig', array('title' => 'Get Reference Data',
        'Header' => "Get Reference Data",
        'MarketCode' => $app->getCookie('MarketCode'),
        'DisplayOnExternalSystem' => $app->getCookie('DisplayOnExternalSystem'),
        'CampaignType' => $app->getCookie('CampaignType'),
        'LastEditDate' => $app->request->post('LastEditDate'),
    ));

})->via('GET', 'POST');





