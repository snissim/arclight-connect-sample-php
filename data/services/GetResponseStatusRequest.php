<?php

include_once('ServiceRequest.php');

class GetResponseStatusRequest extends ServiceRequest
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
