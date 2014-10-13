<?php

require 'config/settings.php';
require 'services/ConsumerProfile.php';
require 'services/PmiConsumerProfile.php';


class ConsumerGateway
{

    public static function getProfile($params)
    {
        try
        {
            $Req = new GetProfileRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->ConsumerID  = $params["ConsumerId"];
            $Req->ResponseGroups = $params["ResponseGroups"];

            $id = new GetProfile($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->GetProfile($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }


    public static function getResponseStatus($params)
    {
        try
        {
            $Req = new GetResponseStatusRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->TransactionID  = $params["TransactionID"];

            $id = new GetResponseStatus($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->GetResponseStatus($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }


    public static function getUpdatedProfiles($params)
    {
        try
        {
            $Req = new GetUpdatedProfilesRequest($params->StartDate);
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->ResponseGroups  = $params["ResponseGroups"];
            $Req->EndDate = $params["EndDate"];

            $id = new GetUpdatedProfiles($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->GetUpdatedProfiles($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }



    public static function registerWebProfile($params)
    {
        try
        {
            $Req = new RegisterWebProfileRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->LayoutName  = $params["LayoutName"];
            $Req->ResponseAttributes = $params["ResponseAttributes"];

            $id = new RegisterWebProfile($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->RegisterWebProfile($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }



    public static function searchProfiles($params)
    {
        try
        {
            $Req = new SearchProfilesRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->DateOfBirth  = $params["DateOfBirth"];
            $Req->Email  = $params["Email"];
            $Req->FirstName  = $params["FirstName"];
            $Req->LastName = $params["LastName"];
            $Req->GIIDNumber  = $params["GIIDNumber"];
            $Req->MaternalLastName = $params["MaternalLastName"];


            $id = new SearchProfiles($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->SearchProfiles($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }


    }


    public static function submitResponse($params)
    {
        try
        {
            $Req = new SubmitResponseRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->LayoutName  = $params["LayoutName"];
            $Req->ResponseAttributes = $params["ResponseAttributes"];

            $id = new SubmitResponse($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->SubmitResponse($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }



    public static function submitResponseAndCalculateBeFirstReady($params)
    {
        try
        {
            $Req = new CalculateBeFirstReadyRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params["MarketCode"];
            $Req->LayoutName  = $params["LayoutName"];
            $Req->ResponseAttributes = $params["ResponseAttributes"];

            $id = new SubmitResponseAndCalculateBeFirstReady($Req);

            $service = new ConsumerService(["wsdl", CONSUMER_WSDL]);
            $res = $service->SubmitResponseAndCalculateBeFirstReady($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }
}