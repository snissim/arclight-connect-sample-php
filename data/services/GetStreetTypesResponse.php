<?php

include_once('ResponseBase.php');

class GetStreetTypesResponse extends ResponseBase
{

    /**
     * @var anyType $GetStreetTypesResult
     * @access public
     */
    public $GetStreetTypesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetStreetTypesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetStreetTypesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetStreetTypesResult = $GetStreetTypesResult;
    }

}
