<?php

include_once('ResponseBase.php');

class GetBrandsResponse extends ResponseBase
{

    /**
     * @var anyType $GetBrandsResult
     * @access public
     */
    public $GetBrandsResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetBrandsResult
     * @access public
     */
    public function __construct($ErrorCode, $GetBrandsResult)
    {
      parent::__construct($ErrorCode);
      $this->GetBrandsResult = $GetBrandsResult;
    }

}
