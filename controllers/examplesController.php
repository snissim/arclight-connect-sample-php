<?php


$app->map('/registration', function () use  ($twig, $app)  {
    $responsAttributes = Array(
        "FirstName" => $app->request->post('FirstName'),
        "MiddleName" => $app->request->post('MiddleName'),
        "PaternalLastName" => $app->request->post('PaternalLastName'),
        "SourceCity" => $app->request->post('SourceCity'),
        "SourceProvince" => $app->request->post('SourceProvince'),
        "DirectMailPostalCode" => $app->request->post('DirectMailPostalCode'),
        "GenderCode" => $app->request->post('GenderCode'),
        'GIIDType1Code' => $app->request->post('GIIDType1Code'),
        'EmailAddress' => $app->request->post('EmailAddress'),
        "DateOfBirth" => $app->request->post('DateOfBirth'),
        "ResponseDate" => $app->request->post('ResponseDate'),
        "CampaignCode" => $app->request->post('CampaignCode'),
        "PhaseCode" => $app->request->post('PhaseCode'),
        "AudienceCode" => $app->request->post('AudienceCode'),
        "MediaCategoryCode" => $app->request->post('MediaCategoryCode'),
        "PieceCategoryCode" => $app->request->post('PieceCategoryCode'),
        "PieceCode" => $app->request->post('PieceCode'),
        "KeyDate" => $app->request->post('KeyDate'),
        "DirectMailDeliveryStatusCode" => DIRECT_MAIL_DELIVERY_STATUS_CODE,
        "EmailDeliverabilityStatusCode" => EMAIL_DELIVERABILITY_STATUS_CODE,
        "HasAcceptedLegalTermsCode" => $app->request->post('HasAcceptedLegalTermsCode') != "Y"? "N":"Y",
        "ProfileCode" => $app->request->post('ProfileCode'));
    if ($app->request()->isPost()) {
        $params = Array(
            "LayoutName" => "WebProfileRegistration",
            "ResponseAttributes" =>  $responsAttributes);
        ConsumerGateway::submitResponse($params);
    }


    echo $twig->render('examples/registration.twig', array('title' => 'Profile registration',
        'Header' => "Profile Registration",
        'FirstName' => $app->request->post('FirstName'),
        'MiddleName' => $app->request->post('MiddleName'),
        'PaternalLastName' => $app->request->post('PaternalLastName'),
        'SourceCity' => $app->request->post('SourceCity'),
        'SourceProvince' => $app->request->post('SourceProvince'),
        'DirectMailPostalCode' => $app->request->post('DirectMailPostalCode'),
        'GenderCode' => $app->request->post('GenderCode'),
        'GIIDType1Code' => $app->request->post('GIIDType1Code'),
        'EmailAddress' => $app->request->post('EmailAddress'),
        'DateOfBirth' => $app->request->post('DateOfBirth'),
        "ResponseDate" => $app->request->post('ResponseDate'),
        "CampaignCode" => $app->request()->isGet()? "AR1400CP10AL1": $app->request->post('CampaignCode'),
        "PhaseCode" => $app->request()->isGet()? "AAAA": $app->request->post('PhaseCode'),
        "MediaCategoryCode" => $app->request()->isGet()? "OEM": $app->request->post('MediaCategoryCode'),
        "PieceCategoryCode" => $app->request()->isGet()? "900": $app->request->post('PieceCategoryCode'),
        "PieceCode" => $app->request()->isGet()? "900901": $app->request->post('PieceCode'),
        "AudienceCode" => $app->request()->isGet()? "0001": $app->request->post('AudienceCode'),
        "KeyDate" => $app->request->post('KeyDate'),
        "HasAcceptedLegalTermsCode" => $app->request->post('HasAcceptedLegalTermsCode'),
        'ProfileCode' => $app->request->post('ProfileCode'),
    ));

})->via('GET', 'POST');




$app->map('/login', function () use  ($twig, $app)  {
    if ($app->request()->isPost()) {
        $params = Array(
            "Password" => $app->request->post('Password'),
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::validateUser($params);
    }
    echo $twig->render('examples/login.twig', array('title' => 'Login',
        'Header' => "Login",
        'Password' => $app->request->post('Password'),
        'UserName' => $app->request->post('UserName')));

})->via('GET', 'POST');




$app->map('/resetpassword', function () use  ($twig, $app)  {

    if ($app->request()->isPost()) {
        $params = Array(
            "Url" => $app->request()->getUrl() . "/reset?resetcode={0}",
            "UserName" => $app->request->post('UserName'));
        AccessControlGateway::sendPasswordResetLink($params);
    }
    echo $twig->render('examples/resetPassword.twig', array('title' => 'Reset Password',
        'Header' => "Reset Password",
        'Url' => $app->request->post('Url') == ""? URL . "?resetcode={0}": $app->request->post('Url'),
        'UserName' => $app->request->post('UserName')));

})->via('GET', 'POST');




$app->map('/reset', function () use  ($twig, $app)  {

    if ($app->request()->isPost()) {
        $params = Array('NewPassword' => $app->request->post("NewPassword"),
            'UserName' => $app->request->post("UserName"),
            'ResetCode' => $app->request->post("ResetCode"));
        AccessControlGateway::changePasswordByResetCode($params);
    }
    echo $twig->render('examples/reset.twig', array('title' => 'Reset Password',
        'Header' => "Reset Password",
        'ResetCode' => $app->request()->isPost()? $app->request->post("ResetCode"): $app->request->get("resetcode"),
        'UserName' => $app->request->post('UserName')));

})->via('GET', 'POST');




