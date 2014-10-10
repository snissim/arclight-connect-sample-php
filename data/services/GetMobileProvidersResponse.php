<?php

include_once('ResponseBase.php');

class GetMobileProvidersResponse extends ResponseBase
{

    /**
     * @var MobileProvider[] $MobileProviders
     * @access public
     */
    public $MobileProviders = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
