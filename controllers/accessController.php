<?php


$app->get('/access', function () use  ($twig)  {
    echo $twig->render('access/access.twig');
});

$app->get('/access/setcredentials', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "ConsumerId" => $app->request->post('ConsumerId'),
            "Password" => $app->request->post('Password'));
        AccessControlGateway::setCredentials($params);
    }

    echo $twig->render('access/setcredentials.twig', array('title' => 'Set Credentials',
       'Header' => "Set Credentials",
       'ConsumerId' => $app->request->post('ConsumerId'),
       'Password' => $app->request->post('Password'),
    ));

})->via('GET', 'POST');



$app->get('/access/changePassword', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "NewPassword" => $app->request->post('NewPassword'),
            "OldPassword" => $app->request->post('OldPassword'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::changePassword($params);
    }
    echo $twig->render('access/changepassword.twig', array('title' => 'Change Password',
        'Header' => "Change Password",
        'NewPassword' => $app->request->post('NewPassword'),
        'OldPassword' => $app->request->post('OldPassword'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/changePasswordByResetCode', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "NewPassword" => $app->request->post('NewPassword'),
            "ResetCode" => $app->request->post('ResetCode'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::changePasswordByResetCode($params);
    }
    echo $twig->render('access/changePasswordByResetCode.twig', array('title' => 'Change Password By Reset Code',
        'Header' => "Change Password By Reset Code",
        'NewPassword' => $app->request->post('NewPassword'),
        'ResetCode' => $app->request->post('ResetCode'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/resetCredentials', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "Email" => $app->request->post('Email'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::resetCredentials($params);
    }
    echo $twig->render('access/resetCredentials.twig', array('title' => 'Reset Credentials',
        'Header' => "Reset Credentials",
        'Email' => $app->request->post('Email'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




$app->get('/access/sendPasswordResetLink', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "Url" => $app->request->post('Url'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::sendPasswordResetLink($params);
    }
    echo $twig->render('access/sendPasswordResetLink.twig', array('title' => 'Send Password Reset Link',
        'Header' => "Send Password Reset Link",
        'Url' => $app->request->post('Url'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');



$app->get('/access/sendUserName', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "Email" => $app->request->post('Email'));
        AccessControlGateway::sendUserName($params);
    }
    echo $twig->render('access/sendUserName.twig', array('title' => 'Send Username',
        'Header' => "Send Username",
        'Email' => $app->request->post('Email')));
})->via('GET', 'POST');



$app->get('/access/validateUser', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "Password" => $app->request->post('Password'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::validateUser($params);
    }
    echo $twig->render('access/validateUser.twig', array('title' => 'Validate User',
        'Header' => "Validate User",
        'Password' => $app->request->post('Password'),
        'UserName' => $app->request->post('UserName')));
})->via('GET', 'POST');




