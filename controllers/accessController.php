<?php


$app->get('/access', function () use  ($twig)  {
    /*$params = Array("MarketCode" => "a3223",
               "ConsumerId" => "342234",
               "Password" => "adfasf");
    AccessControlGateway::setCredentials($params);
    */
    echo $twig->render('access/access.twig');
});

$app->get('/access/setcredentials', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "ConsumerId" => $app->request->post('ConsumerId'),
            "Password" => $app->request->post('Password'));
        AccessControlGateway::setCredentials($params);
    }

    echo $twig->render('access/setcredentials.twig', array('title' => 'Set Credentials',
       'Header' => "Set Credentials",
       'MarketCode' => $app->getCookie('MarketCode'),
       'ConsumerId' => $app->request->post('ConsumerId'),
       'Password' => $app->request->post('Password'),
    ));

})->via('GET', 'POST');



$app->get('/access/changePassword', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "NewPassword" => $app->request->post('NewPassword'),
            "OldPassword" => $app->request->post('OldPassword'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::changePassword($params);
    }
    echo $twig->render('access/changepassword.twig', array('title' => 'Change Password',
        'Header' => "Change Password",
        'MarketCode' => $app->getCookie('MarketCode'),
        'NewPassword' => $app->request->post('NewPassword'),
        'OldPassword' => $app->request->post('OldPassword'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/changePasswordByResetCode', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "NewPassword" => $app->request->post('NewPassword'),
            "ResetCode" => $app->request->post('ResetCode'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::changePasswordByResetCode($params);
    }
    echo $twig->render('access/changePasswordByResetCode.twig', array('title' => 'Change Password By Reset Code',
        'Header' => "Change Password By Reset Code",
        'MarketCode' => $app->getCookie('MarketCode'),
        'NewPassword' => $app->request->post('NewPassword'),
        'ResetCode' => $app->request->post('ResetCode'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/resetCredentials', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Email" => $app->request->post('Email'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::resetCredentials($params);
    }
    echo $twig->render('access/resetCredentials.twig', array('title' => 'Reset Credentials',
        'Header' => "Reset Credentials",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Email' => $app->request->post('Email'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/sendPasswordResetLink', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Url" => $app->request->post('Url'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::sendPasswordResetLink($params);
    }
    echo $twig->render('access/sendPasswordResetLink.twig', array('title' => 'Send Password Reset Link',
        'Header' => "Send Password Reset Link",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Url' => $app->request->post('Url'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');



$app->get('/access/sendUserName', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Email" => $app->request->post('Email'));
        AccessControlGateway::sendUserName($params);
    }
    echo $twig->render('access/sendUserName.twig', array('title' => 'Send Username',
        'Header' => "Send Username",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Email' => $app->request->post('Email')));
})->via('GET', 'POST');



$app->get('/access/validateUser', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $app->setCookie('MarketCode', $app->request->post('MarketCode'));
        $params = Array("MarketCode" => $app->request->post('MarketCode'),
            "Password" => $app->request->post('Password'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::validateUser($params);
    }
    echo $twig->render('access/validateUser.twig', array('title' => 'Validate User',
        'Header' => "Validate User",
        'MarketCode' => $app->getCookie('MarketCode'),
        'Password' => $app->request->post('Password'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




