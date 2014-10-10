<?php

include_once('ResponseBase.php');

class GetBrandAmbassadorResponse extends ResponseBase
{

    /**
     * @var BrandAmbassador[] $BrandAmbassadors
     * @access public
     */
    public $BrandAmbassadors = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
