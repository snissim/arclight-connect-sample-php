<?php

include_once('ResponseBase.php');

class GetMobileProvidersResponse extends ResponseBase
{

    /**
     * @var anyType $GetMobileProvidersResult
     * @access public
     */
    public $GetMobileProvidersResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetMobileProvidersResult
     * @access public
     */
    public function __construct($ErrorCode, $GetMobileProvidersResult)
    {
      parent::__construct($ErrorCode);
      $this->GetMobileProvidersResult = $GetMobileProvidersResult;
    }

}
