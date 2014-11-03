<?php

include_once('ResponseBase.php');

class GetGIIDTypesResponse extends ResponseBase
{

    /**
     * @var anyType $GetGIIDTypesResult
     * @access public
     */
    public $GetGIIDTypesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetGIIDTypesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetGIIDTypesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetGIIDTypesResult = $GetGIIDTypesResult;
    }

}
