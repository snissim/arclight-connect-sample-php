<?php
require 'config/settings.php';
require 'services/ReferenceServiceNew.php';



class ReferenceGateway
{

    public static function getBrandAmbassadors($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetBrandAmbassadors($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetBrandAmbassadors($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getAddressReferenceData($params)
    {
        try
        {
            $Req = new GetAddressReferenceDataRequest(false);
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->DisplayOnExternalSystem  = $params->DisplayOnExternalSystem;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetAddressReferenceData($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetAddressReferenceData($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }



    public static function getBrands($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetBrands($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetBrands($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getCampaigns($params)
    {
        try
        {
            $Req = new GetCampaignsRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetCampaigns($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetCampaigns($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }



    public static function getCities($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetCities($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetCities($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }




    public static function getGIIDTypes($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new getGIIDTypes($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetGIIDTypes($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getMobileProviders($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetMobileProviders($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetMobileProviders($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getStates($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetStates($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetStates($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getStreetTypes($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetStreetTypes($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetStreetTypes($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }



    public static function getVenues($params)
    {
        try
        {
            $Req = new RefereceDataServiceRequest();
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;

            $id = new GetVenues($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetVenues($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }


    public static function getReferenceData($params)
    {
        try
        {
            $Req = new GetReferenceDataRequest(false);
            $Req->Auth = new Authentication();
            $Req->Auth->DeviceKey = DEVICE_KEY;
            $Req->MarketCode = $params->MarketCode;
            $Req->LastEditDate = $params->LastEditDate;
            $Req->DisplayOnExternalSystem = $params->DisplayOnExternalSystem;
            $Req->CampaignType = $params->CampaignType;


            $id = new GetReferenceData($Req);

            $service = new ReferenceServiceNew(REFERENCE_WSDL);
            $res = $service->GetReferenceData($id);
            var_dump($res);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }





}