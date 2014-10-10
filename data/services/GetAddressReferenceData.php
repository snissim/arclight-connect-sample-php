<?php

class GetAddressReferenceData
{

    /**
     * @var GetAddressReferenceDataRequest $addressReferenceDataRequest
     * @access public
     */
    public $addressReferenceDataRequest = null;

    /**
     * @param GetAddressReferenceDataRequest $addressReferenceDataRequest
     * @access public
     */
    public function __construct($addressReferenceDataRequest)
    {
      $this->addressReferenceDataRequest = $addressReferenceDataRequest;
    }

}
