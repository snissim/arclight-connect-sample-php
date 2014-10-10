<?php

include_once('ResponseBase.php');

class GetCampaignsResponse extends ResponseBase
{

    /**
     * @var Campaign[] $Campaigns
     * @access public
     */
    public $Campaigns = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
