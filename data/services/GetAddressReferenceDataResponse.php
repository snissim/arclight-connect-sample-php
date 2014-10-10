<?php

include_once('ResponseBase.php');

class GetAddressReferenceDataResponse extends ResponseBase
{

    /**
     * @var AddressReferenceData $AddressReferenceData
     * @access public
     */
    public $AddressReferenceData = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
