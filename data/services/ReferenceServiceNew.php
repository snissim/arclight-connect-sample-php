<?php

include_once('GetVenues.php');
include_once('GetVenuesResponse.php');
include_once('GetBrandAmbassadors.php');
include_once('GetBrandAmbassadorsResponse.php');
include_once('GetGIIDTypes.php');
include_once('GetGIIDTypesResponse.php');
include_once('GetMobileProviders.php');
include_once('GetMobileProvidersResponse.php');
include_once('GetStates.php');
include_once('GetStatesResponse.php');
include_once('GetCities.php');
include_once('GetCitiesResponse.php');
include_once('GetStreetTypes.php');
include_once('GetStreetTypesResponse.php');
include_once('GetBrands.php');
include_once('GetBrandsResponse.php');
include_once('GetCampaigns.php');
include_once('GetCampaignsResponse.php');
include_once('GetReferenceData.php');
include_once('GetReferenceDataResponse.php');
include_once('GetAddressReferenceData.php');
include_once('GetAddressReferenceDataResponse.php');
include_once('RefereceDataServiceRequest.php');
include_once('ServiceRequest.php');
include_once('GetCampaignsRequest.php');
include_once('GetReferenceDataRequest.php');
include_once('GetAddressReferenceDataRequest.php');
include_once('Authentication.php');
include_once('CollectionCity.php');
include_once('Venue.php');
include_once('GetBrandAmbassadorResponse.php');
include_once('BrandAmbassador.php');
include_once('GIIDType.php');
include_once('MobileProvider.php');
include_once('State.php');
include_once('StreetType.php');
include_once('Brand.php');
include_once('SubBrand.php');
include_once('Campaign.php');
include_once('Phase.php');
include_once('Audience.php');
include_once('MediaCategory.php');
include_once('Offer.php');
include_once('ReferenceData.php');
include_once('PmiReferenceData.php');
include_once('AddressReferenceData.php');
include_once('ResponseBase.php');

class ReferenceServiceNew extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'GetVenues' => '\GetVenues',
      'GetVenuesResponse' => '\GetVenuesResponse',
      'GetBrandAmbassadors' => '\GetBrandAmbassadors',
      'GetBrandAmbassadorsResponse' => '\GetBrandAmbassadorsResponse',
      'GetGIIDTypes' => '\GetGIIDTypes',
      'GetGIIDTypesResponse' => '\GetGIIDTypesResponse',
      'GetMobileProviders' => '\GetMobileProviders',
      'GetMobileProvidersResponse' => '\GetMobileProvidersResponse',
      'GetStates' => '\GetStates',
      'GetStatesResponse' => '\GetStatesResponse',
      'GetCities' => '\GetCities',
      'GetCitiesResponse' => '\GetCitiesResponse',
      'GetStreetTypes' => '\GetStreetTypes',
      'GetStreetTypesResponse' => '\GetStreetTypesResponse',
      'GetBrands' => '\GetBrands',
      'GetBrandsResponse' => '\GetBrandsResponse',
      'GetCampaigns' => '\GetCampaigns',
      'GetCampaignsResponse' => '\GetCampaignsResponse',
      'GetReferenceData' => '\GetReferenceData',
      'GetReferenceDataResponse' => '\GetReferenceDataResponse',
      'GetAddressReferenceData' => '\GetAddressReferenceData',
      'GetAddressReferenceDataResponse' => '\GetAddressReferenceDataResponse',
      'RefereceDataServiceRequest' => '\RefereceDataServiceRequest',
      'ServiceRequest' => '\ServiceRequest',
      'GetCampaignsRequest' => '\GetCampaignsRequest',
      'GetReferenceDataRequest' => '\GetReferenceDataRequest',
      'GetAddressReferenceDataRequest' => '\GetAddressReferenceDataRequest',
      'Authentication' => '\Authentication',
      'CollectionCity' => '\CollectionCity',
      'Venue' => '\Venue',
      'GetBrandAmbassadorResponse' => '\GetBrandAmbassadorResponse',
      'BrandAmbassador' => '\BrandAmbassador',
      'GIIDType' => '\GIIDType',
      'MobileProvider' => '\MobileProvider',
      'State' => '\State',
      'StreetType' => '\StreetType',
      'Brand' => '\Brand',
      'SubBrand' => '\SubBrand',
      'Campaign' => '\Campaign',
      'Phase' => '\Phase',
      'Audience' => '\Audience',
      'MediaCategory' => '\MediaCategory',
      'Offer' => '\Offer',
      'ReferenceData' => '\ReferenceData',
      'PmiReferenceData' => '\PmiReferenceData',
      'AddressReferenceData' => '\AddressReferenceData',
      'ResponseBase' => '\ResponseBase');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/ReferenceService.svc?singleWsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetGIIDTypes $parameters
     * @access public
     * @return GetGIIDTypesResponse
     */
    public function GetGIIDTypes(GetGIIDTypes $parameters)
    {
      return $this->__soapCall('GetGIIDTypes', array($parameters));
    }

    /**
     * @param GetMobileProviders $parameters
     * @access public
     * @return GetMobileProvidersResponse
     */
    public function GetMobileProviders(GetMobileProviders $parameters)
    {
      return $this->__soapCall('GetMobileProviders', array($parameters));
    }

    /**
     * @param GetStates $parameters
     * @access public
     * @return GetStatesResponse
     */
    public function GetStates(GetStates $parameters)
    {
      return $this->__soapCall('GetStates', array($parameters));
    }

    /**
     * @param GetCities $parameters
     * @access public
     * @return GetCitiesResponse
     */
    public function GetCities(GetCities $parameters)
    {
      return $this->__soapCall('GetCities', array($parameters));
    }

    /**
     * @param GetStreetTypes $parameters
     * @access public
     * @return GetStreetTypesResponse
     */
    public function GetStreetTypes(GetStreetTypes $parameters)
    {
      return $this->__soapCall('GetStreetTypes', array($parameters));
    }

    /**
     * @param GetBrands $parameters
     * @access public
     * @return GetBrandsResponse
     */
    public function GetBrands(GetBrands $parameters)
    {
      return $this->__soapCall('GetBrands', array($parameters));
    }

    /**
     * @param GetCampaigns $parameters
     * @access public
     * @return GetCampaignsResponse
     */
    public function GetCampaigns(GetCampaigns $parameters)
    {
      return $this->__soapCall('GetCampaigns', array($parameters));
    }

    /**
     * @param GetReferenceData $parameters
     * @access public
     * @return GetReferenceDataResponse
     */
    public function GetReferenceData(GetReferenceData $parameters)
    {
      return $this->__soapCall('GetReferenceData', array($parameters));
    }

    /**
     * @param GetAddressReferenceData $parameters
     * @access public
     * @return GetAddressReferenceDataResponse
     */
    public function GetAddressReferenceData(GetAddressReferenceData $parameters)
    {
      return $this->__soapCall('GetAddressReferenceData', array($parameters));
    }

    /**
     * @param GetVenues $parameters
     * @access public
     * @return GetVenuesResponse
     */
    public function GetVenues(GetVenues $parameters)
    {
      return $this->__soapCall('GetVenues', array($parameters));
    }

    /**
     * @param GetBrandAmbassadors $parameters
     * @access public
     * @return GetBrandAmbassadorsResponse
     */
    public function GetBrandAmbassadors(GetBrandAmbassadors $parameters)
    {
      return $this->__soapCall('GetBrandAmbassadors', array($parameters));
    }

}
