<?php

include_once('ResponseBase.php');

class GetProfileResponse extends ResponseBase
{

    /**
     * @var anyType $GetProfileResult
     * @access public
     */
    public $GetProfileResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetProfileResult
     * @access public
     */
    public function __construct($ErrorCode, $GetProfileResult)
    {
      parent::__construct($ErrorCode);
      $this->GetProfileResult = $GetProfileResult;
    }

}
