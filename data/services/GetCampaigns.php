<?php

class GetCampaigns
{

    /**
     * @var GetCampaignsRequest $campignRequest
     * @access public
     */
    public $campignRequest = null;

    /**
     * @param GetCampaignsRequest $campignRequest
     * @access public
     */
    public function __construct($campignRequest)
    {
      $this->campignRequest = $campignRequest;
    }

}
