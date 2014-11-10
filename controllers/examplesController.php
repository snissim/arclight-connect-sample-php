<?php


$app->map('/registration', function () use  ($twig, $app)  {
    $resItems = array();
    $resItems [0] = array("Name" => "FirstName", "Value" => $app->request->post('FirstName'));
    $resItems [1] = array("Name" => "MiddleName", "Value" => $app->request->post('MiddleName'));
    $resItems [2] = array("Name" => "PaternalLastName", "Value" => $app->request->post('PaternalLastName'));
    $resItems [3] = array("Name" => "SourceCity", "Value" => $app->request->post('SourceCity'));
    $resItems [4] = array("Name" => "SourceProvince", "Value" => $app->request->post('SourceProvince'));
    $resItems [5] = array("Name" => "DirectMailPostalCode", "Value" => $app->request->post('DirectMailPostalCode'));
    $resItems [6] = array("Name" => "GenderCode", "Value" => $app->request->post('GenderCode'));
    $resItems [7] = array("Name" => "GIIDType1Code", "Value" => $app->request->post('GIIDType1Code'));
    $resItems [8] = array("Name" => "EmailAddress", "Value" => $app->request->post('EmailAddress'));
    $resItems [9] = array("Name" => "DateOfBirth", "Value" => $app->request->post('DateOfBirth'));
    $resItems [10] = array("Name" => "ResponseDate", "Value" => $app->request->post('ResponseDate'));
    $resItems [11] = array("Name" => "CampaignCode", "Value" => $app->request->post('CampaignCode'));
    $resItems [12] = array("Name" => "PhaseCode", "Value" => $app->request->post('PhaseCode'));
    $resItems [13] = array("Name" => "AudienceCode", "Value" => $app->request->post('AudienceCode'));
    $resItems [14] = array("Name" => "MediaCategoryCode", "Value" => $app->request->post('MediaCategoryCode'));
    $resItems [15] = array("Name" => "PieceCategoryCode", "Value" => $app->request->post('PieceCategoryCode'));
    $resItems [16] = array("Name" => "PieceCode", "Value" => $app->request->post('PieceCode'));
    $resItems [17] = array("Name" => "KeyDate", "Value" => $app->request->post('KeyDate'));
    $resItems [18] = array("Name" => "DirectMailDeliveryStatusCode", "Value" => $app->request->post('DirectMailDeliveryStatusCode'));
    $resItems [19] = array("Name" => "EmailDeliverabilityStatusCode", "Value" => $app->request->post('EmailDeliverabilityStatusCode'));
    $resItems [20] = array("Name" => "HasAcceptedLegalTermsCode", "Value" => $app->request->post('HasAcceptedLegalTermsCode'));
    $resItems [21] = array("Name" => "ProfileCode", "Value" => $app->request->post('ProfileCode'));
    $responsAttributes = array($resItems);

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




