<?php

include_once('ResponseBase.php');

class GetAddressReferenceDataResponse extends ResponseBase
{

    /**
     * @var anyType $GetAddressReferenceDataResult
     * @access public
     */
    public $GetAddressReferenceDataResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetAddressReferenceDataResult
     * @access public
     */
    public function __construct($ErrorCode, $GetAddressReferenceDataResult)
    {
      parent::__construct($ErrorCode);
      $this->GetAddressReferenceDataResult = $GetAddressReferenceDataResult;
    }

}
