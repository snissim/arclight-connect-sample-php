<?php

include_once('ResponseBase.php');

class GetStatesResponse extends ResponseBase
{

    /**
     * @var anyType $GetStatesResult
     * @access public
     */
    public $GetStatesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetStatesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetStatesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetStatesResult = $GetStatesResult;
    }

}
