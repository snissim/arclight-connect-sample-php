<?php

include_once('ServiceRequest.php');

class GetProfileRequest extends ServiceRequest
{

    /**
     * @var string $ConsumerID
     * @access public
     */
    public $ConsumerID = null;

    /**
     * @var string $ResponseGroups
     * @access public
     */
    public $ResponseGroups = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
