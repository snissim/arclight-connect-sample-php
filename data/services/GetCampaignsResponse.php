<?php

include_once('ResponseBase.php');

class GetCampaignsResponse extends ResponseBase
{

    /**
     * @var anyType $GetCampaignsResult
     * @access public
     */
    public $GetCampaignsResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetCampaignsResult
     * @access public
     */
    public function __construct($ErrorCode, $GetCampaignsResult)
    {
      parent::__construct($ErrorCode);
      $this->GetCampaignsResult = $GetCampaignsResult;
    }

}
