<?php

include_once('ServiceRequest.php');

class GetCampaignsRequest extends ServiceRequest
{

    /**
     * @var string $CampaignType
     * @access public
     */
    public $CampaignType = null;

    /**
     * @var string $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
