<?php

include_once('ResponseBase.php');

class GetCitiesResponse extends ResponseBase
{

    /**
     * @var anyType $GetCitiesResult
     * @access public
     */
    public $GetCitiesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetCitiesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetCitiesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetCitiesResult = $GetCitiesResult;
    }

}
