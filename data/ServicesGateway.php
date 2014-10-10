<?php
require 'config/settings.php';
require 'services/ReferenceServiceNew.php';
require 'services/AccessControlService.php';



class ServicesGateway
{

    public static function submitRerence($app)
    {
        $service = new ReferenceServiceNew();
        $ref= new RefereceDataServiceRequest();
        $ref->MarketCode = "adfa";
        $params = new GetVenues($ref);

        $service-> GetVenues($params);

        $client = new SoapClient(BASEURL . "/ReferenceService.svc?singleWsdl");
        $fcs = $client->__getFunctions();
        var_dump($fcs);
    }


    public static function submitAccessControl()
    {
       $setCredsReq = new SetCredentialsRequest();
       $setCredsReq->Auth = new Authentication();
       $setCredsReq->Auth->DeviceKey = "dasdfadsf";
       $setCredsReq->MarketCode = "34433";

       $setCreds = new SetCredentials($setCredsReq);

       $service = new AccessControlService(BASEURL . "/ReferenceService.svc?singleWsdl");
       $res = $service->SetCredentials($setCreds);
       var_dump($res);

    }


    public static function submitConsumer()
    {
        $client = new SoapClient(BASEURL . "/ConsumerService.svc?singleWsdl");
        $fcs = $client->__getFunctions();
        var_dump($fcs);
    }
}