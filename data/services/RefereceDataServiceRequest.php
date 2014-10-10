<?php

include_once('ServiceRequest.php');

class RefereceDataServiceRequest extends ServiceRequest
{

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
