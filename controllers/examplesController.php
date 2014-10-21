<?php


$app->map('/registration', function () use  ($twig, $app)  {

    $responsAttributes = Array("FirstName" => $app->request->post('FirstName'),
        "MiddleName" => $app->request->post('MiddleName'),
        "PaternalLastName" => $app->request->post('PaternalLastName'),
        "SourceCity" => $app->request->post('SourceCity'),
        "SourceProvince" => $app->request->post('SourceProvince'),
        "DirectMailPostalCode" => $app->request->post('DirectMailPostalCode'),
        "GenderCode" => $app->request->post('GenderCode'),
        "DateOfBirth" => $app->request->post('DateOfBirth'),
        "ProfileCode" => $app->request->post('ProfileCode'));

    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "LayoutName" => $app->request->post('LayoutName'),
            "ResponseAttributes" =>  $responsAttributes);
        ConsumerGateway::submitResponse($params);
    }


    echo $twig->render('examples/registration.twig', array('title' => 'Profile registration',
        'Header' => "Profile Registration",
        'MarketCode' => $app->getCookie('MarketCode'),
        'FirstName' => $app->request->post('FirstName'),
        'MiddleName' => $app->request->post('MiddleName'),
        'PaternalLastName' => $app->request->post('PaternalLastName'),
        'SourceCity' => $app->request->post('SourceCity'),
        'SourceProvince' => $app->request->post('SourceProvince'),
        'DirectMailPostalCode' => $app->request->post('DirectMailPostalCode'),
        'GenderCode' => $app->request->post('GenderCode'),
        'DateOfBirth' => $app->request->post('DateOfBirth'),
        'ProfileCode' => $app->request->post('ProfileCode'),
    ));

})->via('GET', 'POST');




$app->map('/login', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Password" => $app->request->post('Password'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::validateUser($params);
    }
    echo $twig->render('examples/login.twig', array('title' => 'Login',
        'Header' => "Login",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Password' => $app->request->post('Password'),
        'UserName' => $app->request->post('UserName')));

})->via('GET', 'POST');




$app->map('/resetpassword', function () use  ($twig, $app)  {

    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Url" => $app->request->post('Url'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::sendPasswordResetLink($params);
    }
    echo $twig->render('examples/resetPassword.twig', array('title' => 'Reset Password',
        'Header' => "Reset Password",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Url' => $app->request->post('Url') == ""? URL . "?resetcode={0}": $app->request->post('Url'),
        'UserName' => $app->request->post('UserName')));

})->via('GET', 'POST');



