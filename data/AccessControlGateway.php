<?php
require 'config/settings.php';
require 'services/AccessControlService.php';



class AccessControlGateway
{

    public static function setCredentials($params)
    {
        try
        {
            $Req = new SetCredentialsRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->ConsumerId = $params["ConsumerId"];
            $Req->Password = $params["Password"];


            $id = new SetCredentials($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->SetCredentials($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }



    public static function changePassword($params)
    {
        try
        {
            $Req = new ChangePasswordRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->NewPassword = $params["NewPassword"];
            $Req->OldPassword = $params["OldPassword"];
            $Req->UserName = $params["UserName"];


            $id = new ChangePassword ($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->ChangePassword($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }


    public static function changePasswordByResetCode($params)
    {
        try
        {
            $Req = new ChangePasswordByResetCodeRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->NewPassword = $params["NewPassword"];
            $Req->UserName = $params["UserName"];
            $Req->ResetCode = $params["ResetCode"];

            $id = new ChangePasswordByResetCode($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->ChangePasswordByResetCode($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }


    public static function resetCredentials($params)
    {
        try
        {
            $Req = new ResetCredentialsRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->Email = $params["Email"];
            $Req->UserName = $params["UserName"];

            $id = new ResetCredentials($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->ResetCredentials($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }




    public static function sendPasswordResetLink($params)
    {
        try
        {
            $Req = new SendPasswordResetLinkRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->Url = $params["Url"];
            $Req->UserName = $params["UserName"];

            $id = new SendPasswordResetLink($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->SendPasswordResetLink($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }




    public static function sendUserName($params)
    {
        try
        {
            $Req = new SendUserNameRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->Email = $params["Email"];

            $id = new SendUserName($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->SendUserName($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }



    public static function validateUser($params)
    {
        try
        {
            $Req = new ValidateUserRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = MARKET_CODE;
            $Req->Password = $params["Password"];
            $Req->UserName = $params["UserName"];

            $id = new ValidateUser($Req);

            $service = new AccessControlService(["wsdl", ACCESS_CONTROL_WSDL]);
            $res = $service->ValidateUser($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


}