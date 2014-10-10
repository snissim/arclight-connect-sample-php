<?php

include_once('ServiceRequest.php');

class GetReferenceDataRequest extends ServiceRequest
{

    /**
     * @var string $CampaignType
     * @access public
     */
    public $CampaignType = null;

    /**
     * @var boolean $DisplayOnExternalSystem
     * @access public
     */
    public $DisplayOnExternalSystem = null;

    /**
     * @var string $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @param boolean $DisplayOnExternalSystem
     * @access public
     */
    public function __construct($DisplayOnExternalSystem)
    {
      parent::__construct();
      $this->DisplayOnExternalSystem = $DisplayOnExternalSystem;
    }

}
