<?php

include_once('ServiceRequest.php');

class GetUpdatedProfilesRequest extends ServiceRequest
{

    /**
     * @var dateTime $EndDate
     * @access public
     */
    public $EndDate = null;

    /**
     * @var string $ResponseGroups
     * @access public
     */
    public $ResponseGroups = null;

    /**
     * @var dateTime $StartDate
     * @access public
     */
    public $StartDate = null;

    /**
     * @param dateTime $StartDate
     * @access public
     */
    public function __construct($StartDate)
    {
      parent::__construct();
      $this->StartDate = $StartDate;
    }

}
