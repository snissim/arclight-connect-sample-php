<?php

include_once('ResponseBase.php');

class SubmitResponseResponse extends ResponseBase
{

    /**
     * @var anyType $SubmitResponseResult
     * @access public
     */
    public $SubmitResponseResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $SubmitResponseResult
     * @access public
     */
    public function __construct($ErrorCode, $SubmitResponseResult)
    {
      parent::__construct($ErrorCode);
      $this->SubmitResponseResult = $SubmitResponseResult;
    }

}
