<?php

include_once('ResponseBase.php');

class GetReferenceDataResponse extends ResponseBase
{

    /**
     * @var anyType $GetReferenceDataResult
     * @access public
     */
    public $GetReferenceDataResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetReferenceDataResult
     * @access public
     */
    public function __construct($ErrorCode, $GetReferenceDataResult)
    {
      parent::__construct($ErrorCode);
      $this->GetReferenceDataResult = $GetReferenceDataResult;
    }

}
