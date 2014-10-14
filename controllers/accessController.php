<?php


$app->get('/access/setcredentials', function () use  ($twig)  {
    echo $twig->render('access/setcredentials.twig', array('title' => 'Set Credentials',
                                                           'Header' => "Set Credentials"));
});


$app->get('/access/changePassword', function () use  ($twig)  {
    echo $twig->render('access/changepassword.twig', array('title' => 'Change Password',
        'Header' => "Change Password"));
});


$app->get('/access/changePasswordByResetCode', function () use  ($twig)  {
    echo $twig->render('access/changepassword.twig', array('title' => 'Change Password By Reset Code',
        'Header' => "Change Password By Reset Code"));
});


$app->get('/access/resetCredentials', function () use  ($twig)  {
    echo $twig->render('access/resetCredentials.twig', array('title' => 'Reset Credentials',
        'Header' => "Reset Credentials"));
});


$app->get('/access/sendPasswordResetLink', function () use  ($twig)  {
    echo $twig->render('access/sendPasswordResetLink.twig', array('title' => 'Send Password Reset Link',
        'Header' => "Send Password Reset Link"));
});


$app->get('/access/sendUserName', function () use  ($twig)  {
    echo $twig->render('access/sendUserName.twig', array('title' => 'Send Username',
        'Header' => "Send Username"));
});


$app->get('/access/validateUser', function () use  ($twig)  {
    echo $twig->render('access/validateUser.twig', array('title' => 'Validate User',
        'Header' => "Validate User"));
});




