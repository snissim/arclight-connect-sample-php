<?php

$app->get('/consumer', function () use  ($twig)  {
    echo $twig->render('consumer/consumer.twig');
});



$app->get('/consumer/getProfile', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "ConsumerId" => $app->request->post('ConsumerId'),
            "ResponseGroups" => $app->request->post('ResponseGroups'));
        ConsumerGateway::getProfile($params);
    }

    echo $twig->render('consumer/getProfile.twig', array('title' => 'Get Profile',
        'Header' => "Get Profile",
        'ConsumerId' => $app->request->post('ConsumerId'),
        'ResponseGroups' => $app->request->post('ResponseGroups'),
    ));

})->via('GET', 'POST');



$app->get('/consumer/getResponseStatus', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "TransactionID" => $app->request->post('TransactionID'));
        ConsumerGateway::getResponseStatus($params);
    }

    echo $twig->render('consumer/getResponseStatus.twig', array('title' => 'Get Response Status',
        'Header' => "Get Response Status",
        'TransactionID' => $app->request->post('TransactionID')
    ));

})->via('GET', 'POST');




$app->get('/consumer/getUpdatedProfiles', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "EndDate" => $app->request->post('EndDate'),
            "ResponseGroups" => $app->request->post('ResponseGroups'));
        ConsumerGateway::getUpdatedProfiles($params);
    }

    echo $twig->render('consumer/getUpdatedProfiles.twig', array('title' => 'Get Updated Profile',
        'Header' => "Get Updated Profile",
        'EndDate' => $app->request->post('EndDate'),
        'ResponseGroups' => $app->request->post('ResponseGroups')
    ));

})->via('GET', 'POST');



$app->get('/consumer/registerWebProfile', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "LayoutName" => $app->request->post('LayoutName'),
            "ResponseAttributes" =>   processResponseAttributes($app->request->post('ResponseAttributes')));
        ConsumerGateway::registerWebProfile($params);
    }

    echo $twig->render('consumer/registerWebProfile.twig', array('title' => 'Register Web Profile',
        'Header' => "Register Web Profile",
        'LayoutName' => $app->request->post('LayoutName'),
        'ResponseAttributes' => $app->request->post('ResponseAttributes')
    ));

})->via('GET', 'POST');



$app->get('/consumer/searchProfiles', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "DateOfBirth" => $app->request->post('DateOfBirth'),
            "Email" => $app->request->post('Email'),
            "FirstName" => $app->request->post('FirstName'),
            "LastName" => $app->request->post('LastName'),
            "MiddleName" => $app->request->post('MiddleName'),
            "MaternalLastName" => $app->request->post('MaternalLastName'),
            "GIIDNumber" => $app->request->post('GIIDNumber'));
        ConsumerGateway::searchProfiles($params);
    }

    echo $twig->render('consumer/searchProfiles.twig', array('title' => 'Search Profiles',
        'Header' => "Search Profiles",
        'DateOfBirth' => $app->request->post('DateOfBirth'),
        'Email' => $app->request->post('Email'),
        'FirstName' => $app->request->post('FirstName'),
        'LastName' => $app->request->post('LastName'),
        'MiddleName' => $app->request->post('MiddleName'),
        'MaternalLastName' => $app->request->post('MaternalLastName'),
        'GIIDNumber' => $app->request->post('GIIDNumber'),
    ));

})->via('GET', 'POST');



$app->get('/consumer/submitResponse', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "LayoutName" => $app->request->post('LayoutName'),
            "ResponseAttributes" =>  processResponseAttributes($app->request->post('ResponseAttributes')));
        ConsumerGateway::submitResponse($params);
    }

    echo $twig->render('consumer/submitResponse.twig', array('title' => 'Submit Response',
        'Header' => "Submit Response",
        'LayoutName' => $app->request->post('LayoutName'),
        'ResponseAttributes' => $app->request->post('ResponseAttributes'),
    ));

})->via('GET', 'POST');


$app->get('/consumer/submitResponseAndCalculateBeFirstReady', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "LayoutName" => $app->request->post('LayoutName'),
            "ResponseAttributes" =>  processResponseAttributes($app->request->post('ResponseAttributes')));
        ConsumerGateway::submitResponseAndCalculateBeFirstReady($params);
    }

    echo $twig->render('consumer/submitResponseAndCalculateBeFirstReady.twig', array('title' => 'Submit Response And Calculate Be First Ready',
        'Header' => "Submit Response And Calculate Be First Ready",
        'LayoutName' => $app->request->post('LayoutName'),
        'ResponseAttributes' => $app->request->post('ResponseAttributes'),
    ));

})->via('GET', 'POST');





function processResponseAttributes($source)
{
    $items = explode(":", $source);
    $res = Array();
    if(isset($source) && $source != "")
    {
        foreach ($items as $item)
        {
            $hold = explode("=", $item);
            $res[$hold[0]] = $hold[1];
        }
    }
    return $res;
}

















