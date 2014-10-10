<?php

include_once('SubmitResponseAndCalculateBeFirstReady.php');
include_once('SubmitResponseAndCalculateBeFirstReadyResponse.php');
include_once('RegisterWebProfile.php');
include_once('RegisterWebProfileResponse.php');
include_once('Test.php');
include_once('TestResponse.php');
include_once('SearchProfiles.php');
include_once('SearchProfilesResponse.php');
include_once('GetProfile.php');
include_once('GetProfileResponse.php');
include_once('GetUpdatedProfiles.php');
include_once('GetUpdatedProfilesResponse.php');
include_once('SubmitResponse.php');
include_once('SubmitResponseResponse.php');
include_once('GetResponseStatus.php');
include_once('GetResponseStatusResponse.php');
include_once('CalculateBeFirstReadyRequest.php');
include_once('ServiceRequest.php');
include_once('SearchProfilesRequest.php');
include_once('GetProfileRequest.php');
include_once('GetUpdatedProfilesRequest.php');
include_once('SubmitResponseRequest.php');
include_once('GetResponseStatusRequest.php');
include_once('Authentication.php');
include_once('NameValue.php');
include_once('ValidationError.php');
include_once('RegisterWebProfileRequest.php');
include_once('ConsumerSearchResult.php');
include_once('ConsumerProfile.php');
include_once('AddressInfo.php');
include_once('ConsumerBrandProfile.php');
include_once('Brand.php');
include_once('PmiConsumerProfile.php');
include_once('ResponseStatusResponse.php');
include_once('ResponseBase.php');

class ConsumerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'SubmitResponseAndCalculateBeFirstReady' => '\SubmitResponseAndCalculateBeFirstReady',
      'SubmitResponseAndCalculateBeFirstReadyResponse' => '\SubmitResponseAndCalculateBeFirstReadyResponse',
      'RegisterWebProfile' => '\RegisterWebProfile',
      'RegisterWebProfileResponse' => '\RegisterWebProfileResponse',
      'Test' => '\Test',
      'TestResponse' => '\TestResponse',
      'SearchProfiles' => '\SearchProfiles',
      'SearchProfilesResponse' => '\SearchProfilesResponse',
      'GetProfile' => '\GetProfile',
      'GetProfileResponse' => '\GetProfileResponse',
      'GetUpdatedProfiles' => '\GetUpdatedProfiles',
      'GetUpdatedProfilesResponse' => '\GetUpdatedProfilesResponse',
      'SubmitResponse' => '\SubmitResponse',
      'SubmitResponseResponse' => '\SubmitResponseResponse',
      'GetResponseStatus' => '\GetResponseStatus',
      'GetResponseStatusResponse' => '\GetResponseStatusResponse',
      'CalculateBeFirstReadyRequest' => '\CalculateBeFirstReadyRequest',
      'ServiceRequest' => '\ServiceRequest',
      'SearchProfilesRequest' => '\SearchProfilesRequest',
      'GetProfileRequest' => '\GetProfileRequest',
      'GetUpdatedProfilesRequest' => '\GetUpdatedProfilesRequest',
      'SubmitResponseRequest' => '\SubmitResponseRequest',
      'GetResponseStatusRequest' => '\GetResponseStatusRequest',
      'Authentication' => '\Authentication',
      'NameValue' => '\NameValue',
      'ValidationError' => '\ValidationError',
      'RegisterWebProfileRequest' => '\RegisterWebProfileRequest',
      'ConsumerSearchResult' => '\ConsumerSearchResult',
      'ConsumerProfile' => '\ConsumerProfile',
      'AddressInfo' => '\AddressInfo',
      'ConsumerBrandProfile' => '\ConsumerBrandProfile',
      'Brand' => '\Brand',
      'PmiConsumerProfile' => '\PmiConsumerProfile',
      'ResponseStatusResponse' => '\ResponseStatusResponse',
      'ResponseBase' => '\ResponseBase');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/ConsumerService.svc?singleWsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SearchProfiles $parameters
     * @access public
     * @return SearchProfilesResponse
     */
    public function SearchProfiles(SearchProfiles $parameters)
    {
      return $this->__soapCall('SearchProfiles', array($parameters));
    }

    /**
     * @param GetProfile $parameters
     * @access public
     * @return GetProfileResponse
     */
    public function GetProfile(GetProfile $parameters)
    {
      return $this->__soapCall('GetProfile', array($parameters));
    }

    /**
     * @param GetUpdatedProfiles $parameters
     * @access public
     * @return GetUpdatedProfilesResponse
     */
    public function GetUpdatedProfiles(GetUpdatedProfiles $parameters)
    {
      return $this->__soapCall('GetUpdatedProfiles', array($parameters));
    }

    /**
     * @param SubmitResponse $parameters
     * @access public
     * @return SubmitResponseResponse
     */
    public function SubmitResponse(SubmitResponse $parameters)
    {
      return $this->__soapCall('SubmitResponse', array($parameters));
    }

    /**
     * @param GetResponseStatus $parameters
     * @access public
     * @return GetResponseStatusResponse
     */
    public function GetResponseStatus(GetResponseStatus $parameters)
    {
      return $this->__soapCall('GetResponseStatus', array($parameters));
    }

    /**
     * @param SubmitResponseAndCalculateBeFirstReady $parameters
     * @access public
     * @return SubmitResponseAndCalculateBeFirstReadyResponse
     */
    public function SubmitResponseAndCalculateBeFirstReady(SubmitResponseAndCalculateBeFirstReady $parameters)
    {
      return $this->__soapCall('SubmitResponseAndCalculateBeFirstReady', array($parameters));
    }

    /**
     * @param RegisterWebProfile $parameters
     * @access public
     * @return RegisterWebProfileResponse
     */
    public function RegisterWebProfile(RegisterWebProfile $parameters)
    {
      return $this->__soapCall('RegisterWebProfile', array($parameters));
    }

    /**
     * @param Test $parameters
     * @access public
     * @return TestResponse
     */
    public function Test(Test $parameters)
    {
      return $this->__soapCall('Test', array($parameters));
    }

}
