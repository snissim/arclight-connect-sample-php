<?php

include_once('ResponseBase.php');

class GetVenuesResponse extends ResponseBase
{

    /**
     * @var anyType $GetVenuesResult
     * @access public
     */
    public $GetVenuesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetVenuesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetVenuesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetVenuesResult = $GetVenuesResult;
    }

}
