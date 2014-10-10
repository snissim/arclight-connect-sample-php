<?php

include_once('ResponseBase.php');

class GetBrandsResponse extends ResponseBase
{

    /**
     * @var Brand[] $Brands
     * @access public
     */
    public $Brands = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
