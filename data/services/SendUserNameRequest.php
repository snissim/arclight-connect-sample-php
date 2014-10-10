<?php

include_once('ServiceRequest.php');

class SendUserNameRequest extends ServiceRequest
{

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
